$(function () {
    $(".mobile__item").css("display", "none");
    $("#mobile__bar").click(function () {
        $(".mobile__item").slideToggle("slow");
    });
});