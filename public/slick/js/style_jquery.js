$(function () {
    function windowSize() {
        if ($(window).width() > '650') {
            $('.navigation_item').hover(
                function () {
                    $(this).prev().css("color", "red");
                    $(this).next().css("color", "red");
                },
                function () {
                    $(this).prev().css("color", "white");
                    $(this).next().css("color", "white");
                });
            $('.food_item').hover(
                function () {
                    $(this).parent().css("background-color", "red");
                    $(this).css("background-color", "black").css("border-color", "black");
                },
                function () {
                    $(this).parent().css("background-color", "transparent");
                    $(this).css("background-color", "#141414").css("border-color", "#656565");
                });
            $('.slider_more').click(function(){
                var id = $(this).attr('href');
                var what_item = id.split('#');
                $('#'+what_item[1]).css('background-color', 'red');
                $('#'+what_item[1]).find('.food_item').css('border-color', 'transparent');
                $('#'+what_item[1]).hover(
                    function () {},
                    function () {
                        $('#'+what_item[1]).css('background-color', 'transparent');
                   });
               });
            if (window.location.hash.search("item") != -1) {   
                var hash = window.location.hash.substr(1);   
                $('#'+hash).find('.food_item').css('border-color', 'transparent');
                $('#'+hash).css('background-color', 'red');
                $('#'+hash).hover(
                    function () {},
                    function () {
                        $('#'+hash).css('background-color', 'transparent');
                   });
            }
        } if ($(window).width() < '650') {
            $('.offcanvas__button').click(
                function () {
                    if (this.classList.contains('active')) {
                        $('.navigation').css("left", "-250px");
                        $('.block').css("display", "none");
                        $(this).css("position", "absolute");
                        this.classList.remove('active');
                    } else {
                        $('.navigation').css("left", "0");
                        $(this).css("position", "fixed");
                        $('.block').css("display", "block");
                        this.classList.add('active');
                    }
                });
            $('.block').click(
                function () {
                    $('.navigation').css("left", "-250px");
                    $('.block').css("display", "none");
                    $('.offcanvas__button').css("position", "absolute");
                    this.classList.remove('active');
                });
            $('.slider_more').click(function(){
                var id = $(this).attr('href');
                var what_item = id.split('#');
                $('#'+what_item[1]).find('.food_item').css('border-color', 'red');
                setTimeout(function() { $('#'+what_item[1]).find('.food_item').css('border-color', '#656565'); }, 2000);
            });   
            $('.navigation_item').click(function(){
                $('.navigation').css("left", "-250px").removeClass('active');
                $('.offcanvas__button').css("position", "absolute");
                $('.block').css("display", "none").removeClass('active');
            });
            if (window.location.hash.search("item") != -1) {   
                var hash = window.location.hash.substr(1);   
                $('#'+hash).find('.food_item').css('border-color', 'red');
                setTimeout(function() { $('#'+hash).find('.food_item').css('border-color', '#656565'); }, 2000);
            }    
        }
    };
    $(window).load(windowSize); // при загрузке
    $(".navigation_item").filter("[data-name]").on("click", function(event) {
        event.preventDefault();
        id = $(this).attr("data-name");
        $('body,html').animate({
        scrollTop: $('' + id).offset().top
        }, 300);     
    });

    callbackform = $('#call_form');
    callbackform.submit(function(e){
        e.preventDefault();
        $('.contact_form_button').hide();
        $("#loader-img").css('display','inline-block');
        $.ajax({
            data: callbackform.serialize(),
            url: '/php_mailer/shashlikMailer.php',
            type: 'POST',
            success: function(data) {
                callbackform.hide();
                $('#promise_call').fadeIn(300);
            },
        });
    });
});