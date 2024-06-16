$('.js-trigger-transition').on('click', function (e) {
    e.preventDefault();
    
    // Validar formulario antes de la transición
    var usuario = $('#usuario').val();
    var password = $('#password').val();

    // Validar que el usuario y contraseña sean correctos
    if (usuario === 'admin' && password === '123') {
        transition(function() {
            // Redirigir después de la transición
            window.location.href = 'menu_login.php';
        });
    } else {
        $('#error').text('Usuario o contraseña incorrectos.');
        alert("Usuario o contraseña incorrecta");
    }
});

function transition(callback) {
    var tl = new TimelineMax({
        onComplete: callback // Ejecutar callback después de la animación
    });

    tl.to(CSSRulePlugin.getRule('body:before'), 0.2, { cssRule: { top: '50%' }, ease: Power2.easeOut }, 'close')
        .to(CSSRulePlugin.getRule('body:after'), 0.2, { cssRule: { bottom: '50%' }, ease: Power2.easeOut }, 'close')
        .to($('.loader'), 0.2, { opacity: 1 })
        .to(CSSRulePlugin.getRule('body:before'), 0.2, { cssRule: { top: '0%' }, ease: Power2.easeOut }, '+=1.5', 'open')
        .to(CSSRulePlugin.getRule('body:after'), 0.2, { cssRule: { bottom: '0%' }, ease: Power2.easeOut }, '-=0.2', 'open')
        .to($('.loader'), 0.2, { opacity: 0 }, '-=0.2');
}

