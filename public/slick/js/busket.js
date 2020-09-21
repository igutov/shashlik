var busket = {};
var all_goods;
var loadedJSON;
var goods_for_mailer;

$(document).ready(function(){
    LocalStorageToBusket();
    readJSON();

    $('#send').on('click', function(){
        $('.inform__total-th').text($('.inform__total').text());
    })
    $('.orders_delete').on('click', delete_good_card);
    $('.orders_button_plus').on('click', increase_good_card);
    $('.orders_button_minus').on('click', decrease_good_card);


    $("#phone").inputmask("+7(999)999-99-99");
    $('#step1').css('color', '#98f40d');

    finalSum = $("input[name='sum']");
    finalQuan = $("input[name='amount']");
    finalProduct = $("input[name='product']");
    finalOrder = $("input[name='order_id']");
    productString = '';
    var max = 500;
    var min = 0;
    var order_id = Math.floor(Math.random() * (max - min + 1)) + min;
    $("#order").click(function(){
        productString = "";
        $(".order-step").hide(300);
        $('#step1').css('color', 'white');
        $('#step2').css('color', '#98f40d');
        $(".form-step").show(300);
        allQuean = $('#quan-all').text();
        allSum = $('#sum-all').text();
        finalSum.val(allSum);
        finalQuan.val(allQuean);
        finalOrder.val(order_id);
        $('.order-line').each(function(){
            a = $(this).find('.orders_name').text();
            b = $(this).find('.orders_button_quan').text();
            productString += a+" - ";
            productString += b+";";
        });
        finalProduct.val(productString);
    });

    $("#back").click(function(){
        $(".order-step").show(300);
        $('#step2').css('color', 'white');
        $('#step1').css('color', '#98f40d');
        $(".form-step").hide(300);
    });

    var cross_state = false;
    $(".order-form_agree_box").click(function(){
        $('.order-form_agree_box_cross').toggle();
        cross_state = !cross_state;
    });
    form = $('#form');
    form.submit(function(e){
        e.preventDefault();
        if (cross_state) {
            $('#send').hide(300);
            $("#loader-img").show(300);
            $('.order-form_agree_text').css('color', 'white');
            $.ajax({
                data: form.serialize(),
                url: '/php_mailer/shashlikMailer.php',
                type: 'POST',
                success: function(data) {
                    $(".thanks_order_number").text(order_id);
                    $(".form-step").hide(300);
                    $('#step2').css('color', 'white');
                    $(".thanks-step").show(300);
                    $('#step3').css('color', '#98f40d');
                    busket = {};
                    sumToBusket();
                    saveBusketToLocalStorage();
                    renewBusket(all_goods);
                },
            });
        }
        else {
            $('.order-form_agree_text').css('color', '#ff0000');
        }
    });

});

function LocalStorageToBusket() {
    if(localStorage.getItem('busket')) {
        busket = JSON.parse(localStorage.getItem('busket'));
    }

}

function sumToBusket() {
    var qu = 0;
    for (var el in busket) {
        qu += busket[el];
    }
    $(".basket_quan").text(qu);
    if(qu>0){
        $(".submit-step").show(300);

    }
    else{
        $(".submit-step").hide(300);
    }
}

function readJSON() {
    $.ajax({
        type: 'POST',
        async: false,
        url: './queryToTxtDB.php',
        dataType: 'json',
        success: function (data) {
            all_goods = data;
            //console.log(data);
        }
    });
    renewBusket(all_goods);
    sumToBusket();
    addInfoBlock(all_goods);
    console.log(1);
}

