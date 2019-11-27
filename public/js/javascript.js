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






function dropDown() {
    var x = document.getElementById("our_products");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

function BurgerBtnClicked(){
    //if its a big screen
    width = (screen.width >756 ? "250px" :"100%");

    if(document.getElementById("mySidenav").style.width>width){
        closeNav(width);
    }else{
        openNav(width);
    }

}

function openNav(width) {
    document.getElementById("mySidenav").style.width = width;
    document.getElementById("app").style.marginRight = width;
}
  
function closeNav(width) {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("app").style.marginRight= "0";
    document.body.style.backgroundColor = "#F8FAFC";
}
function openNav2() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("app").style.marginRight = "0%";
}

function closeNav2() {
    document.getElementById("mySidenav").style.width = "0";
}

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}



/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}