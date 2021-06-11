console.log("This is a test");


// MENU BURGER
function openNav() {
    document.getElementById("myNav").style.height = "100vh";
  }
  
function closeNav() {
document.getElementById("myNav").style.height = "0vh";
};

// -----------------------------------------------------------

// ON TOP
var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
    document.getElementById("myBtn").style.display = "flex";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
};

