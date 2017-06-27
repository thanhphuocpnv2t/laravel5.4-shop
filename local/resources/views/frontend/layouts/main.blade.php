<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<!-- static header -->
@include('frontend.layouts.static_header')
<!-- end static header -->
<body>
<div class="page">
    @include('frontend.layouts.header')
    @include('frontend.layouts.nav')
    @yield('content')
    @include('frontend.layouts.footer')
</div>
</body>
@include('frontend.elements.help_slider')
@include('frontend.elements.hideShow')
@include('frontend.elements.hideShow1')
<!-- static footer -->
@include('frontend.layouts.static_footer')
<!-- end static footer -->
</html>
