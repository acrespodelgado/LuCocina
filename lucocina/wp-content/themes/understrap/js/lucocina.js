(function ($) {
    $(document).ready(function () {
        $('#openNav').on('click', function () {
            $('#myNav').css("width", "100%");
            $('body').css('overflow', 'hidden');
        });

        $('#closeNav').on('click', function () {
            $('#myNav').css("width", "0%");
            $('body').css('overflow', 'auto');
        });

        $('#go-bottom').click(function () {
            $("html, body").animate({ scrollTop: ($('#go-here').offset().top - 150) }, 700);
        });

        if ($('.transparent').length > 0) {
            $(window).scroll(function () {
                if ($(window).scrollTop() > 0) {
                    $('#wrapper-navbar').removeClass('transparent');
                } else {

                    $('#wrapper-navbar').addClass('transparent');

                }
            });
        }

        $('.go-to').click(function (e) {
            e.preventDefault();
            target = '#' + $(this).attr('target');
            time = $(this).attr('timeto') ? $(this).attr('timeto') : 700;
            $("html, body").animate({ scrollTop: ($(target).offset().top - 150) }, time);
        });

        /*
        // Look for .hamburger
        var hamburger = document.querySelector(".hamburger");
        // On click
        hamburger.addEventListener("click", function() {
            // Toggle class "is-active"
            hamburger.classList.toggle("is-active");
            // Do something else, like open/close menu
        });
        */
    });
})(jQuery);