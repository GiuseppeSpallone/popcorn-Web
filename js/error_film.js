/**
 * Created by laura on 2/14/2017.
 */
$(document).ready(function() {



    $('.form-input').each(function(){
        var empty = false;
        $(this).on('input', function() {

            var input=$(this);
            var is_name=input.val();
            if(is_name){
                $("div#errorVuoti").removeClass("to_show").addClass("no_show");
                $("div#errorIns").removeClass("to_show").addClass("no_show");}
            else{$("div#errorVuoti").removeClass("no_show").addClass("to_show");
                empty = true;
            }
            if (empty) {
                $(':submit').attr('disabled', 'disabled');
            } else {
                $(':submit').removeAttr('disabled'); }
        });


    });






    $("form#film-form").on("submit", function(){
            var data  = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "check/film.php",
                data: data,
                dataType: "html",
                success: function(esito){
                    if (esito == "ok") {
                        window.location.href = "form_poster.php?titolo=" + $("#titolo").val();
                    }else{
                        $("div#errorIns").removeClass("no_show").addClass("to_show");
                    }},
                error: function(xhr, status, error) {

                    alert("male");
                }

            });return false;
        });



});


