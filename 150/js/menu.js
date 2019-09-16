$(document).ready(function () {
    $('.dropdown').hover(function () {
        $(this).children('ul').stop(true, true).slideDown(200);
        $(this).toggleClass('open');
        $('b', this).toggleClass("caret caret-up");
    }, function () {
        $(this).children('ul').stop(true, true).slideUp(200);
        $(this).toggleClass('open');
        $('b', this).toggleClass("caret caret-up");
    });
});
