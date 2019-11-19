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

function manageNav(){
    if(document.getElementById("mySidenav").style.width == "250px"){
        closeNav();
    }
    else{
       openNav();
    }
}
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginRight = "250px";
    document.body.style.backgroundColor = "lightgrey";
}
  
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginRight= "0";
    document.body.style.backgroundColor = "#F8FAFC";
}



function dropDown() {
  var x = document.getElementById("our_products");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}