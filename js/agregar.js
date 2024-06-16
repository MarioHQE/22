$(document).ready(function() {
    $('#addPlatoBtn').on('click', function() {
        var formData = new FormData($('#addPlatoForm')[0]);
        
        $.ajax({
            url: 'php/agregarplato.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                alert(response);
                location.reload();
            },
            error: function() {
                alert('Error al agregar el plato.');
            }
        });
    });
});
