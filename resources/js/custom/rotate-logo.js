$(document).ready(function(){  

    $('.part2').click(function() {
        $(this).addClass('rotate');
    })

    function rotate() {
        $('.part2').addClass('rotate');

        setTimeout(function(){ 
            $('.part2').removeClass('rotate');
        }, 5000);

    }

    window.onload(
        setInterval(function(){ rotate(); }, 6000)
    );




});