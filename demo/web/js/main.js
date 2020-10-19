$(".burger").click(function(){
    $(".nav-links").toggleClass("nav-active");
    $(".line1").toggleClass("line1-toggle");
    $(".line2").toggleClass("line2-toggle");
    $(".line3").toggleClass("line3-toggle");
});




function addcart(id, ptype ,wieght) {
    $.ajax({
            url: '/site/cart',
            type: 'GET',
            data: {id: id , ptype:ptype , wieght:wieght},
            success:function(res){
                console.log(res);
            }
        }
    );

}
$('.btn_clear').click(function(){
    $.ajax({
            url: '/site/clear',
            type: 'GET',
            success:function(res){
                console.log(res);
            }

        }
    );
    setTimeout(function () {
        location.reload();
    }, 200);
});
$('.btn_buy').click(function () {
    $(this).text("добавлено");
});


$(window).resize(function () {
    if($(window).width() < 1024){
        $(".asd").removeClass( "col-4" ).addClass( "col-6" );
    }else {
        $(".asd").removeClass( "col-6" ).addClass( "col-4" );
    };
});