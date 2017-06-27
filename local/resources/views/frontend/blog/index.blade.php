@extends('frontend.layouts.main')
@section('content')
<div class="main-container col2-right-layout">
    <div class="main container">
        <div class="row">
            <div class="col-main col-sm-9">

                <div class="blog-wrapper" id="main"><div class="page-title new_page_title">
                        <h2>Blog</h2>
                    </div>
                    <div class="site-content" id="primary">
                        <div role="main" id="content">
                            <article class="blog_entry clearfix wow bounceInUp animated">
                                <header class="blog_entry-header clearfix">
                                    <div class="blog_entry-header-inner">
                                        <h2 class="blog_entry-title"> <a rel="bookmark" href="blog_detail.html">Pellentesque habitant morbi</a> </h2>
                                    </div>
                                    <!--blog_entry-header-inner-->
                                </header>
                                <div class="entry-content">
                                    <div class="featured-thumb"><a href="blog_detail.html"><img alt="blog-img4" src="{{ asset('uploads/blog/blog-img4.jpg') }}"></a></div>
                                    <div class="entry-content">
                                        <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
                                        <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu turpis. Sed felis sapien, commodo in iaculis in, feugiat sed enim. Sed nunc ipsum, fermentum varius dignissim vitae, blandit et ante.Maecenas sagittis, lorem sed congue egestas, lectus purus congue nisl, ac molestie enim ligula nec eros. Sed leo tortor, tincidunt sit amet elementum vel, eleifend at orci. Maecenas ut turpis felis. Donec sit amet quam sem, et aliquet est.</p>
                                    </div>
                                    <p> <a class="btn" href="blog_detail.html">Read More</a> </p>
                                </div>
                                <footer class="entry-meta"> This entry was posted						in <a rel="category tag" title="View all posts in First Category" href="http://demo.magikthemes.com/index.php/eclipseblue/first-category">First Category</a> On
                                    <time datetime="2014-07-10T06:53:43+00:00" class="entry-date">Jul 10, 2014</time>
                                    . </footer>
                            </article>
                            <article class="blog_entry clearfix wow bounceInUp animated">
                                <header class="blog_entry-header clearfix">
                                    <div class="blog_entry-header-inner">
                                        <h2 class="blog_entry-title"> <a rel="bookmark" href="blog_detail.html">Aliquam eget sapien placerat</a> </h2>
                                    </div>
                                    <!--blog_entry-header-inner-->
                                </header>
                                <div class="entry-content">
                                    <div class="featured-thumb"><a href="blog_detail.html"><img alt="blog-img3" src="{{ asset('uploads/blog/blog-img3.jpg') }}"></a></div>
                                    <div class="entry-content">
                                        <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
                                        <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu turpis. Sed felis sapien, commodo in iaculis in, feugiat sed enim. Sed nunc ipsum, fermentum varius dignissim vitae, blandit et ante.Maecenas sagittis, lorem sed congue egestas, lectus purus congue nisl, ac molestie enim ligula nec eros. Sed leo tortor, tincidunt sit amet elementum vel, eleifend at orci. Maecenas ut turpis felis. Donec sit amet quam sem, et aliquet est.</p>
                                        <p>Quisque nisl lectus, accumsan et euismod eu, sollicitudin ac augue. In sit amet urna magna. Curabitur imperdiet urna nec purus egestas eget aliquet purus iaculis. Nunc porttitor blandit imperdiet. Nulla facilisi. Cras odio ipsum, vehicula nec vehicula sed, convallis scelerisque quam. Phasellus ut odio dui, ut fermentum neque.</p>
                                    </div>
                                    <p> <a class="btn" href="blog_detail.html">Read More</a> </p>
                                </div>
                                <footer class="entry-meta"> This entry was posted						in <a rel="category tag" title="View all posts in First Category" href="http://demo.magikthemes.com/index.php/eclipseblue/first-category">First Category</a> On
                                    <time datetime="2014-07-10T06:59:14+00:00" class="entry-date">Jul 10, 2014</time>
                                    . </footer>
                            </article>
                            <article class="blog_entry clearfix wow bounceInUp animated">
                                <header class="blog_entry-header clearfix">
                                    <div class="blog_entry-header-inner">
                                        <h2 class="blog_entry-title"> <a rel="bookmark" href="blog_detail.html">Dolor lorem ipsum</a> </h2>
                                    </div>
                                    <!--blog_entry-header-inner-->
                                </header>
                                <div class="entry-content">
                                    <div class="featured-thumb"><a href="blog_detail.html"><img alt="blog-img2" src="{{ asset('uploads/blog/blog-img2.jpg') }}"></a></div>
                                    <div class="entry-content">
                                        <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
                                        <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu turpis. Sed felis sapien, commodo in iaculis in, feugiat sed enim. Sed nunc ipsum, fermentum varius dignissim vitae, blandit et ante.Maecenas sagittis, lorem sed congue egestas, lectus purus congue nisl, ac molestie enim ligula nec eros. Sed leo tortor, tincidunt sit amet elementum vel, eleifend at orci. Maecenas ut turpis felis. Donec sit amet quam sem, et aliquet est.</p>
                                    </div>
                                    <p> <a class="btn" href="blog_detail.html">Read More</a> </p>
                                </div>
                                <footer class="entry-meta"> This entry was posted						in <a rel="category tag" title="View all posts in First Category" href="http://demo.magikthemes.com/index.php/eclipseblue/first-category">First Category</a> On
                                    <time datetime="2014-07-10T07:01:18+00:00" class="entry-date">Jul 10, 2014</time>
                                    . </footer>
                            </article>
                            <article class="blog_entry clearfix wow bounceInUp animated">
                                <header class="blog_entry-header clearfix">
                                    <div class="blog_entry-header-inner">
                                        <h2 class="blog_entry-title"> <a rel="bookmark" href="blog_detail.html">Pellentesque posuere</a> </h2>
                                    </div>
                                    <!--blog_entry-header-inner-->
                                </header>
                                <div class="entry-content">
                                    <div class="featured-thumb"><a href="blog_detail.html"><img alt="blog-img1" src="{{ asset('uploads/blog/blog-img1.jpg') }}"></a></div>
                                    <div class="entry-content">
                                        <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
                                        <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu turpis. Sed felis sapien, commodo in iaculis in, feugiat sed enim. Sed nunc ipsum, fermentum varius dignissim vitae, blandit et ante.Maecenas sagittis, lorem sed congue egestas, lectus purus congue nisl, ac molestie enim ligula nec eros. Sed leo tortor, tincidunt sit amet elementum vel, eleifend at orci. Maecenas ut turpis felis. Donec sit amet quam sem, et aliquet est.</p>
                                    </div>
                                    <p> <a class="btn" href="blog_detail.html">Read More</a> </p>
                                </div>
                                <footer class="entry-meta"> This entry was posted						in <a rel="category tag" title="View all posts in First Category" href="http://demo.magikthemes.com/index.php/eclipseblue/first-category">First Category</a> On
                                    <time datetime="2014-07-10T07:09:31+00:00" class="entry-date">Jul 10, 2014</time>
                                    . </footer>
                            </article>
                        </div>
                    </div>
                    <div class="pager">
                        <p class="amount"> <strong>4 Item(s)</strong> </p>
                        <div class="limiter">
                            <label>Show</label>
                            <select onchange="setLocation(this.value)">
                                <option selected="selected" value="http://demo.magikthemes.com/index.php/eclipseblue/blog/?limit=5"> 5 </option>
                                <option value="http://demo.magikthemes.com/index.php/eclipseblue/blog/?limit=10"> 10 </option>
                                <option value="http://demo.magikthemes.com/index.php/eclipseblue/blog/?limit=15"> 15 </option>
                                <option value="http://demo.magikthemes.com/index.php/eclipseblue/blog/?limit=20"> 20 </option>
                                <option value="http://demo.magikthemes.com/index.php/eclipseblue/blog/?limit=all"> All </option>
                            </select>
                            per page </div>
                    </div>
                </div>
            </div>
            <div class="col-right sidebar col-sm-3">
                <div role="complementary" class="widget_wrapper13" id="secondary">
                    @include('frontend.blog.blog-popular')
                    <div class="popular-posts widget widget_categories wow bounceInUp animated" id="categories-2">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            <li class="cat-item cat-item-19599"><a href="http://demo.magikthemes.com/index.php/eclipseblue/first-category">First Category</a></li>
                            <li class="cat-item cat-item-19599"><a href="http://demo.magikthemes.com/index.php/eclipseblue/second-category">Second Category</a></li>
                        </ul>
                    </div>
                    <!-- Banner Ad Block -->
                    <div class="ad-spots widget widget__sidebar wow bounceInUp animated">
                        <h3 class="widget-title">Ad Spots</h3>
                        <div class="widget-content"><a target="_self" href="#" title=""><img alt="offer banner" src="{{ asset('uploads/offer-banner/offer-banner1.png') }} "></a></div>
                    </div>
                    <!-- Banner Text Block -->
                    <div class="text-widget widget widget__sidebar">
                        <h3 class="widget-title">Text Widget</h3>
                        <div class="widget-content">Mauris at blandit erat. Nam vel tortor non quam scelerisque cursus. Praesent nunc vitae magna pellentesque auctor. Quisque id lectus.<br>
                            <br>
                            Massa, eget eleifend tellus. Proin nec ante leo ssim nunc sit amet velit malesuada pharetra. Nulla neque sapien, sollicitudin non ornare quis, malesuada.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop