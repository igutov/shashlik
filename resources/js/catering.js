$(document).ready(function(){

    $(".menu_price_item").click(function(){
        var id = $(this).attr('id');
        var people = [15,50,100,"COMMON"];
        for(var i=0; i<people.length; i++){
            if("people"+people[i]+"border" != id) {
                $(".people" + people[i] +"border").hide(300);
                $("#people" + people[i] +"border").css('border-color', '#c7c7c7');

            }
        }
        $("." + id).show(300);
        $(this).css('border-color', 'red');
    });

});