const headerNav = document.querySelector('.header-nav');
const hamburger = document.querySelector('.hamburger');

hamburger.addEventListener('click', () => {


    if (headerNav.hasAttribute("open", '')) {
        headerNav.setAttribute("close", '')
        hamburger.removeAttribute("open", '');

        headerNav.addEventListener("animationend", () => {
            headerNav.removeAttribute("open", '');
            headerNav.removeAttribute("close", '');
            
        }, {once: true}
        )

    }
    else {
        headerNav.setAttribute("open", '');
        hamburger.setAttribute("open", '');
    }
    ;
    
});



// Scroll to top button
// Get the button:
let mybutton = document.getElementById("arrow");

// When the user scrolls down 200px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (window.matchMedia('(min-width: 768px)').matches) {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            mybutton.style.bottom = "3vw";
          } else {
            mybutton.style.bottom = "-80px";
          }
    }
    else {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            mybutton.style.bottom = "25vw";
        } else {
            mybutton.style.bottom = "-80px";
        }
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}