var formContacto = (function() {
    var $form = null;
    var $mail = null;
    var $telefono = null;
    var $mensaje = null;
    var $divMessage = null;
    var callbackOK = null;
    var callbackBad = null;
    
    var init = function(){
        
        $form = $("#formContacto");
        $nombre = $form.find("#nombre");
        $mail = $form.find("#mail");
        $telefono = $form.find("#telefono");
        $mensaje = $form.find("#mensaje");
        $divMessage = $("#divMessage");

        callbackOK = function(){
            showMessageSuccess("El mensaje fue enviado correctamente", $divMessage);
        };
        callbackBad = function(){
            showMessageError("Hubo un error al enviar el mensaje intentelo de nuevo por favor", $divMessage);
        };
        
        envioForm();
    };
    var envioForm = function (){
        
        $form.off().on(
            "submit",
            function() {
                if (!validateText($mail))
                    return false;

                $.ajax({
                    url: "enviarFormulario.php",
                    data: {
                        nombre: $nombre.val(),
                        telefono: $telefono.val(),
                        mail: $mail.val(),
                        mensaje: $mensaje.val()
                    },
                    xhrFields: {
                        withCredentials: true
                    },
                    error: callbackBad,
                    type: "POST"
                    }).done(function(data) {
                        if (data=="OK"){
                            callbackOK();
                            clearForm();
                        }
                        else{
                            callbackBad();
                        }
                });
            
                return false;
            });
    };

    var clearForm = function(){
        $nombre.val("");
        $telefono.val("");
        $mail.val("");
        $mensaje.val("");
        clearValidation($form);
    };
 
    
    var setErrorCSS = function($element, hasError ){
        if ( hasError )
             $element.closest('.form-group').addClass('has-error');
        else{
            $element.closest('.form-group').removeClass('has-error');
        };
        return !hasError;
    };

    var clearValidation = function($container){
        $container.find(".has-error").removeClass('has-error');
    };
    var validateText = function ($element){
        return setErrorCSS( $element,  $element.val().length == 0 );
    };
    var validateDate = function ($element){
        return setErrorCSS( $element,  $element.data("DateTimePicker").getDate() == null );
    };
    var validateComboBox = function($element){
        return setErrorCSS( $element,  $element.val() == null || $element.val()=="" );
    };

    var showMessageSuccess = function(message, $divMessage){
        $divMessage.empty();
        var $newDiv = $('<div class="alert alert-info"></div>');
        $newDiv.html(message);
        $divMessage.prepend( $newDiv);
        $divMessage.show();
       
        setTimeout(function(){clearMessage($divMessage)}, 2000 );
    };
    var showMessageError = function(message, $divMessage){
        $divMessage.empty();
        var $newDiv = $('<div class="alert alert-danger"></div>');
        $newDiv.html(message);
        $divMessage.prepend( $newDiv);
        $divMessage.show();
        setTimeout(function(){clearMessage($divMessage)}, 2000 );
    };

    var clearMessage = function($divMessage){
        $divMessage.fadeOut(800);
    };
    
    return { init : init }
}());