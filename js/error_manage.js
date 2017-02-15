$(document).ready(function() {

    $('#username').on('input', function() {
        var input=$(this);
        var is_name=input.val();
        if(is_name){
            $("div#errorLogin").removeClass("to_show").addClass("no_show");
            $("div#errorVuoti").removeClass("to_show").addClass("no_show");}
        else{
            $("div#errorVuoti").removeClass("no_show").addClass("to_show");
        }
    });

    $('#password').on('input', function() {
        var input=$(this);
        var is_name=input.val();
        if(is_name){
            $("div#errorLogin").removeClass("to_show").addClass("no_show");
            $("div#errorVuoti").removeClass("to_show").addClass("no_show");}
        else{$("div#errorVuoti").removeClass("no_show").addClass("to_show");}
    });





    $('#username-reg').on('input', function() {
        var input=$(this);
        var is_name=input.val();
        if(is_name) {
            $("div#errorDismatch").removeClass("to_show").addClass("no_show");
            $("div#errorVuoti").removeClass("to_show").addClass("no_show");
            $("div#errorSend").removeClass("to_show").addClass("no_show");
            $("div#errorEmail").removeClass("to_show").addClass("no_show");
            $("div#errorUtente").removeClass("to_show").addClass("no_show");

        }else{$("div#errorVuoti").removeClass("no_show").addClass("to_show");
        }
    });

    $('#email-reg').on('input', function() {
        var input=$(this);
        var is_name=input.val();
        if(is_name) {
            $("div#errorDismatch").removeClass("to_show").addClass("no_show");
            $("div#errorVuoti").removeClass("to_show").addClass("no_show");
            $("div#errorSend").removeClass("to_show").addClass("no_show");
            $("div#errorEmail").removeClass("to_show").addClass("no_show");
            $("div#errorUtente").removeClass("to_show").addClass("no_show");


        }else{$("div#errorVuoti").removeClass("no_show").addClass("to_show");}
    });

    $('#password-reg').on('input', function() {
        var input=$(this);
        var is_name=input.val();
        if(is_name) {
            $("div#errorDismatch").removeClass("to_show").addClass("no_show");
            $("div#errorVuoti").removeClass("to_show").addClass("no_show");
            $("div#errorSend").removeClass("to_show").addClass("no_show");
            $("div#errorEmail").removeClass("to_show").addClass("no_show");
            $("div#errorUtente").removeClass("to_show").addClass("no_show");

        }else{$("div#errorVuoti").removeClass("no_show").addClass("to_show");}
    });


    $('#password-reg, #confirm-password').on('input', function() {
        var inputpsw=$('#password-reg');
        var inputpsw_conf = $('#confirm-password');
        var is_psw=inputpsw.val();
        var is_inputpsw = inputpsw_conf.val();
        if((is_psw)&&(is_inputpsw)&&(is_psw == is_inputpsw)){
            $("div#errorDismatch").removeClass("to_show").addClass("no_show");
        }else{$("div#errorDismatch").removeClass("no_show").addClass("to_show");}
    });




    $('#username-recupero').on('input', function() {
        var input=$(this);
        var is_name=input.val();
        if(is_name) {
            $("div#errorRec").removeClass("to_show").addClass("no_show");
            $("div#errorUtente").removeClass("to_show").addClass("no_show");
            $("div#errorVuoti").removeClass("to_show").addClass("no_show");

        }else{$("div#errorVuoti").removeClass("no_show").addClass("to_show");}
    });


    $('#email-recupero').on('input', function() {
        var input=$(this);
        var is_name=input.val();
        if(is_name) {
            $("div#errorRec").removeClass("to_show").addClass("no_show");
            $("div#errorUtente").removeClass("to_show").addClass("no_show");
            $("div#errorVuoti").removeClass("to_show").addClass("no_show");

        }else{$("div#errorVuoti").removeClass("no_show").addClass("to_show");}
    });

//TO DO non funge vedi form film!

    /*$('form > input').keyup(function() {

        var empty = false;
        $('form > input').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });

        if (empty) {
            $('submit').attr('disabled', 'disabled');
        } else {
            $('submit').removeAttr('disabled'); }
    });
*/

    $("form#login-form").on("submit", function(){
        var data  = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "check/accesso.php",
            data: data,
            dataType: "html",
            success: function(esito){
                if (esito == "ok") {
                    window.location.href = "index.php";
                }else {
                    $("div#errorLogin").removeClass("no_show").addClass("to_show");
                }},
            error: function(xhr, status, error) {

                alert("male");
            }

        });return false;
    });



    $("form#register-form").on("submit", function(){
        var data  = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "check/registrazione.php",
            data: data,
            dataType: "html",
            success: function(esito){
                if (esito == "ok") {
                    window.location.href = "index.php";
                }else if (esito == "Username esistente"){
                    $("div#errorUtente").removeClass("no_show").addClass("to_show");
                } else if (esito == "Email esistente") {
                    $("div#errorEmail").removeClass("no_show").addClass("to_show");
                }else if (esito == "No result") {
                    $("div#errorReg").removeClass("no_show").addClass("to_show");
                }else if (esito == "Email non inviata") {
                    $("div#errorSend").removeClass("no_show").addClass("to_show");
                }
            },
            error: function(xhr, status, error) {
                alert("Male registrazione!");
            }

        });return false;
    });








   $("form#recupero-form").on("submit", function(){
        var data  = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "check/recupero_psw.php",
            data: data,
            dataType: "html",
            success: function(esito){
                if (esito == "ok") {
                    window.location.href = "index.php";
                }else if (esito == "Utente non esistente"){
                    $("div#errorUtente").removeClass("no_show").addClass("to_show");

                }else if (esito == "Errore recupero"){
                    $("div#errorRec").removeClass("no_show").addClass("to_show");

                }else if (esito == "Errore nessuna email inviata."){
                    $("div#errorRec").removeClass("no_show").addClass("to_show");

                }},
            error: function(xhr, status, error) {

                alert("male");
            }

        });return false;
    });


});


