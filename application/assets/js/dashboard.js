$(function() {
    $("#titre_02").click(function() {
        $("#menu_prenom").slideToggle();
    });





    $("#btn_menu_deroulant").click(function() {
        let status = $("#menu").attr("data-status-open");
        if (status == "false") {
            $(".menu_gauche").css({
                "display": "table-cell"

            }).children().fadeIn(700);
            $("#menu_deroulant li").animate({
                "width": "250px"
            }, 500, function() {
                let status = $("#menu").attr("data-status-open", "true");
            });
            /** elle ne prend pas de param
             *  cette fonction ne retourne rien */
        } else {
            $(".menu_gauche a").fadeOut(200).parent().fadeOut();
            $("#menu_deroulant li").animate({
                "width": "40px"
            }, 500, function() {
                let status = $("#menu").attr("data-status-open", "false");
            });
        }
    });












});