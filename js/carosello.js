/**
 * Created by laura on 2/19/2017.
 */
$(document).ready(function () {


    for (index=0; index < titoli.length; index++){

        if (index == 0) {

            $(".carousel-indicators").append('<li data-target="#myCarousel" data-slide-to="' + index + '" class="active"></li>');
            $(".carousel-inner").append('<div class="item active"><img src="image/' +titoli[index]+ '.jpg" width="460" height="345"><div class="carousel-caption"></div></div>');
        } else {

            $(".carousel-indicators").append('<li data-target="#myCarousel" data-slide-to="' + index + '"></li>')
            $(".carousel-inner").append('<div class ="item"><img src="image/' +titoli[index]+ '.jpg" width="460" height="345"><div class="carousel-caption"></div></div>');
        }
    }

});
