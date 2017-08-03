<!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
<!-- START @CORE PLUGINS -->
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/jquery-cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/typehead.js/dist/handlebars.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/typehead.js/dist/typeahead.bundle.min.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/jquery-nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/jquery.sparkline.min/index.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/ionsound/js/ion.sound.min.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/bootbox/bootbox.js') }}"></script>
<!--/ END CORE PLUGINS -->

<!-- START @PAGE LEVEL PLUGINS -->
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/flot/jquery.flot.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/flot/jquery.flot.spline.min.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/flot/jquery.flot.categories.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/dropzone/downloads/dropzone.min.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/jquery.gritter/js/jquery.gritter.min.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/global/plugins/bower_components/skycons-html5/skycons.js') }}"></script>
<!--/ END PAGE LEVEL PLUGINS -->

<!-- START @PAGE LEVEL SCRIPTS -->
<script src="{{ asset(config('app.backend_themes').'/assets/admin/js/apps.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/admin/js/pages/blankon.dashboard.js') }}"></script>
<script src="{{ asset(config('app.backend_themes').'/assets/admin/js/demo.js') }}"></script>
<!--/ END PAGE LEVEL SCRIPTS -->
<!--/ END JAVASCRIPT SECTION -->

<!-- START GOOGLE ANALYTICS -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-55892530-1', 'auto');
    ga('send', 'pageview');

</script>
<!--/ END GOOGLE ANALYTICS -->