/**
 *
 */
(function () {
    $(document).ready(function () {
        // document.getElementById('myvideo').play();
        $("#myvideo").prop('muted', false);
        $(function() {
            $('.scroll-down').click (function() {
                $('html, body').animate({scrollTop: $('div.site-content').offset().top-30 }, 'slow');
                return false;
            });
        });
    });
    $(function () { objectFitImages() })
})();
