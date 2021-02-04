$(document).ready(function(){  

    navbar = $('.fixed');

    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {
        setFixed()
    }
    
    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function setFixed() {

        if (window.pageYOffset > navbar.position().top)  {
            navbar.addClass('fixed-top nav-border');
        } else {
            navbar.removeClass('fixed-top nav-border');
        }
    }

});