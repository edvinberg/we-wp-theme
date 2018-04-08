/**
 *
 */
(function () {
    $(document).ready(function () {

        const
            $colImgArr = $('.col p a > *:not(br)');
            $topLeftImg = $colImgArr[0],
            $topCenterCol = $('.flex-grid-thirds .col:nth-child(2)'),
            $topCenterImg = $colImgArr[1],
            $topRightImg = $colImgArr[2],
            $bottomLeftImg = $colImgArr[3],
            $bottomCenterImg = $colImgArr[4],
            $bottomrightImg = $colImgArr[5];

        $topCenterCol.css({
            'opacity': 1
        });

        window.onscroll = function () {
            imgsSlide();
            navSlide();

        };

        function imgsSlide() {
            var s = $(this).scrollTop(),
                d = $(document).height(),
                c = $(this).height();

            scrollPercent = (s / (d - c));

            function getSupportedPropertyName(properties) {
                for (let i = 0; i < properties.length; i++) {
                    if (typeof document.body.style[properties[i]] != "undefined") {
                        return properties[i];
                    }
                }
                return null;
            }


            var transform = ["transform", "msTransform", "webkitTransform", "mozTransform", "oTransform"];
            var transformProperty = getSupportedPropertyName(transform);

            var positionx = ((scrollPercent) * 0.05 * ($(document).width() * 2 - $topLeftImg.height));
            var positiony = ((scrollPercent) * 0.05 * ($(document).width() * 2 - $topLeftImg.width));

            var position1x = ((scrollPercent) * 0.05 * ($(document).width() * 2 - $topRightImg.width));
            var position1y = ((scrollPercent) * 0.05 * ($(document).width() * 2 - $topRightImg.width));






            if($bottomLeftImg){
                var position2x = ((scrollPercent) * 0.01 * ($(document).width() * 2 - $bottomLeftImg.height));
                var position2y = ((scrollPercent) * 0.03 * ($(document).width() * 2 - $bottomLeftImg.width));
                setTranslate(position2x, position2y = -position2y, $bottomLeftImg, transformProperty);

            }

            if($bottomrightImg){
                var position4x = ((scrollPercent) * 0.05 * ($(document).width() * 0.8 - $bottomrightImg.height));
                var position4y = ((scrollPercent ) * 0.01 * ($(document).width() * 0.8 + $bottomrightImg.width));
                setTranslate(position4x = -position4x, position4y = -position4y, $bottomrightImg, transformProperty);

            }

            if($bottomCenterImg){

                setTranslate(0, 0, $bottomCenterImg, transformProperty);

            }
            setTranslate(0, 0, $topCenterImg, transformProperty);
            setTranslate(positionx, positiony = -positiony, $topLeftImg, transformProperty);
            setTranslate(position1x = -position1x, position1y = -position1y, $topRightImg, transformProperty);



            function setTranslate(xPos, yPos, el, transformProperty) {
                if (Utils.isElementInView(el, false)) {
                    if (transformProperty) {
                        el.style.opacity = 1;
                        el.style[transformProperty] = `translate3d(${xPos}px, ${yPos}px, 0)`;
                    }
                }
            }

        }

        function navSlide() {

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
                document.getElementById("header-usp").style.top = "0";
                document.getElementsByClassName("custom-logo")[0].style.top = "80px";
                document.getElementsByClassName("custom-logo")[0].style.width = " 180px";
            }
        }


    });


    function Utils() {

    }

    Utils.prototype = {
        constructor: Utils,
        isElementInView: function (element, fullyInView) {
            let pageTop = $(window).scrollTop();
            let pageBottom = pageTop + $(window).height();
            let elementTop = $(element).offset().top;
            let elementBottom = elementTop + $(element).height();

            if (fullyInView === true) {
                return ((pageTop < elementTop) && (pageBottom > elementBottom));
            } else {
                return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
            }
        }
    };

    var Utils = new Utils();


})();
