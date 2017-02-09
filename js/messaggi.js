//button(id) avvia la funzione salva che visualizza div(id)

$("#salva-prezzi").click(modificaPrezzi);

function modificaPrezzi(){
    $("#prezziModal").modal('show');
}

