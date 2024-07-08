import express from 'express';
import cors from 'cors';
import { MercadoPagoConfig, Preference } from 'mercadopago';
const app = express();
const port = 27;

const client = new MercadoPagoConfig({ accessToken: 'TEST-6839131671515424-061001-4105f4b6d1f0946deedc4a5567b63334-1849783817' });
app.use(cors());
app.use(express.json());

app.get("/", (req, res) => {
    res.send("Soy el server");
});

app.post("/create_preference", async (req, res) => {
    try {
        const body = {
            items: [
                {
                    quantity: Number(req.body.cantidad), 
                    unit_price: Number(req.body.precio), 
                    title: req.body.titular,
                    currency_id: "PEN",
                }
            ],
            back_urls: {
                success: "http://localhost/22/pagado.php",
                failure: "http://localhost/22/pagado.php",
                pending: "http://localhost/22/pagado.php",
            },
            auto_return: "approved",
        };

        const preference = new Preference(client);
        const result = await preference.create({ body });
        res.json({ id: result.id });
    } catch (error) {
        console.log(error);
        res.status(500).json({ error: "Error al crear la preferencia" });
    }
});

app.listen(port, () => {
    console.log(`Servidor corriendo en el puerto ${port}`);
});
