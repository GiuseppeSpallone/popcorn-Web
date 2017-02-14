//button(id) avvia la funzione che visualizza div(id)

$("#salva-prezzi").click(modificaPrezzi);

function modificaPrezzi(){
    $("#prezziModal").modal('show');
}


$("#recupero").click(recuperoPassword);

function recuperoPassword(){
    $("#recuperoModal").modal('show');
}

/* occorre un altro selettore perchè il button elimina è in un ciclo e vengono generati n button con lo stesso id
$("#elimina-film").click(eliminaFilm);

function eliminaFilm(){
    $("#eliminaModal").modal('show');
}*/

$("#salva-orari").click(modificaOrari);

function modificaOrari(){
    $("#orariModal").modal('show');
}

$("#salva-sale").click(modificaSale);

function modificaSale(){
    $("#saleModal").modal('show');
}



