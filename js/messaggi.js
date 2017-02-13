//button(id) avvia la funzione che visualizza div(id)

$("#salva-prezzi").click(modificaPrezzi);

function modificaPrezzi(){
    $("#prezziModal").modal('show');
}


$("#recupero").click(recuperoPassword);

function recuperoPassword(){
    $("#recuperoModal").modal('show');
}


$("#elimina-film").click(eliminaFilm);

function eliminaFilm(){
    $("#eliminaModal").modal('show');
}

