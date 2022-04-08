$(function () {
    $(".mobile__item").css("display", "none");
    $("#mobile__bar").click(function () {
        $(".mobile__item").slideToggle("slow");
    });
});

$(function(){
    $("#toTop a").click(function(){
    $('html,body').animate({ scrollTop: $($(this).attr("href")).offset().top }, 'slow','swing');
    return false;
    })
});