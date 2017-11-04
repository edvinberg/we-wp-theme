/**
 *
 */
( function() {

    // $('.img-parallax').each(function(){
    //     var img = $(this);
    //     var imgParent = $(this).parent();
    //     function parallaxImg () {
    //         var speed = img.data('speed');
    //         var imgY = imgParent.offset().top;
    //         var winY = $(this).scrollTop();
    //         var winH = $(this).height();
    //         var parentH = imgParent.innerHeight();
    //
    //
    //         // The next pixel to show on screen
    //         var winBottom = winY + winH;
    //
    //         // If block is shown on screen
    //         if (winBottom > imgY && winY < imgY + parentH) {
    //             // Number of pixels shown after block appear
    //             var imgBottom = ((winBottom - imgY) * speed);
    //             // Max number of pixels until block disappear
    //             var imgTop = winH + parentH;
    //             // Porcentage between start showing until disappearing
    //             var imgPercent = ((imgBottom / imgTop) * 100) + (50 - (speed * 50));
    //         }
    //         img.css({
    //             top: imgPercent + '%',
    //             transform: 'translate(-50%, -' + imgPercent + '%)'
    //         });
    //     }
    //     $(document).on({
    //         scroll: function () {
    //             parallaxImg();
    //         }, ready: function () {
    //             parallaxImg();
    //         }
    //     });
    // });
    $(document).ready(function() {

        var $sections = $(".section"),
            winW = $(window).width(),
            winH = $(window).height();

        function setAttrs() {
            $sections.each(function() {
                var $this = $(this),
                    hasSvg = $this.children(".section__svg").length,
                    $bgCont = hasSvg ? $this.find(".section__svg") : $this,
                    offsetTop = $bgCont.offset().top,
                    height = $bgCont.outerHeight();

                $(this).data({"offset": offsetTop, "height": height});
            });
        }

        setAttrs();

        // debounce function from David Walsh blog
        function debounce(func, wait, immediate) {
            var timeout;
            return function() {
                var context = this, args = arguments;
                var later = function() {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                };
                var callNow = immediate && !timeout;
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
                if (callNow) func.apply(context, args);
            };
        };

        var resizeFn = debounce(function() {
            setAttrs();
            winW = $(window).width();
            winH = $(window).height();
        }, 50);

        $(window).on("resize", resizeFn);

        $(window).on("scroll", function() {
            var st = $(window).scrollTop();
            $sections.each(function() {
                var $this = $(this),
                    $bg = $(this).find(".section__bg"),
                    $svgImg = $(this).find(".section__svg image"),
                    offsetTop = $this.data("offset"),
                    height = $this.data("height"),
                    ofTop = offsetTop - height,
                    percent = 0;

                percent = (st - offsetTop + winH) / height * 100;
                if (st < offsetTop - winH) percent = 0;
                if (st > offsetTop + height) percent = 200;
                $bg.css("transform", "translate3d(0,"+(percent/-6)+"%,0)");
                $svgImg.attr("y", (-35 - percent/7) + "%");
            });
        });

        $(window).trigger("scroll");

    });
} )();
