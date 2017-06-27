<!-- JavaScript -->
<script type="text/javascript" src="{{ asset(config('app.frontend_themes').'/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset(config('app.frontend_themes').'/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset(config('app.frontend_themes').'/js/common.js') }}"></script>
<script type="text/javascript" src="{{ asset(config('app.frontend_themes').'/js/slider.js') }}"></script>
<script type="text/javascript" src="{{ asset(config('app.frontend_themes').'/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript">
    //<![CDATA[
    jQuery(function() {
        jQuery(".slideshow").cycle({
            fx: 'scrollHorz', easing: 'easeInOutCubic', timeout: 10000, speedOut: 800, speedIn: 800, sync: 1, pause: 1, fit: 0, 			pager: '#home-slides-pager',
            prev: '#home-slides-prev',
            next: '#home-slides-next'
        });
    });
    //]]>
</script>
<script>
    new UISearch( document.getElementById( 'form-search' ) );
</script>