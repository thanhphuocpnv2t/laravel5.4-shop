@extends('frontend.layouts.main')
@section('content')
    <div class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <div class="col-main col-sm-9 wow bounceInUp animated">

                    <div class="blog-wrapper" id="main"><div class="page-title new_page_title">
                            <h2>Blog</h2>
                        </div>
                        <div class="site-content" id="primary">
                            <div role="main" id="content">
                                <article class="blog_entry clearfix">
                                    <header class="blog_entry-header clearfix">
                                        <div class="blog_entry-header-inner">
                                            <h2 class="blog_entry-title"> Pellentesque habitant morbi </h2>
                                        </div>
                                        <!--blog_entry-header-inner-->
                                    </header>
                                    <!--blog_entry-header clearfix-->
                                    <div class="entry-content">
                                        <div class="featured-thumb"><a href="#"><img alt="blog-img4" src="{{ asset('uploads/blog/blog-img4.jpg') }}"></a></div>
                                        <div class="entry-content">
                                            <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
                                            <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu turpis. Sed felis sapien, commodo in iaculis in, feugiat sed enim. Sed nunc ipsum, fermentum varius dignissim vitae, blandit et ante.Maecenas sagittis, lorem sed congue egestas, lectus purus congue nisl, ac molestie enim ligula nec eros. Sed leo tortor, tincidunt sit amet elementum vel, eleifend at orci. Maecenas ut turpis felis. Donec sit amet quam sem, et aliquet est.</p>
                                            <p>Quisque nisl lectus, accumsan et euismod eu, sollicitudin ac augue. In sit amet urna magna. Curabitur imperdiet urna nec purus egestas eget aliquet purus iaculis. Nunc porttitor blandit imperdiet. Nulla facilisi. Cras odio ipsum, vehicula nec vehicula sed, convallis scelerisque quam. Phasellus ut odio dui, ut fermentum neque.</p>
                                            <blockquote>Lorem ipsum dolor sit amet, consecte adipiscing elit. Integer aliquam mi nec dolor placerat a condimentum diam mollis. Ut pulvinar neque eget massa dapibus dolor.</blockquote>
                                            <p>Curabitur at vestibulum sem. Aliquam vehicula neque ac nibh suscipit ultrices. Morbi interdum accumsan arcu nec scelerisque. Phasellus eget purus nulla. Suspendisse quam est, tempor quis consectetur non, interdum vitae diam. Pellentesque volutpat mollis ligula in laoreet. Aenean est dui, sagittis in consequat at, adipiscing at risus. Sed suscipit, est vitae aliquam molestie, sem dolor dignissim leo, eget imperdiet enim urna in justo. Mauris pulvinar tortor lorem. Aliquam sed nisl in ipsum tincidunt ultrices.</p>
                                            <p>Nullam commodo lobortis nibh, vitae accumsan velit dapibus sed. Nunc ac sem eu libero pretium faucib. Quisque et semper odio. Praesent tortor ligula, imperdiet sed aliquet ut, pharetra at nisi. Etiam sit amet molestie est. Donec id turpis vitae leo viverra adipiscing at sed nisi. Donec ut justo nunc. Vivamu bibendum erat ac nunc sollicitudin lacinia. Phasellus sed lacus magna.</p>
                                        </div>
                                    </div>
                                    <footer class="entry-meta"> This entry was posted						in <a rel="category tag" title="View all posts in First Category" href="#first-category">First Category</a> On
                                        <time datetime="2014-07-10T06:53:43+00:00" class="entry-date">Jul 10, 2014</time>
                                        . </footer>
                                </article>
                                <div class="comment-content wow bounceInUp animated">
                                    @include('frontend.blog.comments')

                                    <!--comments-wrapper-->
                                    @include('frontend.blog.comments-form')
                                    <!--comments-form-wrapper clearfix-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-right sidebar col-sm-3 wow bounceInUp animated">
                    <div role="complementary" class="widget_wrapper13" id="secondary">
                        @include('frontend.blog.blog-popular')
                        <div class="popular-posts widget widget_categories" id="categories-2">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                <li class="cat-item cat-item-19599"><a href="#first-category">First Category</a></li>
                                <li class="cat-item cat-item-19599"><a href="#second-category">Second Category</a></li>
                            </ul>
                        </div>
                        <!-- Banner Ad Block -->
                        <div class="ad-spots widget widget__sidebar">
                            <h3 class="widget-title">Ad Spots</h3>
                            <div class="widget-content"><a target="_self" href="#" title=""><img alt="offer banner" src="{{ asset('uploads/offer-banner/offer-banner1.png') }}"></a></div>
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