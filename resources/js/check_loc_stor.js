var busket = {};
var all_goods;

$(document).ready(function(){

     LocalStorageToBusket();
});


function LocalStorageToBusket() {
    if(localStorage.getItem('quantity')) {
        var quan = JSON.parse(localStorage.getItem('quantity'));
        $(".basket_quan").text(quan);
    }
    if(localStorage.getItem('total')) {
        var tot = JSON.parse(localStorage.getItem('total'));
        $(".basket_sum").text(tot);
    }
}

function sumToBusket() {
    var qu = 0;
    for (var el in busket) {
        qu += busket[el];
    }
    $(".basket_quan").text(qu);
}



function renewBusket(data) {
    all_goods = data;

    
    var total_sum =0;
    for (var selected in busket){
        if (typeof(all_goods[selected]['Цена']) != "number")
            all_goods[selected]['Цена'] = 0;
        total_sum = total_sum + Number(all_goods[selected].price)*busket[selected];
    }
    $(".basket_sum").text(total_sum);

}