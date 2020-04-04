@extends('layouts.app')
@section('title', '- Домашняя')
@section('description', '- Домашняя')


@section('content')

    <section class="slider_wrap slider_fullscreen slider_alias_hpslider2">
        <div id="slider-2" class="flexslider">
            <ul class="slides">
                <li>
                    <img src="images/slider/jfqRRbDZ-PE.jpg" alt=""/>
                    <div class="slide_description_wrapper content_wrap">
                        <div class="slide_description">
                            <h1 class="slide_title">Инжиниринговые услуги</h1>
                            <h2 class="slide_subtitle">Предприятие имеет опыт в разработке концепции наземной
                                инфраструктуры и техническо-экономического обоснования инвестиций</h2>
                        </div>
                    </div>
                </li>
                <li>
                    <img  src="images/slider/VHiKwhrA9Y8.jpg" alt=""/>
                    <div class="slide_description_wrapper content_wrap">
                        <div class="slide_description">
                            <h1 class="slide_title">Инжиниринговые услуги</h1>
                            <h2 class="slide_subtitle">Предприятие имеет опыт в разработке концепции наземной
                                инфраструктуры и техническо-экономического обоснования инвестиций</h2>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    {{--    <div class="gradient">--}}
    {{--        <div class="content_wrap">--}}
    {{--            <div class="user_header_wrap">--}}
    {{--                <div class="sc_section bg_tint_none">--}}
    {{--                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_5">--}}
    {{--                        <div class="column-1_5 sc_column_item sc_column_item_1 odd first" style="text-align:center;">--}}
    {{--                            <figure class="sc_image  sc_image_shape_square">--}}
    {{--                                <img src="images/menu1.png" alt=""/>--}}
    {{--                            </figure>--}}
    {{--                            <div class="wpb_text_column wpb_content_element ">--}}
    {{--                                <div class="wpb_wrapper">--}}
    {{--                                    <p><a href="#">Departments</a></p>--}}

    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="column-1_5 sc_column_item sc_column_item_2 even" style="text-align:center;">--}}
    {{--                            <figure class="sc_image  sc_image_shape_square">--}}
    {{--                                <img src="images/menu2.png" alt=""/>--}}
    {{--                            </figure>--}}
    {{--                            <div class="wpb_text_column wpb_content_element ">--}}
    {{--                                <div class="wpb_wrapper">--}}
    {{--                                    <p><a href="#">Careers</a></p>--}}

    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="column-1_5 sc_column_item sc_column_item_3 odd" style="text-align:center;">--}}
    {{--                            <figure class="sc_image  sc_image_shape_square">--}}
    {{--                                <img src="images/menu3.png" alt=""/>--}}
    {{--                            </figure>--}}
    {{--                            <div class="wpb_text_column wpb_content_element ">--}}
    {{--                                <div class="wpb_wrapper">--}}
    {{--                                    <p><a href="#">Our Stores</a></p>--}}

    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="column-1_5 sc_column_item sc_column_item_4 even" style="text-align:center;">--}}
    {{--                            <figure class="sc_image  sc_image_shape_square">--}}
    {{--                                <img src="images/menu4.png" alt=""/>--}}
    {{--                            </figure>--}}
    {{--                            <div class="wpb_text_column wpb_content_element ">--}}
    {{--                                <div class="wpb_wrapper">--}}
    {{--                                    <p><a href="#">Infographics</a></p>--}}

    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="column-1_5 sc_column_item sc_column_item_5 odd" style="text-align:center;">--}}
    {{--                            <figure class="sc_image  sc_image_shape_square">--}}
    {{--                                <img src="images/menu5.png" alt=""/>--}}
    {{--                            </figure>--}}
    {{--                            <div class="wpb_text_column wpb_content_element ">--}}
    {{--                                <div class="wpb_wrapper">--}}
    {{--                                    <p><a href="#">Services</a></p>--}}

    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

