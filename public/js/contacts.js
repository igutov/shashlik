$(document).ready(function () {

    $("#tel").inputmask("+7(999)999-99-99");

    // $('#call_form').submit(function(e){
    //     e.preventDefault();
    //         $.post(
    //             "php_mailer/call_mailer.php",
    //             {
    //                 buyer_name : $('call_name').val,
    //                 buyer_tel : $('call_tel').val,
    //                 buyer_mes : "Это заявка с просьбой перезвонить"
    //             },
    //             function(data){
    //                alert(data);
    //
    //             }
    //         );
    // });

    form = $('#call_form');
    form.on('submit', function () {
        $('#wait_ask').show(300);
        e.preventDefault();
        $.ajax({
            data: form.serialize(),
            url: '/php_mailer/call_mailer.php',
            type: 'POST',
            success: function (data) {
                // функции после отправки
                alert(data);
                $('#call_form').hide(300);
                $('#wait_ask').hide(300);
                $('#promise_call').show(300);
            },
        });
        return false;
    });


});
