const search = document.getElementById("search")

$(function() {
    var availableTags = [
        'Lego Delorean', "Ferrari 488", "Lego McLaren", "Ninjago - Lobo Sombra",
        "Chapeu Seletor", "Set Icons", "Star Wars R2-D2", "Torre do Homem Areia",
        "Star Wars Chewbacca", 'Batmobile'
    ];
    
    $("#search").autocomplete({
      source: availableTags
    });
});