var busket = {};
var all_goods = {};

$(document).ready(function () {
    LocalStorageToBusket();
    readJSON();
    //console.log(all_goods);

});

function readJSON() {
    $.ajax({
        type: 'POST',
        async: false,
        url: './queryToTxtDB.php',
        dataType: 'json',
        success: function (data) {
            all_goods = data;
        }
    });
    sumToBusket();
    renewAllSelected();
    $('.food_basket').on('click', addToBusket);
}


function addToBusket() {
    var id = $(this).attr('id');
    // console.log(id);
    if (busket[id] == undefined) {
        busket[id] = 1;
        $(this).text("Добавлено");
        $(this).css('background-color', '#9fff0c');
        $(this).css('border', 'none');
    }
    sumToBusket();
    // console.log(busket);
    saveBusketToLocalStorage();
}

function renewAllSelected() {
    for (var id in busket) {
        if (busket[id] != undefined) {
            var Addid = $('#id');
            $("#" + id).text("Добавлено");
            $("#" + id).css('background-color', '#9fff0c');
            $("#" + id).css('border', 'none');
        }
    }
}

function sumToBusket() {
    var qu = 0;
    for (var el in busket) {
        qu += busket[el];
    }
    $(".basket_quan").text(qu);

    var total_sum = 0;
    for (var selected in busket) {
        if (typeof (all_goods[selected]['Цена']) != "number")
            all_goods[selected]['Цена'] = 0;
        total_sum = total_sum + Number(all_goods[selected]['Цена']) * busket[selected];
    }
    $(".basket_sum").text(total_sum);
}

function saveBusketToLocalStorage() {
    var total_sum = 0;
    var qu = 0;
    for (var selected in busket) {
        if (typeof (all_goods[selected]['Цена']) != "number")
            all_goods[selected]['Цена'] = 0;
        total_sum = total_sum + Number(all_goods[selected]['Цена']) * busket[selected];
        qu += busket[selected];
    }
    localStorage.setItem('busket', JSON.stringify(busket));
    localStorage.setItem('quantity', JSON.stringify(qu));
    localStorage.setItem('total', JSON.stringify(total_sum));
}

function LocalStorageToBusket() {
    if (localStorage.getItem('busket')) {
        busket = JSON.parse(localStorage.getItem('busket'));
    }
}
