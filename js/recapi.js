
const mp = new MercadoPago('TEST-9978320c-479c-4fe7-8819-32acd689662c', {
    locale: 'es-PE'
});
const bricksBuilder = mp.bricks();

document.getElementById('checkout-btn').addEventListener('click', async () => {
    try {
        const response = await fetch("http://localhost:3000/create_preference", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                title: document.querySelector(".name").innerText,
                quantity: 1,
                price: 100,
            })
        });

        const preference = await response.json();
        createCheckoutButton(preference.id);
    } catch (e) {
        console.log(e);
    }
});

const createCheckoutButton = (preferenceID) => {
    const bricksBuilder = mp.brick();

    const rendererComponent = async () => {
        if (window.checkoutButton) window.checkoutButton.unmount();
        await bricksBuilder.create("wallet", "wallet_container", {
            initialization: {
                preferenceId: preferenceID,
            },
            customization: {
                texts: {
                    action: 'buy',
                    valueProp: 'security_safety',
                },
            },
        });
    };

    rendererComponent();
}
