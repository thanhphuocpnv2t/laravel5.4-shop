
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- START @HEAD -->
@include('backend.layouts.static_header')
<!--/ END HEAD -->

<!--

    |=========================================================================================================================|
    |  TABLE OF CONTENTS (Use search to find needed section)                                                                  |
    |=========================================================================================================================|
    |  01. @HEAD                        |  Container for all the head elements                                                |
    |  02. @META SECTION                |  The meta tag provides metadata about the HTML document                             |
    |  03. @FAVICONS                    |  Short for favorite icon, shortcut icon, website icon, tab icon or bookmark icon    |
    |  04. @FONT STYLES                 |  Font from google fonts                                                             |
    |  05. @GLOBAL MANDATORY STYLES     |  The main 3rd party plugins css file                                                |
    |  06. @PAGE LEVEL STYLES           |  Specific 3rd party plugins css file                                                |
    |  07. @THEME STYLES                |  The main theme css file                                                            |
    |  08. @IE SUPPORT                  |  IE support of HTML5 elements and media queries                                     |
    |=========================================================================================================================|
    |  09. @BODY                        |  Contains all the contents of an HTML document                                      |
    |  10. @WRAPPER                     |  Wrapping page section                                                              |
    |  11. @HEADER                      |  Header page section contains about logo, top navigation, notification menu         |
    |  12. @SIDEBAR LEFT                |  Sidebar page section contains all sidebar menu left                                |
    |  13. @PAGE CONTENT                |  Contents page section contains breadcrumb, content page, footer page               |
    |  14. @SIDEBAR RIGHT               |  Sidebar page section contains all sidebar menu right                               |
    |  15. @BACK TOP                    |  Element back to top and action                                                     |
    |=========================================================================================================================|
    |  16. @CORE PLUGINS                |  The main 3rd party plugins script file                                             |
    |  17. @PAGE LEVEL PLUGINS          |  Specific 3rd party plugins script file                                             |
    |  18. @PAGE LEVEL SCRIPTS          |  The main theme script file                                                         |
    |=========================================================================================================================|

    START @BODY
        |=========================================================================================================================|
        |  TABLE OF CONTENTS (Apply to body class)                                                                                |
        |=========================================================================================================================|
        |  01. page-boxed                   |  Page into the box is not full width screen                                         |
        |  02. page-header-fixed            |  Header element become fixed position                                               |
        |  03. page-sidebar-fixed           |  Sidebar element become fixed position with scroll support                          |
        |  04. page-sidebar-minimize        |  Sidebar element become minimize style width sidebar                                |
        |  05. page-footer-fixed            |  Footer element become fixed position with scroll support on page content           |
        |  06. page-sound                   |  For playing sounds on user actions and page events                                 |
        |=========================================================================================================================|

        -->
<body class="page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session">

@include('backend.elements.upgrade-browser')

<!-- START @WRAPPER -->
<section id="wrapper">

    @include('backend.layouts.header')

    @include('backend.elements.sidebar-left')

    @yield('content')

    @include('backend.elements.sidebar-right')

</section><!-- /#wrapper -->
<!--/ END WRAPPER -->

@include('backend.elements.back-top')

@include('backend.layouts.static_footer')

</body>
<!--/ END BODY -->

</html>
