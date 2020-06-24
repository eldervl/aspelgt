
$('#form').submit(function(event) {
    event.preventDefault();
    /*Cambia 6LcZu9QUAAAAACaj-WBiVIQUlr94vfCC8DUpIanS por tu clave de sitio web*/
    grecaptcha.ready(function() {
        grecaptcha.execute('6Lel0KcZAAAAADiRaP2yag3eI4WPRkV0-ueFnHYO', {action: 'registro'}).then(function(token) {
            $('#form').prepend('<input type="hidden" name="token" value="' + token + '">');
            $('#form').prepend('<input type="hidden" name="action" value="registro">');
            $('#form').unbind('submit').submit();
        });;
    });
});
