$(document).ready(function () {
    // Handler for .ready() called.
    $("#ESI-POS").click(function(){
        $('html, body').animate({
            scrollTop: $('.basic-features').offset().top
        }, 'slow');
    });
});

$(document).ready(function () {
    // Handler for .ready() called.
    $("#ESI-POS-Pro").click(function(){
        $('html, body').animate({
            scrollTop: $('.pro-features').offset().top
        }, 'slow');
    });
});
$(document).ready(function () {
    // Handler for .ready() called.
    $("#ESI-POS-Ultimate").click(function(){
        $('html, body').animate({
            scrollTop: $('.ultimate-features').offset().top
        }, 'slow');
    });
});

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})
AOS.init({
    duration: 1200,
})