import express from 'express';
import cors from 'cors';
import { MercadoPagoConfig, Preference } from 'mercadopago';
const app = express();
const port = 3000;

const client = new MercadoPagoConfig({ accessToken: 'APP_USR-6839131671515424-061001-9a0daae2300bb7815aa1f64c103cdcb4-1849783817' });
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
                    quantity: Number(req.body.quantity), 
                    unit_price: Number(req.body.unit_price), 
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