function renewBusket(data) {
    // console.log(data);
    var resul_tgot_in_busket = '';
    for (var key in busket) {
        resul_tgot_in_busket += '<div class="orders_img_set order-line">';
        resul_tgot_in_busket += '<div class="orders_img_container">';
        resul_tgot_in_busket += '<img class="orders_img" src="./goodsIMGs/'+data[key]['Картинка']+'" alt="картинка">';
        resul_tgot_in_busket += '</div>';
        resul_tgot_in_busket += '<div class="orders_details">';
        resul_tgot_in_busket += '<div class="orders_name">'  +data[key]['Название']+ '</div>';
        resul_tgot_in_busket += '<div class="orders_descr">'  +data[key]['Состав']+ '</div>';
        resul_tgot_in_busket += '<div class="orders_weight">'  +data[key]['Вес']+ '</div>';
        resul_tgot_in_busket += '</div>';
        resul_tgot_in_busket += '<div class="orders_operations">';
        resul_tgot_in_busket += `<div class="orders_button orders_button_plus" id="${key}">+</div>`;
        resul_tgot_in_busket += '<div  class="orders_button orders_button_quan">'  +`${busket[key]}`+ '</div>';
        resul_tgot_in_busket += `<div class="orders_button orders_button_minus" id="${key}">-</div>`;
        resul_tgot_in_busket += '</div>';
        if (typeof(data[key]['Цена']) != "number"){
            resul_tgot_in_busket += '<div class="orders_sum">'  +data[key]['Цена']+ '</div>';
        }
        else  {
            resul_tgot_in_busket += '<div class="orders_sum">'  +data[key]['Цена']+ ' руб.</div>';
        }
        resul_tgot_in_busket += `<div class="orders_delete" id="${key}">X</div>`;
        resul_tgot_in_busket += '</div>';
    }
    $('.zakazes').html(resul_tgot_in_busket);

    var total_sum =0;
    for (var selected in busket){
        if (typeof(all_goods[selected]['Цена']) != "number"){
            total_sum = total_sum + 0*busket[selected];
        }
        else {
            total_sum = total_sum + Number(data[selected]['Цена'])*busket[selected];
        }
        //     all_goods[selected]['Цена'] = 0;
        // total_sum = total_sum + Number(data[selected]['Цена'])*busket[selected];
    }
    $(".basket_sum").text(total_sum);
    $(".inform__total").text('Итого: '+total_sum+' руб.');
    $('.orders_delete').on('click', delete_good_card);
    $('.orders_button_plus').on('click', increase_good_card);
    $('.orders_button_minus').on('click', decrease_good_card);
}

function delete_good_card() {
    var id = $(this).attr('id');
    delete busket[id];
    sumToBusket();
    saveBusketToLocalStorage();
    renewBusket(all_goods);
}

function increase_good_card() {
    var id = $(this).attr('id');
    busket[id]++;
    sumToBusket();
    saveBusketToLocalStorage();
    renewBusket(all_goods);
}

function decrease_good_card() {
    var id = $(this).attr('id');
    if(busket[id]>2){
        busket[id]--;
    }
    else{
        busket[id]=1;
    }
    sumToBusket();
    saveBusketToLocalStorage();
    renewBusket(all_goods);
}



function saveBusketToLocalStorage() {
    var total_sum =0;
    var qu = 0;
    for (var selected in busket) {
        if (typeof(all_goods[selected]['Цена']) != "number"){
            total_sum = total_sum + 0*busket[selected];
        }
        else {
            total_sum = total_sum + Number(all_goods[selected]['Цена'])*busket[selected];
        }
        // if (typeof(all_goods[selected]['Цена']) != "number")
        //     all_goods[selected]['Цена'] = 0;
        // total_sum = total_sum + Number(all_goods[selected]['Цена'])*busket[selected];
        qu += busket[selected];
    }
    localStorage.setItem('busket', JSON.stringify(busket));
    localStorage.setItem('quantity', JSON.stringify(qu));
    localStorage.setItem('total', JSON.stringify(total_sum));
}

//когда хотели передавать содержимое корзины из index в busket.php через session
function localStorage2Php() {
    var data = JSON.stringify(localStorage);
    $.ajax({
        type: 'POST',
        url: './localStorage2Php.php',
        data: {
            'localStorage': data
        },
        dataType: 'json',
        success: function(data){
            console.log(data.my_over_status);
        }
    })
}

function addInfoBlock(data) {
    var resul_info_busket = '';
    i = 1;
    for (var key in busket) {
        resul_info_busket += '<tr><td>'+i+'</td><td>'+data[key]['Название']+'</td><td>'+`${busket[key]}`+'</td><td>'+data[key]['Цена']+' руб.</td>';
        i++;
    }
    $('.inform-tbody').html(resul_info_busket);
}
