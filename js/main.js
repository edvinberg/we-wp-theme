/**
 *
 */
(function () {
    $(document).ready(function () {
        var $fadish = $('.flex-grid-thirds .col:nth-child(2)');
        $fadish.css({
            'opacity':1
        });


        var $horizontal = $('.col:nth-child(1) a img');
        var $horizontal2 = $('.col:nth-child(3) a img');


        window.onscroll = function () {
            imgsSlide();
            scrollFunctionNav();

        };
         function imgsSlide () {
            var s = $(this).scrollTop(),
                d = $(document).height(),
                c = $(this).height();

            scrollPercent = (s / (d - c));

            var positionLeft = ((scrollPercent + 1.3) * 0.3 * ($(document).width() / 2 - $horizontal.width()));
            var positiontop1 = ((scrollPercent + 0.1) * 0.2 * ($(document).height() / 2 - $horizontal.height()));

            var positionRight = ((scrollPercent + 6) * 0.1 * ($(document).width() / 2 - $horizontal2.width()));
            var positiontop2 = ((scrollPercent +3) * 0.1 * ($(document).height() / 2 - $horizontal2.height()));


            $horizontal.css({
                'opacity': 1,
                'left': positionLeft,
                'bottom': positiontop1 - 200
            });

            $horizontal2.css({
                'opacity': 1,
                'right': positionRight,
                'bottom': positiontop2- 200
            });

        }

        function scrollFunctionNav() {

            if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
                $("#centered").fadeOut();

            } else {
                $("#centered").fadeIn();
            }


            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {

                document.getElementById("header-usp").style.top = "-100px";
                document.getElementsByClassName("custom-logo")[0].style.top = "20px";
                document.getElementsByClassName("custom-logo")[0].style.width = "100px";


            } else {
                // $centerLane.css({
                //     'top': '0px'
                // });
                document.getElementById("header-usp").style.top = "0";

                document.getElementsByClassName("custom-logo")[0].style.top = "80px";
                document.getElementsByClassName("custom-logo")[0].style.width = " 180px";
            }
        }


    });
})();