{{--    <div class="user_header_wrap show_post_slider">--}}
{{--        <div class="sc_content content_wrap" style="margin-top:4em !important;">--}}
{{--            <div class="sc_slider_pagination_area sc_slider_pagination_full" style="height:360px;">--}}
{{--                <div id="sc_slider_1367468570"--}}
{{--                     class="sc_slider sc_slider_swiper swiper-slider-container sc_slider_height_fixed sc_slider_controls sc_slider_nopagination"--}}
{{--                     data-old-height="360" data-interval="5000" style="height:360px;">--}}
{{--                    <div class="slides swiper-wrapper">--}}
{{--                        <div class="swiper-slide" data-style="height:360px;" style="height:360px;">--}}
{{--                            <div title="New Ways Of Industry Grow Observed">--}}
{{--                                <img class="wp-post-image" height="360" alt="Depositphotos_11661557_original.jpg"--}}
{{--                                     src="images/Depositphotos_11661557_original-540x360.jpg">--}}
{{--                                <div class="sc_slider_info content-slide">--}}
{{--                                    <div class="sc_slider_category">--}}
{{--                                        <a href="#">Architecture</a>--}}
{{--                                    </div>--}}
{{--                                    <div--}}
{{--                                        class="sc_slider_reviews post_rating reviews_summary blog_reviews after_category">--}}
{{--                                        <div class="criteria_summary criteria_row">--}}
{{--                                            <div class="reviews_stars reviews_style_stars" data-mark="3.7">--}}
{{--                                                <div class="reviews_stars_wrap">--}}
{{--                                                    <div class="reviews_stars_bg">--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="reviews_stars_hover" style="width:74%">--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="reviews_value">3.7</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <h3 class="sc_slider_subtitle">--}}
{{--                                        <a href="#">New Ways Of Industry Grow Observed</a>--}}
{{--                                    </h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide" data-style="height:360px;" style="height:360px;">--}}
{{--                            <div title="Fast Growing Factories In the Entire Industry">--}}
{{--                                <img class="wp-post-image"--}}
{{--                                     height="360"--}}
{{--                                     alt="Depositphotos_21730727_original.jpg"--}}
{{--                                     src="images/Depositphotos_21730727_original-537x360.jpg">--}}

{{--                                <div class="sc_slider_info content-slide">--}}
{{--                                    <div class="sc_slider_category">--}}
{{--                                        <a href="#">Chemicals</a>--}}
{{--                                    </div>--}}
{{--                                    <div--}}
{{--                                        class="sc_slider_reviews post_rating reviews_summary blog_reviews after_category">--}}
{{--                                        <div class="criteria_summary criteria_row">--}}
{{--                                            <div class="reviews_stars reviews_style_stars" data-mark="3.5">--}}
{{--                                                <div class="reviews_stars_wrap">--}}
{{--                                                    <div class="reviews_stars_bg">--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="reviews_stars_hover" style="width:70%">--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="reviews_value">3.5</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <h3 class="sc_slider_subtitle">--}}
{{--                                        <a href="#">Fast Growing Factories In the Entire Industry</a>--}}
{{--                                    </h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide" data-style="height:360px;" style="height:360px;">--}}
{{--                            <div title="Your Cargo is Always Safe With Our Company">--}}
{{--                                <img class="wp-post-image" height="360"--}}
{{--                                     alt="Depositphotos_3977455_original.jpg"--}}
{{--                                     src="images/Depositphotos_3977455_original-514x360.jpg">--}}

{{--                                <div class="sc_slider_info content-slide">--}}
{{--                                    <div class="sc_slider_category">--}}
{{--                                        <a href="#">Electronics</a>--}}
{{--                                    </div>--}}
{{--                                    <div--}}
{{--                                        class="sc_slider_reviews post_rating reviews_summary blog_reviews after_category">--}}
{{--                                        <div class="criteria_summary criteria_row">--}}
{{--                                            <div class="reviews_stars reviews_style_stars" data-mark="5">--}}
{{--                                                <div class="reviews_stars_wrap">--}}
{{--                                                    <div class="reviews_stars_bg">--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="reviews_stars_hover" style="width:100%">--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="reviews_value">5</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <h3 class="sc_slider_subtitle">--}}
{{--                                        <a href="#">Your Cargo is Always Safe With Our Company</a>--}}
{{--                                    </h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide" data-style="height:360px;" style="height:360px;">--}}
{{--                            <div title="The World Is in Need of Full Utilization">--}}
{{--                                <img class="wp-post-image" height="360" alt="Depositphotos_29804973_original.jpg"--}}
{{--                                     src="images/Depositphotos_29804973_original-539x360.jpg">--}}

{{--                                <div class="sc_slider_info content-slide">--}}
{{--                                    <div class="sc_slider_category">--}}
{{--                                        <a href="#">Architecture</a>--}}
{{--                                    </div>--}}
{{--                                    <div--}}
{{--                                        class="sc_slider_reviews post_rating reviews_summary blog_reviews after_category">--}}
{{--                                        <div class="criteria_summary criteria_row">--}}
{{--                                            <div class="reviews_stars reviews_style_stars" data-mark="2.5">--}}
{{--                                                <div class="reviews_stars_wrap">--}}
{{--                                                    <div class="reviews_stars_bg">--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="reviews_stars_hover" style="width:50%">--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                        <span class="reviews_star"></span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="reviews_value">2.5</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <h3 class="sc_slider_subtitle">--}}
{{--                                        <a href="#">The World Is in Need of Full Utilization</a>--}}
{{--                                    </h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide" data-style="height:360px;" style="height:360px;">--}}
{{--                            <div title="Governmental Control Over Industries">--}}
{{--                                <img class="wp-post-image" height="360" alt="Depositphotos_11661557_original.jpg"--}}
{{--                                     src="images/Depositphotos_11661557_original-540x360.jpg">--}}

{{--                                <div class="sc_slider_info content-slide">--}}
{{--                                    <div class="sc_slider_category">--}}
{{--                                        <a href="#">Architecture</a>--}}
{{--                                    </div>--}}
{{--                                    <h3 class="sc_slider_subtitle">--}}
{{--                                        <a href="#">Governmental Control Over Industries</a>--}}
{{--                                    </h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide" data-style="height:360px;" style="height:360px;">--}}
{{--                            <div title="We Need a Manufacturing Renaissance">--}}
{{--                                <img class="wp-post-image" height="360" alt="istock_000014378598medium.jpg"--}}
{{--                                     src="images/istock_000014378598medium-540x360.jpg">--}}

{{--                                <div class="sc_slider_info content-slide">--}}
{{--                                    <div class="sc_slider_category">--}}
{{--                                        <a href="#">Chemicals</a>--}}
{{--                                    </div>--}}
{{--                                    <h3 class="sc_slider_subtitle">--}}
{{--                                        <a href="#">We Need a Manufacturing Renaissance</a>--}}
{{--                                    </h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="sc_slider_controls_wrap">--}}
{{--                        <a class="sc_slider_prev" href="#"></a>--}}
{{--                        <a class="sc_slider_next" href="#"></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="sc_slider_pagination widget_area" style="height:360px;">--}}
{{--                    <div id="sc_slider_1367468570_scroll"--}}
{{--                         class="sc_scroll sc_scroll_vertical swiper-slider-container scroll-container"--}}
{{--                         style="height:360px;">--}}
{{--                        <div class="sc_scroll_wrapper swiper-wrapper">--}}
{{--                            <div class="sc_scroll_slide swiper-slide">--}}
{{--                                <article class="post_item no_thumb first">--}}
{{--                                    <div class="post_content">--}}
{{--                                        <h6 class="post_title">--}}
{{--                                            <a href="#">New Ways Of Industry Grow Observed</a>--}}
{{--                                        </h6>--}}

{{--                                        <div class="post_info">--}}
{{--                                        <span class="post_info_item post_info_posted">--}}
{{--                                            <a href="#" class="post_info_date">May 15, 2015</a>--}}
{{--                                        </span>--}}
{{--                                            <span class="post_info_item post_info_posted_by">by--}}
{{--                                            <a href="#" class="post_info_author">root</a>--}}
{{--                                        </span>--}}
{{--                                            <span class="post_info_item post_info_counters">--}}
{{--                                            <a href="#" class="post_counters_item post_counters_views icon-eye">--}}
{{--                                                <span class="post_counters_number">502</span>--}}
{{--                                            </a>--}}
{{--                                        </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </article>--}}
{{--                                <article class="post_item no_thumb">--}}
{{--                                    <div class="post_content">--}}
{{--                                        <h6 class="post_title">--}}
{{--                                            <a href="#">Fast Growing Factories In the Entire Industry</a>--}}
{{--                                        </h6>--}}

{{--                                        <div class="post_info">--}}
{{--                                        <span class="post_info_item post_info_posted">--}}
{{--                                            <a href="#" class="post_info_date">May 11, 2015</a>--}}
{{--                                        </span>--}}
{{--                                            <span class="post_info_item post_info_posted_by">by--}}
{{--                                            <a href="#" class="post_info_author">root</a>--}}
{{--                                        </span>--}}
{{--                                            <span class="post_info_item post_info_counters">--}}
{{--                                            <a href="#" class="post_counters_item post_counters_views icon-eye">--}}
{{--                                                <span class="post_counters_number">196</span>--}}
{{--                                            </a>--}}
{{--                                        </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </article>--}}
{{--                                <article class="post_item no_thumb">--}}
{{--                                    <div class="post_content">--}}
{{--                                        <h6 class="post_title">--}}
{{--                                            <a href="#">Your Cargo is Always Safe With Our Company</a>--}}
{{--                                        </h6>--}}

{{--                                        <div class="post_info">--}}
{{--                                        <span class="post_info_item post_info_posted">--}}
{{--                                            <a href="#" class="post_info_date">May 11, 2015</a>--}}
{{--                                        </span>--}}
{{--                                            <span class="post_info_item post_info_posted_by">by--}}
{{--                                            <a href="#" class="post_info_author">root</a>--}}
{{--                                        </span>--}}
{{--                                            <span class="post_info_item post_info_counters">--}}
{{--                                            <a href="#" class="post_counters_item post_counters_views icon-eye">--}}
{{--                                                <span class="post_counters_number">249</span>--}}
{{--                                            </a>--}}
{{--                                        </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </article>--}}
{{--                                <article class="post_item no_thumb">--}}
{{--                                    <div class="post_content">--}}
{{--                                        <h6 class="post_title">--}}
{{--                                            <a href="#">The World Is in Need of Full Utilization</a>--}}
{{--                                        </h6>--}}

{{--                                        <div class="post_info">--}}
{{--                                        <span class="post_info_item post_info_posted">--}}
{{--                                            <a href="#" class="post_info_date">Apr 16, 2015</a>--}}
{{--                                        </span>--}}
{{--                                            <span class="post_info_item post_info_posted_by">by--}}
{{--                                            <a href="#" class="post_info_author">root</a>--}}
{{--                                        </span>--}}
{{--                                            <span class="post_info_item post_info_counters">--}}
{{--                                            <a href="#" class="post_counters_item post_counters_views icon-eye">--}}
{{--                                                <span class="post_counters_number">270</span>--}}
{{--                                            </a>--}}
{{--                                        </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </article>--}}
{{--                                <article class="post_item no_thumb">--}}
{{--                                    <div class="post_content">--}}
{{--                                        <h6 class="post_title">--}}
{{--                                            <a href="#">Governmental Control Over Industries</a>--}}
{{--                                        </h6>--}}

{{--                                        <div class="post_info">--}}
{{--                                        <span class="post_info_item post_info_posted">--}}
{{--                                            <a href="#" class="post_info_date">Mar 27, 2015</a>--}}
{{--                                        </span>--}}
{{--                                            <span class="post_info_item post_info_posted_by">by--}}
{{--                                            <a href="#" class="post_info_author">root</a>--}}
{{--                                        </span>--}}
{{--                                            <span class="post_info_item post_info_counters">--}}
{{--                                            <a href="#" class="post_counters_item post_counters_views icon-eye">--}}
{{--                                                <span class="post_counters_number">592</span>--}}
{{--                                            </a>--}}
{{--                                        </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </article>--}}
{{--                                <article class="post_item no_thumb">--}}
{{--                                    <div class="post_content">--}}
{{--                                        <h6 class="post_title">--}}
{{--                                            <a href="#">We Need a Manufacturing Renaissance</a>--}}
{{--                                        </h6>--}}

{{--                                        <div class="post_info">--}}
{{--                                        <span class="post_info_item post_info_posted">--}}
{{--                                            <a href="#" class="post_info_date">Jan 28, 2015</a>--}}
{{--                                        </span>--}}
{{--                                            <span class="post_info_item post_info_posted_by">by--}}
{{--                                            <a href="#" class="post_info_author">root</a>--}}
{{--                                        </span>--}}
{{--                                            <span class="post_info_item post_info_counters">--}}
{{--                                            <a href="#" class="post_counters_item post_counters_views icon-eye">--}}
{{--                                                <span class="post_counters_number">420</span>--}}
{{--                                            </a>--}}
{{--                                        </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </article>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div id="sc_slider_1367468570_scroll_bar" class="sc_scroll_bar sc_scroll_bar_vertical"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="page_content_wrap">

        <div class="content_wrap">
            <div class="content">
{{--                <article--}}
{{--                    class="itemscope post_item post_item_single post_featured_default post_format_standard post-1109 page type-page status-publish hentry"--}}
{{--                    itemscope itemtype="http://schema.org/Article">--}}
{{--                    <section class="post_content" itemprop="articleBody">--}}
{{--                        <div class="vc_row wpb_row vc_row-fluid">--}}
{{--                            <div class="vc_col-sm-12 wpb_column vc_column_container ">--}}
{{--                                <div class="wpb_wrapper">--}}
{{--                                    <div class="sc_section bg_tint_none" data-animation="animated fadeInUp normal"--}}
{{--                                         style="margin-top:1.7em !important; ">--}}
{{--                                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">--}}
{{--                                            <div class="column-1_2 sc_column_item sc_column_item_1 odd first">--}}
{{--                                                <div class="wpb_widgetised_column wpb_content_element">--}}
{{--                                                    <div class="wpb_wrapper">--}}
{{--                                                        <aside class="widget_number_1 widget widget_recent_posts">--}}
{{--                                                            <h3 class="widget_title">Recent Posts</h3>--}}
{{--                                                            <article class="post_item with_thumb first">--}}
{{--                                                                <div class="post_thumb">--}}
{{--                                                                    <img class="wp-post-image" width="75" height="75"--}}
{{--                                                                         alt="Aerospace &amp; Defense"--}}
{{--                                                                         src="images/Depositphotos_15806899_original-75x75.jpg">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="post_content">--}}
{{--                                                                    <h6 class="post_title">--}}
{{--                                                                        <a href="#">Aerospace & Defense</a>--}}
{{--                                                                    </h6>--}}

{{--                                                                    <div class="post_info">--}}
{{--                                                <span class="post_info_item post_info_posted_by">by--}}
{{--                                                    <a href="#" class="post_info_author">root</a>--}}
{{--                                                </span>--}}
{{--                                                                        <span class="post_info_item post_info_counters">--}}
{{--                                                    <a href="#"--}}
{{--                                                       class="post_counters_item post_counters_comments icon-comment-1">--}}
{{--                                                        <span class="post_counters_number">0</span>--}}
{{--                                                    </a>--}}
{{--                                                </span>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </article>--}}
{{--                                                            <article class="post_item with_thumb">--}}
{{--                                                                <div class="post_thumb">--}}
{{--                                                                    <img class="wp-post-image" width="75" height="75"--}}
{{--                                                                         alt="New Ways Of Industry Grow Observed"--}}
{{--                                                                         src="images/Depositphotos_11661557_original-75x75.jpg">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="post_content">--}}
{{--                                                                    <h6 class="post_title">--}}
{{--                                                                        <a href="#">New Ways Of Industry Grow--}}
{{--                                                                            Observed</a>--}}
{{--                                                                    </h6>--}}

{{--                                                                    <div class="post_info">--}}
{{--                                                <span class="post_info_item post_info_posted_by">by--}}
{{--                                                    <a href="#" class="post_info_author">root</a>--}}
{{--                                                </span>--}}
{{--                                                                        <span class="post_info_item post_info_counters">--}}
{{--                                                    <a href="#"--}}
{{--                                                       class="post_counters_item post_counters_comments icon-comment-1">--}}
{{--                                                        <span class="post_counters_number">3</span>--}}
{{--                                                    </a>--}}
{{--                                                </span>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </article>--}}
{{--                                                            <article class="post_item with_thumb">--}}
{{--                                                                <div class="post_content">--}}
{{--                                                                    <h6 class="post_title">--}}
{{--                                                                        <a href="#">Chat Post</a>--}}
{{--                                                                    </h6>--}}

{{--                                                                    <div class="post_info">--}}
{{--                                                <span class="post_info_item post_info_posted_by">by--}}
{{--                                                    <a href="#" class="post_info_author">root</a>--}}
{{--                                                </span>--}}
{{--                                                                        <span class="post_info_item post_info_counters">--}}
{{--                                                    <a href="#"--}}
{{--                                                       class="post_counters_item post_counters_comments icon-comment-1">--}}
{{--                                                        <span class="post_counters_number">0</span>--}}
{{--                                                    </a>--}}
{{--                                                </span>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </article>--}}
{{--                                                        </aside>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <h3 class="sc_title sc_title_regular no_bottom_border"--}}
{{--                                                    style="margin-top:2em;">Timeline</h3>--}}

{{--                                                <div id="sc_blogger_1894541376"--}}
{{--                                                     class="sc_blogger  layout_date template_date  sc_blogger_vertical no_description"--}}
{{--                                                     style="margin-top:3em;height:400px;">--}}
{{--                                                    <div id="sc_blogger_1894541376_scroll"--}}
{{--                                                         class="sc_scroll sc_scroll_vertical sc_slider_noresize swiper-slider-container scroll-container"--}}
{{--                                                         style="height:400px;">--}}
{{--                                                        <div class="sc_scroll_wrapper swiper-wrapper">--}}
{{--                                                            <div class="sc_scroll_slide swiper-slide">--}}
{{--                                                                <div class="post_item sc_blogger_item">--}}
{{--                                                                    <div class="sc_blogger_date">--}}
{{--                                                                        <span class="day_month">28.01</span>--}}
{{--                                                                        <span class="year">2015</span>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div class="post_content">--}}
{{--                                                                        <h6 class="post_title sc_title sc_blogger_title">--}}
{{--                                                                            <a href="#"> We Need a Manufacturing--}}
{{--                                                                                Renaissance </a>--}}
{{--                                                                        </h6>--}}


{{--                                                                        <div class="post_info">--}}
{{--                                                    <span class="post_info_item post_info_posted_by">by--}}
{{--                                                        <a href="#" class="post_info_author">root</a>--}}
{{--                                                    </span>--}}
{{--                                                                            <span--}}
{{--                                                                                class="post_info_item post_info_counters">Comments--}}
{{--                                                        <span class="post_info_counters_number">0</span>--}}
{{--                                                    </span>--}}
{{--                                                                        </div>--}}

{{--                                                                    </div>--}}
{{--                                                                    <!-- /.post_content -->--}}

{{--                                                                </div>--}}
{{--                                                                <!-- /.post_item -->--}}


{{--                                                                <div class="post_item sc_blogger_item">--}}
{{--                                                                    <div class="sc_blogger_date">--}}
{{--                                                                        <span class="day_month">27.03</span>--}}
{{--                                                                        <span class="year">2015</span>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div class="post_content">--}}
{{--                                                                        <h6 class="post_title sc_title sc_blogger_title">--}}
{{--                                                                            <a href="#"> Governmental Control Over--}}
{{--                                                                                Industries </a>--}}
{{--                                                                        </h6>--}}


{{--                                                                        <div class="post_info">--}}
{{--                                                    <span class="post_info_item post_info_posted_by">by--}}
{{--                                                        <a href="#" class="post_info_author">root</a>--}}
{{--                                                    </span>--}}
{{--                                                                            <span--}}
{{--                                                                                class="post_info_item post_info_counters">Comments--}}
{{--                                                        <span class="post_info_counters_number">3</span>--}}
{{--                                                    </span>--}}
{{--                                                                        </div>--}}

{{--                                                                    </div>--}}
{{--                                                                    <!-- /.post_content -->--}}

{{--                                                                </div>--}}
{{--                                                                <!-- /.post_item -->--}}


{{--                                                                <div class="post_item sc_blogger_item">--}}
{{--                                                                    <div class="sc_blogger_date">--}}
{{--                                                                        <span class="day_month">16.04</span>--}}
{{--                                                                        <span class="year">2015</span>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div class="post_content">--}}
{{--                                                                        <h6 class="post_title sc_title sc_blogger_title">--}}
{{--                                                                            <a href="#"> The World Is in Need of Full--}}
{{--                                                                                Utilization </a>--}}
{{--                                                                        </h6>--}}


{{--                                                                        <div class="post_info">--}}
{{--                                                    <span class="post_info_item post_info_posted_by">by--}}
{{--                                                        <a href="#" class="post_info_author">root</a>--}}
{{--                                                    </span>--}}
{{--                                                                            <span--}}
{{--                                                                                class="post_info_item post_info_counters">Comments--}}
{{--                                                        <span class="post_info_counters_number">0</span>--}}
{{--                                                    </span>--}}
{{--                                                                        </div>--}}

{{--                                                                    </div>--}}
{{--                                                                    <!-- /.post_content -->--}}

{{--                                                                </div>--}}
{{--                                                                <!-- /.post_item -->--}}


{{--                                                                <div class="post_item sc_blogger_item">--}}
{{--                                                                    <div class="sc_blogger_date">--}}
{{--                                                                        <span class="day_month">11.05</span>--}}
{{--                                                                        <span class="year">2015</span>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div class="post_content">--}}
{{--                                                                        <h6 class="post_title sc_title sc_blogger_title">--}}
{{--                                                                            <a href="#"> Your Cargo is Always Safe With--}}
{{--                                                                                Our Company </a>--}}
{{--                                                                        </h6>--}}


{{--                                                                        <div class="post_info">--}}
{{--                                                    <span class="post_info_item post_info_posted_by">by--}}
{{--                                                        <a href="#" class="post_info_author">root</a>--}}
{{--                                                    </span>--}}
{{--                                                                            <span--}}
{{--                                                                                class="post_info_item post_info_counters">Comments--}}
{{--                                                        <span class="post_info_counters_number">0</span>--}}
{{--                                                    </span>--}}
{{--                                                                        </div>--}}

{{--                                                                    </div>--}}
{{--                                                                    <!-- /.post_content -->--}}

{{--                                                                </div>--}}
{{--                                                                <!-- /.post_item -->--}}


{{--                                                                <div class="post_item sc_blogger_item">--}}
{{--                                                                    <div class="sc_blogger_date">--}}
{{--                                                                        <span class="day_month">11.05</span>--}}
{{--                                                                        <span class="year">2015</span>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div class="post_content">--}}
{{--                                                                        <h6 class="post_title sc_title sc_blogger_title">--}}
{{--                                                                            <a href="#"> Fast Growing Factories In the--}}
{{--                                                                                Entire Industry </a>--}}
{{--                                                                        </h6>--}}

{{--                                                                        <div class="post_info">--}}
{{--                                                    <span class="post_info_item post_info_posted_by">by--}}
{{--                                                        <a href="#" class="post_info_author">root</a>--}}
{{--                                                    </span>--}}
{{--                                                                            <span--}}
{{--                                                                                class="post_info_item post_info_counters">Comments--}}
{{--                                                        <span class="post_info_counters_number">0</span>--}}
{{--                                                    </span>--}}
{{--                                                                        </div>--}}

{{--                                                                    </div>--}}
{{--                                                                    <!-- /.post_content -->--}}

{{--                                                                </div>--}}
{{--                                                                <!-- /.post_item -->--}}


{{--                                                                <div--}}
{{--                                                                    class="post_item sc_blogger_item sc_blogger_item_last">--}}
{{--                                                                    <div class="sc_blogger_date">--}}
{{--                                                                        <span class="day_month">15.05</span>--}}
{{--                                                                        <span class="year">2015</span>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div class="post_content">--}}
{{--                                                                        <h6 class="post_title sc_title sc_blogger_title">--}}
{{--                                                                            <a href="#"> New Ways Of Industry Grow--}}
{{--                                                                                Observed </a>--}}
{{--                                                                        </h6>--}}


{{--                                                                        <div class="post_info">--}}
{{--                                                    <span class="post_info_item post_info_posted_by">by--}}
{{--                                                        <a href="#" class="post_info_author">root</a>--}}
{{--                                                    </span>--}}
{{--                                                                            <span--}}
{{--                                                                                class="post_info_item post_info_counters">Comments--}}
{{--                                                        <span class="post_info_counters_number">3</span>--}}
{{--                                                    </span>--}}
{{--                                                                        </div>--}}

{{--                                                                    </div>--}}
{{--                                                                    <!-- /.post_content -->--}}

{{--                                                                </div>--}}
{{--                                                                <!-- /.post_item -->--}}

{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div id="sc_blogger_1894541376_scroll_bar"--}}
{{--                                                             class="sc_scroll_bar sc_scroll_bar_vertical sc_blogger_1894541376_scroll_bar"></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="column-1_2 sc_column_item sc_column_item_2 even">--}}
{{--                                                <div id="sc_blogger_2130071380"--}}
{{--                                                     class="sc_blogger  layout_excerpt template_excerpt sc_blogger_horizontal">--}}
{{--                                                    <div--}}
{{--                                                        class="post_item post_item_excerpt post_featured_default post_format_standard odd post-188 post type-post status-publish format-standard has-post-thumbnail hentry category-chemicals category-mining-industry category-sertification tag-news tag-people">--}}
{{--                                                        <div class="post_featured">--}}
{{--                                                            <div class="post_thumb"--}}
{{--                                                                 data-image="images/istock_000014378598medium.jpg"--}}
{{--                                                                 data-title="We Need a Manufacturing Renaissance">--}}
{{--                                                                <a class="hover_icon hover_icon_link" href="#">--}}
{{--                                                                    <img class="wp-post-image" width="750" height="422"--}}
{{--                                                                         alt="We Need a Manufacturing Renaissance"--}}
{{--                                                                         src="images/istock_000014378598medium-750x422.jpg">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="post_content clearfix">--}}
{{--                                                            <h3 class="post_title">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <span class="post_icon icon-book-2"></span>We Need a--}}
{{--                                                                    Manufacturing Renaissance--}}
{{--                                                                </a>--}}
{{--                                                            </h3>--}}

{{--                                                            <div class="post_descr">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing--}}
{{--                                                                    elit, sed do eiusmod--}}
{{--                                                                    tempor incididunt.t labore et...</p>--}}

{{--                                                                <div class="post_info">--}}
{{--                                            <span class="post_info_item post_info_posted">Posted--}}
{{--                                                <a href="#" class="post_info_date">Jan 28, 2015</a>--}}
{{--                                            </span>--}}
{{--                                                                </div>--}}
{{--                                                                <a href="#"--}}
{{--                                                                   class="sc_button sc_button_square sc_button_style_button-2 sc_button_bg_link sc_button_size_medium add_link">--}}
{{--                                                                    <span class="button-up">More</span>--}}
{{--                                                                    <span>More</span>--}}
{{--                                                                </a>--}}
{{--                                                                <a href="#"--}}
{{--                                                                   class="sc_button sc_button_square sc_button_style_button-3 sc_button_bg_link sc_button_size_medium comments_button">--}}
{{--                                                                    <span class="button-up">0</span>--}}
{{--                                                                    <span>0</span>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}

{{--                                                        </div>--}}
{{--                                                        <!-- /.post_content -->--}}

{{--                                                    </div>--}}
{{--                                                    <!-- /.post_item -->--}}

{{--                                                    <div--}}
{{--                                                        class="post_item post_item_excerpt post_featured_default post_format_standard even last post-181 post type-post status-publish format-standard has-post-thumbnail hentry category-architecture category-electronics category-sertification category-uncategorized tag-architecture tag-business tag-design tag-engineering tag-identity tag-industry tag-motion tag-news tag-people tag-print">--}}
{{--                                                        <div class="post_featured">--}}
{{--                                                            <div class="post_thumb"--}}
{{--                                                                 data-image="images/Depositphotos_11661557_original.jpg"--}}
{{--                                                                 data-title="Governmental Control Over Industries">--}}
{{--                                                                <a class="hover_icon hover_icon_link" href="#">--}}
{{--                                                                    <img class="wp-post-image" width="750" height="422"--}}
{{--                                                                         alt="Governmental Control Over Industries"--}}
{{--                                                                         src="images/Depositphotos_11661557_original-750x422.jpg">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="post_content clearfix">--}}
{{--                                                            <h3 class="post_title">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <span class="post_icon icon-book-2"></span>Governmental--}}
{{--                                                                    Control Over Industries--}}
{{--                                                                </a>--}}
{{--                                                            </h3>--}}

{{--                                                            <div class="post_descr">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing--}}
{{--                                                                    elit, sed do eiusmod--}}
{{--                                                                    tempor incididunt.t labore et...</p>--}}

{{--                                                                <div class="post_info">--}}
{{--                                            <span class="post_info_item post_info_posted">Posted--}}
{{--                                                <a href="#" class="post_info_date">Mar 27, 2015</a>--}}
{{--                                            </span>--}}
{{--                                                                </div>--}}
{{--                                                                <a href="#"--}}
{{--                                                                   class="sc_button sc_button_square sc_button_style_button-2 sc_button_bg_link sc_button_size_medium add_link">--}}
{{--                                                                    <span class="button-up">More</span>--}}
{{--                                                                    <span>More</span>--}}
{{--                                                                </a>--}}
{{--                                                                <a href="#"--}}
{{--                                                                   class="sc_button sc_button_square sc_button_style_button-3 sc_button_bg_link sc_button_size_medium comments_button">--}}
{{--                                                                    <span class="button-up">3</span>--}}
{{--                                                                    <span>3</span>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}

{{--                                                        </div>--}}
{{--                                                        <!-- /.post_content -->--}}

{{--                                                    </div>--}}
{{--                                                    <!-- /.post_item -->--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="vc_row wpb_row vc_row-fluid">--}}
{{--                            <div class="vc_col-sm-12 wpb_column vc_column_container ">--}}
{{--                                <div class="wpb_wrapper">--}}
{{--                                    <div class="sc_section bg_tint_none" data-animation="animated fadeInUp normal"--}}
{{--                                         style="border-bottom: 1px solid #e7e7e7; border-top: 1px solid #e7e7e7; ">--}}
{{--                                        <h2 class="sc_title sc_title_regular sc_align_center no_bottom_border"--}}
{{--                                            style="margin-top:1em;text-align:center;">Recent News</h2>--}}

{{--                                        <div id="sc_blogger_1167910916"--}}
{{--                                             class="sc_blogger  layout_classic_3 template_masonry sc_blogger_horizontal">--}}
{{--                                            <div class="isotope_wrap" data-columns="3">--}}
{{--                                                <div--}}
{{--                                                    class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3">--}}
{{--                                                    <div--}}
{{--                                                        class="post_item post_item_classic post_item_classic_3 post_format_standard odd">--}}

{{--                                                        <div class="post_featured">--}}
{{--                                                            <div class="post_thumb"--}}
{{--                                                                 data-image="images/istock_000014378598medium.jpg"--}}
{{--                                                                 data-title="We Need a Manufacturing Renaissance">--}}
{{--                                                                <a class="hover_icon hover_icon_link" href="#">--}}
{{--                                                                    <img class="wp-post-image"--}}
{{--                                                                         width="400" height="225"--}}
{{--                                                                         alt="We Need a Manufacturing Renaissance"--}}
{{--                                                                         src="images/istock_000014378598medium-400x225.jpg">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="post_content isotope_item_content">--}}

{{--                                                            <h4 class="post_title">--}}
{{--                                                                <a href="#">We Need a Manufacturing Renaissance</a>--}}
{{--                                                            </h4>--}}

{{--                                                            <div class="post_descr">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing--}}
{{--                                                                    elit, sed do eiusmod--}}
{{--                                                                    tempor incididunt.t...</p>--}}

{{--                                                                <div class="post_info">--}}
{{--                                            <span class="post_info_item post_info_posted">Posted--}}
{{--                                                <a href="#" class="post_info_date">Jan 28, 2015</a>--}}
{{--                                            </span>--}}
{{--                                                                </div>--}}
{{--                                                                <a href="#"--}}
{{--                                                                   class="sc_button sc_button_square sc_button_style_button-2 sc_button_bg_link sc_button_size_medium add_link"--}}
{{--                                                                   style="margin-right:15px;">--}}
{{--                                                                    <span class="button-up">More</span>--}}
{{--                                                                    <span>More</span>--}}
{{--                                                                </a>--}}
{{--                                                                <a href="#"--}}
{{--                                                                   class="sc_button sc_button_square sc_button_style_button-3 sc_button_bg_link sc_button_size_medium comments_button post">--}}
{{--                                                                    <span class="button-up">0</span>--}}
{{--                                                                    <span>0</span>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}

{{--                                                        </div>--}}
{{--                                                        <!-- /.post_content -->--}}
{{--                                                    </div>--}}
{{--                                                    <!-- /.post_item -->--}}
{{--                                                </div>--}}
{{--                                                <!-- /.isotope_item -->--}}
{{--                                                <div--}}
{{--                                                    class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3">--}}
{{--                                                    <div--}}
{{--                                                        class="post_item post_item_classic post_item_classic_3 post_format_standard even">--}}

{{--                                                        <div class="post_featured">--}}
{{--                                                            <div class="post_thumb"--}}
{{--                                                                 data-image="images/Depositphotos_11661557_original.jpg"--}}
{{--                                                                 data-title="Governmental Control Over Industries">--}}
{{--                                                                <a class="hover_icon hover_icon_link" href="#">--}}
{{--                                                                    <img class="wp-post-image" width="400" height="225"--}}
{{--                                                                         alt="Governmental Control Over Industries"--}}
{{--                                                                         src="images/Depositphotos_11661557_original-400x225.jpg">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="post_content isotope_item_content">--}}

{{--                                                            <h4 class="post_title">--}}
{{--                                                                <a href="#">Governmental Control Over Industries</a>--}}
{{--                                                            </h4>--}}

{{--                                                            <div class="post_descr">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing--}}
{{--                                                                    elit, sed do eiusmod--}}
{{--                                                                    tempor incididunt.t...</p>--}}

{{--                                                                <div class="post_info">--}}
{{--                                            <span class="post_info_item post_info_posted">Posted--}}
{{--                                                <a href="#" class="post_info_date">Mar 27, 2015</a>--}}
{{--                                            </span>--}}
{{--                                                                </div>--}}
{{--                                                                <a href="#"--}}
{{--                                                                   class="sc_button sc_button_square sc_button_style_button-2 sc_button_bg_link sc_button_size_medium add_link"--}}
{{--                                                                   style="margin-right:15px;">--}}
{{--                                                                    <span class="button-up">More</span>--}}
{{--                                                                    <span>More</span>--}}
{{--                                                                </a>--}}
{{--                                                                <a href="#"--}}
{{--                                                                   class="sc_button sc_button_square sc_button_style_button-3 sc_button_bg_link sc_button_size_medium comments_button post">--}}
{{--                                                                    <span class="button-up">3</span>--}}
{{--                                                                    <span>3</span>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}

{{--                                                        </div>--}}
{{--                                                        <!-- /.post_content -->--}}
{{--                                                    </div>--}}
{{--                                                    <!-- /.post_item -->--}}
{{--                                                </div>--}}
{{--                                                <!-- /.isotope_item -->--}}
{{--                                                <div--}}
{{--                                                    class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3">--}}
{{--                                                    <div--}}
{{--                                                        class="post_item post_item_classic post_item_classic_3 post_format_standard odd last">--}}

{{--                                                        <div class="post_featured">--}}
{{--                                                            <div class="post_thumb"--}}
{{--                                                                 data-image="images/Depositphotos_29804973_original.jpg"--}}
{{--                                                                 data-title="The World Is in Need of Full Utilization">--}}
{{--                                                                <a class="hover_icon hover_icon_link" href="#">--}}
{{--                                                                    <img class="wp-post-image"--}}
{{--                                                                         width="400" height="225"--}}
{{--                                                                         alt="The World Is in Need of Full Utilization"--}}
{{--                                                                         src="images/Depositphotos_29804973_original-400x225.jpg">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="post_content isotope_item_content">--}}

{{--                                                            <h4 class="post_title">--}}
{{--                                                                <a href="#">The World Is in Need of Full Utilization</a>--}}
{{--                                                            </h4>--}}

{{--                                                            <div class="post_descr">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing--}}
{{--                                                                    elit, sed do eiusmod--}}
{{--                                                                    tempor incididunt.t...</p>--}}

{{--                                                                <div class="post_info">--}}
{{--                                            <span class="post_info_item post_info_posted">Posted--}}
{{--                                                <a href="#" class="post_info_date">Apr 16, 2015</a>--}}
{{--                                            </span>--}}
{{--                                                                </div>--}}
{{--                                                                <a href="#"--}}
{{--                                                                   class="sc_button sc_button_square sc_button_style_button-2 sc_button_bg_link sc_button_size_medium add_link"--}}
{{--                                                                   style="margin-right:15px;">--}}
{{--                                                                    <span class="button-up">More</span>--}}
{{--                                                                    <span>More</span>--}}
{{--                                                                </a>--}}
{{--                                                                <a href="#"--}}
{{--                                                                   class="sc_button sc_button_square sc_button_style_button-3 sc_button_bg_link sc_button_size_medium comments_button post">--}}
{{--                                                                    <span class="button-up">0</span>--}}
{{--                                                                    <span>0</span>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}

{{--                                                        </div>--}}
{{--                                                        <!-- /.post_content -->--}}
{{--                                                    </div>--}}
{{--                                                    <!-- /.post_item -->--}}
{{--                                                </div>--}}
{{--                                                <!-- /.isotope_item -->--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="vc_row wpb_row vc_row-fluid">--}}
{{--                            <div class="vc_col-sm-12 wpb_column vc_column_container ">--}}
{{--                                <div class="wpb_wrapper">--}}
{{--                                    <div class="sc_section bg_tint_none" data-animation="animated fadeInUp normal"--}}
{{--                                         style="margin-top:2em !important;margin-bottom:1.5em !important; ">--}}
{{--                                        <h2 class="sc_title sc_title_regular sc_align_center no_bottom_border"--}}
{{--                                            style="text-align:center;">Top News</h2>--}}

{{--                                        <div id="sc_blogger_884375422"--}}
{{--                                             class="sc_blogger  layout_classic_3 template_masonry  sc_blogger_horizontal">--}}
{{--                                            <div class="isotope_wrap" data-columns="3">--}}
{{--                                                <div--}}
{{--                                                    class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3">--}}
{{--                                                    <div--}}
{{--                                                        class="post_item post_item_classic post_item_classic_3 post_format_standard odd">--}}

{{--                                                        <div class="post_featured">--}}
{{--                                                            <div class="post_thumb"--}}
{{--                                                                 data-image="images/istock_000014378598medium.jpg"--}}
{{--                                                                 data-title="We Need a Manufacturing Renaissance">--}}
{{--                                                                <a class="hover_icon hover_icon_link" href="#">--}}
{{--                                                                    <img class="wp-post-image" width="400" height="225"--}}
{{--                                                                         alt="We Need a Manufacturing Renaissance"--}}
{{--                                                                         src="images/istock_000014378598medium-400x225.jpg">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="post_content isotope_item_content">--}}

{{--                                                            <h4 class="post_title">--}}
{{--                                                                <a href="#">We Need a Manufacturing Renaissance</a>--}}
{{--                                                            </h4>--}}

{{--                                                            <div class="post_descr">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing--}}
{{--                                                                    elit, sed do eiusmod--}}
{{--                                                                    tempor incididunt.t...</p>--}}

{{--                                                                <div class="post_info">--}}
{{--                                            <span class="post_info_item post_info_posted">Posted--}}
{{--                                                <a href="#" class="post_info_date">Jan 28, 2015</a>--}}
{{--                                            </span>--}}
{{--                                                                </div>--}}
{{--                                                                <a href="#"--}}
{{--                                                                   class="sc_button sc_button_square sc_button_style_button-2 sc_button_bg_link sc_button_size_medium add_link"--}}
{{--                                                                   style="margin-right:15px;">--}}
{{--                                                                    <span class="button-up">More</span>--}}
{{--                                                                    <span>More</span>--}}
{{--                                                                </a>--}}
{{--                                                                <a href="#"--}}
{{--                                                                   class="sc_button sc_button_square sc_button_style_button-3 sc_button_bg_link sc_button_size_medium comments_button post">--}}
{{--                                                                    <span class="button-up">0</span>--}}
{{--                                                                    <span>0</span>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}

{{--                                                        </div>--}}
{{--                                                        <!-- /.post_content -->--}}
{{--                                                    </div>--}}
{{--                                                    <!-- /.post_item -->--}}
{{--                                                </div>--}}
{{--                                                <!-- /.isotope_item -->--}}
{{--                                                <div--}}
{{--                                                    class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3">--}}
{{--                                                    <div--}}
{{--                                                        class="post_item post_item_classic post_item_classic_3 post_format_standard even">--}}

{{--                                                        <div class="post_featured">--}}
{{--                                                            <div class="post_thumb"--}}
{{--                                                                 data-image="images/Depositphotos_11661557_original.jpg"--}}
{{--                                                                 data-title="Governmental Control Over Industries">--}}
{{--                                                                <a class="hover_icon hover_icon_link" href="#">--}}
{{--                                                                    <img class="wp-post-image" width="400" height="225"--}}
{{--                                                                         alt="Governmental Control Over Industries"--}}
{{--                                                                         src="images/Depositphotos_11661557_original-400x225.jpg">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="post_content isotope_item_content">--}}

{{--                                                            <h4 class="post_title">--}}
{{--                                                                <a href="#">Governmental Control Over Industries</a>--}}
{{--                                                            </h4>--}}

{{--                                                            <div class="post_descr">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing--}}
{{--                                                                    elit, sed do eiusmod--}}
{{--                                                                    tempor incididunt.t...</p>--}}

{{--                                                                <div class="post_info">--}}
{{--                                            <span class="post_info_item post_info_posted">Posted--}}
{{--                                                <a href="#" class="post_info_date">Mar 27, 2015</a>--}}
{{--                                            </span>--}}
{{--                                                                </div>--}}
{{--                                                                <a href="#"--}}
{{--                                                                   class="sc_button sc_button_square sc_button_style_button-2 sc_button_bg_link sc_button_size_medium add_link"--}}
{{--                                                                   style="margin-right:15px;">--}}
{{--                                                                    <span class="button-up">More</span>--}}
{{--                                                                    <span>More</span>--}}
{{--                                                                </a>--}}
{{--                                                                <a href="#"--}}
{{--                                                                   class="sc_button sc_button_square sc_button_style_button-3 sc_button_bg_link sc_button_size_medium comments_button post">--}}
{{--                                                                    <span class="button-up">3</span>--}}
{{--                                                                    <span>3</span>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}

{{--                                                        </div>--}}
{{--                                                        <!-- /.post_content -->--}}
{{--                                                    </div>--}}
{{--                                                    <!-- /.post_item -->--}}
{{--                                                </div>--}}
{{--                                                <!-- /.isotope_item -->--}}
{{--                                                <div--}}
{{--                                                    class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3">--}}
{{--                                                    <div--}}
{{--                                                        class="post_item post_item_classic post_item_classic_3 post_format_standard odd last">--}}

{{--                                                        <div class="post_featured">--}}
{{--                                                            <div class="post_thumb"--}}
{{--                                                                 data-image="images/Depositphotos_29804973_original.jpg"--}}
{{--                                                                 data-title="The World Is in Need of Full Utilization">--}}
{{--                                                                <a class="hover_icon hover_icon_link" href="#">--}}
{{--                                                                    <img class="wp-post-image"--}}
{{--                                                                         width="400" height="225"--}}
{{--                                                                         alt="The World Is in Need of Full Utilization"--}}
{{--                                                                         src="images/Depositphotos_29804973_original-400x225.jpg"></a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="post_content isotope_item_content">--}}

{{--                                                            <h4 class="post_title">--}}
{{--                                                                <a href="#">The World Is in Need of Full Utilization</a>--}}
{{--                                                            </h4>--}}

{{--                                                            <div class="post_descr">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing--}}
{{--                                                                    elit, sed do eiusmod--}}
{{--                                                                    tempor incididunt.t...</p>--}}

{{--                                                                <div class="post_info">--}}
{{--                                            <span class="post_info_item post_info_posted">Posted--}}
{{--                                                <a href="#" class="post_info_date">Apr 16, 2015</a>--}}
{{--                                            </span>--}}
{{--                                                                </div>--}}
{{--                                                                <a href="#"--}}
{{--                                                                   class="sc_button sc_button_square sc_button_style_button-2 sc_button_bg_link sc_button_size_medium add_link"--}}
{{--                                                                   style="margin-right:15px;">--}}
{{--                                                                    <span class="button-up">More</span>--}}
{{--                                                                    <span>More</span>--}}
{{--                                                                </a>--}}
{{--                                                                <a href="#"--}}
{{--                                                                   class="sc_button sc_button_square sc_button_style_button-3 sc_button_bg_link sc_button_size_medium comments_button post">--}}
{{--                                                                    <span class="button-up">0</span>--}}
{{--                                                                    <span>0</span>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}

{{--                                                        </div>--}}
{{--                                                        <!-- /.post_content -->--}}
{{--                                                    </div>--}}
{{--                                                    <!-- /.post_item -->--}}
{{--                                                </div>--}}
{{--                                                <!-- /.isotope_item -->--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </section>--}}
{{--                    <!-- </section> class="post_content" itemprop="articleBody"> -->--}}
{{--                    <section class="related_wrap related_wrap_empty"></section>--}}

{{--                </article>--}}
                <!-- </article> class="itemscope post_item post_item_single post_featured_default post_format_standard post-1109 page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article"> -->
            </div>
            <!-- </div> class="content"> -->
        {{--            <div class="sidebar widget_area bg_tint_light sidebar_style_white" role="complementary">--}}
        {{--                <aside class="widget widget_categories">--}}
        {{--                    <h3 class="widget_title">Categories</h3>--}}

        {{--                    <ul>--}}
        {{--                        <li class="cat-item">--}}
        {{--                            <a href="#">Architecture</a>--}}
        {{--                        </li>--}}
        {{--                        <li class="cat-item">--}}
        {{--                            <a href="#">blog classic</a>--}}
        {{--                        </li>--}}
        {{--                        <li class="cat-item">--}}
        {{--                            <a href="#">Chemicals</a>--}}
        {{--                        </li>--}}
        {{--                        <li class="cat-item">--}}
        {{--                            <a href="#">Electronics</a>--}}
        {{--                        </li>--}}
        {{--                        <li class="cat-item">--}}
        {{--                            <a href="#">Engineering</a>--}}
        {{--                        </li>--}}
        {{--                        <li class="cat-item">--}}
        {{--                            <a href="#">Light Industry</a>--}}
        {{--                        </li>--}}
        {{--                        <li class="cat-item">--}}
        {{--                            <a href="#">Mining Industry</a>--}}
        {{--                        </li>--}}
        {{--                        <li class="cat-item">--}}
        {{--                            <a href="#">Most Popular</a>--}}
        {{--                        </li>--}}
        {{--                        <li class="cat-item">--}}
        {{--                            <a href="#">Sertification</a>--}}
        {{--                        </li>--}}
        {{--                        <li class="cat-item">--}}
        {{--                            <a href="#">Uncategorized</a>--}}
        {{--                        </li>--}}
        {{--                    </ul>--}}
        {{--                </aside>--}}
        {{--                <aside class="widget widget_popular_posts">--}}
        {{--                    <h3 class="widget_title">Popular</h3>--}}

        {{--                    <div id="sc_tabs_325345258" class="sc_tabs sc_tabs_style_2" data-active="0">--}}
        {{--                        <ul class="sc_tabs_titles">--}}
        {{--                            <li class="sc_tabs_title first">--}}
        {{--                                <a href="#sc_tabs_325345258_1" class="theme_button" id="sc_tabs_325345258_1_tab">VIEWS</a>--}}
        {{--                            </li>--}}
        {{--                            <li class="sc_tabs_title">--}}
        {{--                                <a href="#sc_tabs_325345258_2" class="theme_button" id="sc_tabs_325345258_2_tab">COMMENTS</a>--}}
        {{--                            </li>--}}
        {{--                            <li class="sc_tabs_title last">--}}
        {{--                                <a href="#sc_tabs_325345258_3" class="theme_button" id="sc_tabs_325345258_3_tab">LIKES</a>--}}
        {{--                            </li>--}}
        {{--                        </ul>--}}
        {{--                        <div id="sc_tabs_325345258_1" class="sc_tabs_content odd first">--}}
        {{--                            <article class="post_item no_thumb first">--}}
        {{--                                <div class="post_content">--}}
        {{--                                    <h6 class="post_title">--}}
        {{--                                        <a href="#">Governmental Control Over Industries</a>--}}
        {{--                                    </h6>--}}

        {{--                                    <div class="post_info">--}}
        {{--                            <span class="post_info_item post_info_posted_by">by--}}
        {{--                                <a href="#" class="post_info_author">root</a>--}}
        {{--                            </span>--}}
        {{--                                        <span class="post_info_item post_info_counters">--}}
        {{--                                <a href="#" class="post_counters_item post_counters_views icon-eye">--}}
        {{--                                    <span class="post_counters_number">592</span>--}}
        {{--                                </a>--}}
        {{--                            </span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </article>--}}
        {{--                            <article class="post_item no_thumb">--}}
        {{--                                <div class="post_content">--}}
        {{--                                    <h6 class="post_title">--}}
        {{--                                        <a href="#">New Ways Of Industry Grow Observed</a>--}}
        {{--                                    </h6>--}}

        {{--                                    <div class="post_info">--}}
        {{--                            <span class="post_info_item post_info_posted_by">by--}}
        {{--                                <a href="#" class="post_info_author">root</a>--}}
        {{--                            </span>--}}
        {{--                                        <span class="post_info_item post_info_counters">--}}
        {{--                                <a href="#" class="post_counters_item post_counters_views icon-eye">--}}
        {{--                                    <span class="post_counters_number">502</span>--}}
        {{--                                </a>--}}
        {{--                            </span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </article>--}}
        {{--                            <article class="post_item no_thumb">--}}
        {{--                                <div class="post_content">--}}
        {{--                                    <h6 class="post_title">--}}
        {{--                                        <a href="#">We Need a Manufacturing Renaissance</a>--}}
        {{--                                    </h6>--}}

        {{--                                    <div class="post_info">--}}
        {{--                            <span class="post_info_item post_info_posted_by">by--}}
        {{--                                <a href="#" class="post_info_author">root</a>--}}
        {{--                            </span>--}}
        {{--                                        <span class="post_info_item post_info_counters">--}}
        {{--                                <a href="#" class="post_counters_item post_counters_views icon-eye">--}}
        {{--                                    <span class="post_counters_number">420</span>--}}
        {{--                                </a>--}}
        {{--                            </span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </article>--}}
        {{--                            <article class="post_item no_thumb">--}}
        {{--                                <div class="post_content">--}}
        {{--                                    <h6 class="post_title">--}}
        {{--                                        <a href="#">The World Is in Need of Full Utilization</a>--}}
        {{--                                    </h6>--}}

        {{--                                    <div class="post_info">--}}
        {{--                            <span class="post_info_item post_info_posted_by">by--}}
        {{--                                <a href="#" class="post_info_author">root</a>--}}
        {{--                            </span>--}}
        {{--                                        <span class="post_info_item post_info_counters">--}}
        {{--                                <a href="#" class="post_counters_item post_counters_views icon-eye">--}}
        {{--                                    <span class="post_counters_number">270</span>--}}
        {{--                                </a>--}}
        {{--                            </span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </article>--}}
        {{--                        </div>--}}
        {{--                        <div id="sc_tabs_325345258_2" class="sc_tabs_content even">--}}
        {{--                            <article class="post_item no_thumb first">--}}
        {{--                                <div class="post_content">--}}
        {{--                                    <h6 class="post_title">--}}
        {{--                                        <a href="#">New Ways Of Industry Grow Observed</a>--}}
        {{--                                    </h6>--}}

        {{--                                    <div class="post_info">--}}
        {{--                            <span class="post_info_item post_info_posted_by">by--}}
        {{--                                <a href="#" class="post_info_author">root</a>--}}
        {{--                            </span>--}}
        {{--                                        <span class="post_info_item post_info_counters">--}}
        {{--                                <a href="#" class="post_counters_item post_counters_comments icon-comment-1">--}}
        {{--                                    <span class="post_counters_number">3</span>--}}
        {{--                                </a>--}}
        {{--                            </span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </article>--}}
        {{--                            <article class="post_item no_thumb">--}}
        {{--                                <div class="post_content">--}}
        {{--                                    <h6 class="post_title">--}}
        {{--                                        <a href="#">Governmental Control Over Industries</a>--}}
        {{--                                    </h6>--}}

        {{--                                    <div class="post_info">--}}
        {{--                            <span class="post_info_item post_info_posted_by">by--}}
        {{--                                <a href="#" class="post_info_author">root</a>--}}
        {{--                            </span>--}}
        {{--                                        <span class="post_info_item post_info_counters">--}}
        {{--                                <a href="#" class="post_counters_item post_counters_comments icon-comment-1">--}}
        {{--                                    <span class="post_counters_number">3</span>--}}
        {{--                                </a>--}}
        {{--                            </span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </article>--}}
        {{--                            <article class="post_item no_thumb">--}}
        {{--                                <div class="post_content">--}}
        {{--                                    <h6 class="post_title">--}}
        {{--                                        <a href="#">Investments In Heavy Industry</a>--}}
        {{--                                    </h6>--}}

        {{--                                    <div class="post_info">--}}
        {{--                            <span class="post_info_item post_info_posted_by">by--}}
        {{--                                <a href="#" class="post_info_author">root</a>--}}
        {{--                            </span>--}}
        {{--                                        <span class="post_info_item post_info_counters">--}}
        {{--                                <a href="#" class="post_counters_item post_counters_comments icon-comment-1">--}}
        {{--                                    <span class="post_counters_number">1</span>--}}
        {{--                                </a>--}}
        {{--                            </span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </article>--}}
        {{--                            <article class="post_item no_thumb">--}}
        {{--                                <div class="post_content">--}}
        {{--                                    <h6 class="post_title">--}}
        {{--                                        <a href="#">Aerospace & Defense</a></h6>--}}

        {{--                                    <div class="post_info">--}}
        {{--                            <span class="post_info_item post_info_posted_by">by--}}
        {{--                                <a href="#" class="post_info_author">root</a>--}}
        {{--                            </span>--}}
        {{--                                        <span class="post_info_item post_info_counters">--}}
        {{--                                <a href="#" class="post_counters_item post_counters_comments icon-comment-1">--}}
        {{--                                    <span class="post_counters_number">0</span>--}}
        {{--                                </a>--}}
        {{--                            </span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </article>--}}
        {{--                        </div>--}}
        {{--                        <div id="sc_tabs_325345258_3" class="sc_tabs_content odd">--}}
        {{--                            <article class="post_item no_thumb first">--}}
        {{--                                <div class="post_content">--}}
        {{--                                    <h6 class="post_title">--}}
        {{--                                        <a href="#">Best Chemicals Supplier</a>--}}
        {{--                                    </h6>--}}

        {{--                                    <div class="post_info">--}}
        {{--                            <span class="post_info_item post_info_posted_by">by--}}
        {{--                                <a href="#" class="post_info_author">root</a>--}}
        {{--                            </span>--}}
        {{--                                        <span class="post_info_item post_info_counters">--}}
        {{--                                <a href="#" class="post_counters_item post_counters_likes icon-heart">--}}
        {{--                                    <span class="post_counters_number">0</span>--}}
        {{--                                </a>--}}
        {{--                            </span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </article>--}}
        {{--                            <article class="post_item no_thumb">--}}
        {{--                                <div class="post_content">--}}
        {{--                                    <h6 class="post_title">--}}
        {{--                                        <a href="#">New Post Without Image</a>--}}
        {{--                                    </h6>--}}

        {{--                                    <div class="post_info">--}}
        {{--                            <span class="post_info_item post_info_posted_by">by--}}
        {{--                                <a href="#" class="post_info_author">root</a>--}}
        {{--                            </span>--}}
        {{--                                        <span class="post_info_item post_info_counters">--}}
        {{--                                <a href="#" class="post_counters_item post_counters_likes icon-heart">--}}
        {{--                                    <span class="post_counters_number">0</span>--}}
        {{--                                </a>--}}
        {{--                            </span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </article>--}}
        {{--                            <article class="post_item no_thumb">--}}
        {{--                                <div class="post_content">--}}
        {{--                                    <h6 class="post_title">--}}
        {{--                                        <a href="#">Chat Post</a>--}}
        {{--                                    </h6>--}}

        {{--                                    <div class="post_info">--}}
        {{--                            <span class="post_info_item post_info_posted_by">by--}}
        {{--                                <a href="#" class="post_info_author">root</a>--}}
        {{--                            </span>--}}
        {{--                                        <span class="post_info_item post_info_counters">--}}
        {{--                                <a href="#" class="post_counters_item post_counters_likes icon-heart">--}}
        {{--                                    <span class="post_counters_number">0</span>--}}
        {{--                                </a>--}}
        {{--                            </span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </article>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </aside>--}}
        {{--                <aside class="widget widget_calendar">--}}
        {{--                    <div id="calendar_wrap">--}}
        {{--                        <table id="wp-calendar-1927871533" class="wp-calendar">--}}
        {{--                            <thead>--}}
        {{--                            <tr>--}}
        {{--                                <th class="month_prev">--}}
        {{--                                    <a href="#" data-type="post" data-year="2015" data-month="05" title="View posts for May 2015"></a>--}}
        {{--                                </th>--}}
        {{--                                <th class="month_cur" colspan="5">--}}
        {{--                                    October <span>2015</span>--}}
        {{--                                </th>--}}
        {{--                                <th class="month_next">&nbsp;</th>--}}
        {{--                            </tr>--}}
        {{--                            <tr>--}}
        {{--                                <th class="weekday" scope="col" title="Monday">M</th>--}}
        {{--                                <th class="weekday" scope="col" title="Tuesday">T</th>--}}
        {{--                                <th class="weekday" scope="col" title="Wednesday">W</th>--}}
        {{--                                <th class="weekday" scope="col" title="Thursday">T</th>--}}
        {{--                                <th class="weekday" scope="col" title="Friday">F</th>--}}
        {{--                                <th class="weekday" scope="col" title="Saturday">S</th>--}}
        {{--                                <th class="weekday" scope="col" title="Sunday">S</th>--}}
        {{--                            </tr>--}}
        {{--                            </thead>--}}
        {{--                            <tbody>--}}
        {{--                            <tr>--}}
        {{--                                <td colspan="3" class="pad"><span class="day_wrap">&nbsp;</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">1</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">2</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">3</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">4</span></td>--}}
        {{--                            </tr>--}}
        {{--                            <tr>--}}
        {{--                                <td class="day"><span class="day_wrap">5</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">6</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">7</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">8</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">9</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">10</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">11</span></td>--}}
        {{--                            </tr>--}}
        {{--                            <tr>--}}
        {{--                                <td class="day"><span class="day_wrap">12</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">13</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">14</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">15</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">16</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">17</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">18</span></td>--}}
        {{--                            </tr>--}}
        {{--                            <tr>--}}
        {{--                                <td class="day"><span class="day_wrap">19</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">20</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">21</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">22</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">23</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">24</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">25</span></td>--}}
        {{--                            </tr>--}}
        {{--                            <tr>--}}
        {{--                                <td class="day"><span class="day_wrap">26</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">27</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">28</span></td>--}}
        {{--                                <td class="today"><span class="day_wrap">29</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">30</span></td>--}}
        {{--                                <td class="day"><span class="day_wrap">31</span></td>--}}
        {{--                                <td class="pad" colspan="1"><span class="day_wrap">&nbsp;</span></td>--}}
        {{--                            </tr>--}}
        {{--                            </tbody>--}}
        {{--                        </table>--}}
        {{--                    </div>--}}
        {{--                </aside>--}}
        {{--                <aside class="widget widget_archive"><h3 class="widget_title">Archives</h3>--}}
        {{--                    <ul>--}}
        {{--                        <li><a href='#'>May 2015</a></li>--}}
        {{--                        <li><a href='#'>April 2015</a></li>--}}
        {{--                        <li><a href='#'>March 2015</a></li>--}}
        {{--                        <li><a href='#'>January 2015</a></li>--}}
        {{--                        <li><a href='#'>March 2013</a></li>--}}
        {{--                    </ul>--}}
        {{--                </aside>--}}
        {{--            </div>--}}
        <!-- /.sidebar -->

        </div>
        <!-- </div> class="content_wrap"> -->
    </div>
    <!-- </.page_content_wrap> -->


@endsection
