<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">

{{--    <meta name="yandex-verification" content="476fe40ec8ebf738"/>--}}
{{--    <meta name="google-site-verification" content="zwC7unXMd8DyfhU6_CdBrCnbJE8XOn_yu-bAFauRR7s"/>--}}

    <title>TP site @yield('title')</title>
    <meta name="description" content="tp site  @yield('description')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--    <meta name="twitter:title" content="Игровой склад RF online сервера Гомер">--}}
{{--    <meta name="twitter:description" content="Игровой склад RF online сервера Гомер гильдии HeadHunters - крафт RF online, оружие RF online, RF online броня, RF online гайды">--}}
{{--    <meta name="twitter:image" content="/img/icon/logo.png">--}}

    <!-- Open Graph data-->
{{--    <meta property="og:type" content="article">--}}
{{--    <meta property="og:title" content="Игровой склад RF online сервера Гомер">--}}
{{--    <meta property="og:url" content="https:/rf-server.ru" />--}}
{{--    <meta property="og:locale" content="ru_RU" />--}}
{{--    <meta property="og:site_name" content="RF Server" />--}}
{{--    <meta property="og:description" content="Игровой склад RF online сервера Гомер гильдии HeadHunters - крафт RF online, оружие RF online, RF online броня, RF online гайды">--}}
{{--    <meta property="og:image" content="/img/icon/logo.png">--}}



    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <title>Optima</title>
    <meta name='robots' content='noindex,follow'/>
    <link rel='stylesheet'
          href='http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,700,700italic&#038;subset=latin,latin-ext,cyrillic,cyrillic-ext'
          type='text/css' media='all'/>
    <link rel='stylesheet'
          href='http://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,400,400italic,700,700italic&#038;subset=latin,latin-ext,cyrillic,cyrillic-ext'
          type='text/css' media='all'/>
    <link rel='stylesheet' href='css/core.messages.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/prettyPhoto.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/idangerous.swiper.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='fonts/fontello/css/fontello.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/core.portfolio.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/composer.css' type='text/css' media='all'/>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css">
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/core.animation.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/responsive.css' type='text/css' media='all'/>
    <script type='text/javascript' src='js/vendor/jquery-1.11.3.min.js'></script>
    <script type='text/javascript' src='js/vendor/jquery-migrate-1.2.1.min.js'></script>
    <script type='text/javascript' src='js/custom/add_title_to_link.js'></script>
    <script src='js/vendor/jquery.flexslider-min.js'></script>





{{--    <link href="{{ asset('css/main.css?v=1.8.0') }}" rel="stylesheet">--}}


</head>
<body @if (\Request::is('services') || \Request::is('contacts'))
      class="body_style_wide body_filled article_style_stretch top_panel_style_dark top_panel_opacity_solid menu_right"
      @else
          class="body_style_boxed body_filled article_style_stretch top_panel_style_dark top_panel_opacity_solid menu_right sidebar_show sidebar_right"
          style="background: url(./images/grey_bg.jpg) 0 0 repeat fixed;background-color: #bfbfbf;"
      @endif
>

<div class="body_wrap">

    <div class="page_wrap">


        <div class="top_panel_fixed_wrap"></div>

        <header class="top_panel_wrap bg_tint_dark">


            <div class="menu_main_wrap logo_left">
                <div class="content_wrap clearfix">
                    <div class="logo">
                        <a href=".">
                            <img src="images/logo2.png" class="logo_main" alt="">
                            <img src="images/logo2.png" class="logo_fixed" alt="">
                        </a>
                    </div>
                    <div class="search_wrap search_style_regular search_ajax" title="Open/close search form">
{{--                        <a href="#" class="search_icon icon-search-2"></a>--}}
                        <div class="search_form_wrap">
                            <form method="get" class="search_form" action="#">
                                <button type="submit" class="search_submit" title="Search">Search</button>
                                <input type="text" class="search_field" placeholder="Search" value="" name="s" title="Search"/>
                            </form>
                        </div>
                        <div class="search_results widget_area bg_tint_light">
                            <a class="search_results_close icon-delete-2"></a>
                            <div class="search_results_content"></div>
                        </div>
                    </div>
                    <a href="#" class="menu_main_responsive_button icon-iconmonstr-menu-icon"></a>
                    <nav role="navigation" class="menu_main_nav_area">
                        <ul id="menu_main" class="menu_main_nav">
                            <li class="menu-item current-menu-item1111 current-menu-ancestor111 current-menu-parent111 menu-item-has-children111">
                                <a href="/">Домой</a>
{{--                                <ul class="sub-menu">--}}
{{--                                    <li class="menu-item">--}}
{{--                                        <a href="index.html">Homepage</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="menu-item current-menu-item">--}}
{{--                                        <a href="home-page-2.html">Homepage (Boxed)</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="menu-item">--}}
{{--                                        <a href="home-page-3.html">Homepage 2</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="menu-item">--}}
{{--                                        <a href="home-page-4.html">Homepage 3</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
                            </li>
                            <li class="menu-item">
                                <a href="/services">Услуги</a>
                            </li>
{{--                            <li class="menu-item menu-item-has-children">--}}
{{--                                <a href="#">Features</a>--}}
{{--                                <ul class="sub-menu">--}}
{{--                                    <li class="menu-item">--}}
{{--                                        <a href="shortcodes.html">Shortcodes</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="menu-item">--}}
{{--                                        <a href="typography.html">Typography</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="menu-item">--}}
{{--                                        <a href="infographic.html">Infographic</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="menu-item menu-item-has-children">--}}
{{--                                        <a href="#">Pages</a>--}}
{{--                                        <ul class="sub-menu">--}}
{{--                                            <li class="menu-item">--}}
{{--                                                <a href="departments.html">Company</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="menu-item">--}}
{{--                                                <a href="departments.html">Departments</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="menu-item">--}}
{{--                                                <a href="certificates.html">Certificates</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="menu-item">--}}
{{--                                                <a href="career.html">Career</a></li>--}}
{{--                                            <li class="menu-item">--}}
{{--                                                <a href="404-2.html">404</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="menu-item">--}}
{{--                                                <a href="single-post.html">Single post</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="menu-item">--}}
{{--                                                <a href="single-product.html">Single product</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                            <li class="menu-item">
                                <a href="/news">Новости</a>
                            </li>
{{--                            <li class="menu-item">--}}
{{--                                <a href="shop.html">Store</a>--}}
{{--                            </li>--}}
                            <li class="menu-item">
                                <a href="/contacts">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </header>

        <main>
            @yield('content')
        </main>





        <footer class="contacts_wrap bg_tint_dark contacts_style_dark">
            <div class="content_wrap">
                <h2 class="footer_contact_title"> Contact Us </h2>

                <div class="footer_contact_title_line"></div>
                <div class="contacts_address">
                    <address class="address_right">
                        Phone: 1.800.123.4567<br>
                        Fax: 1.800.123.4566
                    </address>
                    <address class="address_left">
                        1234, Some Str.<br>
                        San Francisco, CA 94102, US
                    </address>
                </div>
                <div class="sc_socials sc_socials_size_big">
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_facebook-circled">
                            <span class="icon-facebook-circled up"></span>
                            <span class="icon-facebook-circled"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_pinterest-circled">
                            <span class="icon-pinterest-circled up"></span>
                            <span class="icon-pinterest-circled"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_twitter-circled">
                            <span class="icon-twitter-circled up"></span>
                            <span class="icon-twitter-circled"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_gplus-circled">
                            <span class="icon-gplus-circled up"></span>
                            <span class="icon-gplus-circled"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_flickr-circled">
                            <span class="icon-flickr-circled up"></span>
                            <span class="icon-flickr-circled"></span>
                        </a>
                    </div>
                </div>
                <div class="sc_contact_form sc_contact_form_standard aligncenter" style="width:57%;">
                    <form id="sc_contact_form_251067573" data-formtype="contact" method="post" action="#">
                        <div class="sc_contact_form_info">
                            <div class="sc_contact_form_item sc_contact_form_field label_over">
                                <label class="required" for="sc_contact_form_username">Name</label>
                                <input id="sc_contact_form_username" type="text" name="username" placeholder="Name *">
                            </div>
                            <div class="sc_contact_form_item sc_contact_form_field label_over">
                                <label class="required" for="sc_contact_form_email">E-mail</label>
                                <input id="sc_contact_form_email" type="text" name="email" placeholder="E-mail *">
                            </div>
                        </div>
                        <div class="sc_contact_form_item sc_contact_form_message label_over">
                            <label class="required" for="sc_contact_form_message">Message</label>
                            <textarea id="sc_contact_form_message" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="sc_contact_form_item sc_contact_form_button">
                            <button title="Submit">Submit</button>
                        </div>
                        <div class="result sc_infobox"></div>
                    </form>
                </div>
            </div>
            <!-- /.content_wrap -->
        </footer>
        <!-- /.contacts_wrap -->

        <div class="copyright_wrap">
            <div class="content_wrap">
                <p>
                    <a href="http://themeforest.net/user/AncoraThemes">AncoraThemes</a>
                    © 2015 All rights reserved.
                    <a href="#">Terms of use</a>
                    and
                    <a href="#">Privacy Policy</a>
                </p>
            </div>
        </div>

    </div>
    <!-- /.page_wrap -->

</div>
<!-- /.body_wrap -->

<a href="#" class="scroll_to_top icon-up-2" title="Scroll to top"></a>

<div class="custom_html_section">
</div>

<script type='text/javascript' src='js/vendor/superfish.min.js'></script>
<script type='text/javascript' src='js/vendor/jquery.slidemenu.min.js'></script>
<script type='text/javascript' src='js/vendor/core.min.js'></script>
<script type='text/javascript' src='js/vendor/widget.min.js'></script>
<script type='text/javascript' src='js/vendor/tabs.min.js'></script>
<script type='text/javascript' src='js/vendor/chart.min.js'></script>
<script type='text/javascript' src='js/vendor/diagram.raphael.min.js'></script>
<script type='text/javascript' src='js/vendor/Graph.js'></script>
<script type='text/javascript' src='js/vendor/idangerous.swiper-2.7.min.js'></script>
<script type='text/javascript' src='js/vendor/idangerous.swiper.scrollbar-2.4.min.js'></script>
<script type='text/javascript' src='js/vendor/isotope.pkgd.min.js'></script>

<script type='text/javascript' src='js/custom/core.utils.min.js'></script>
<script type='text/javascript' src='js/custom/core.init.js'></script>
<script type='text/javascript' src='js/custom/shortcodes.js'></script>
<script type='text/javascript' src='js/custom/core.messages.min.js'></script>
<script type='text/javascript' src='js/custom/jquery.prettyPhoto.min.js'></script>

{{--<!-- Global site tag (gtag.js) - Google Analytics -->--}}
{{--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-105707189-2"></script>--}}
{{--<script>--}}
{{--    window.dataLayer = window.dataLayer || [];--}}

{{--    function gtag() {--}}
{{--        dataLayer.push(arguments);--}}
{{--    }--}}

{{--    gtag('js', new Date());--}}

{{--    gtag('config', 'UA-105707189-2');--}}
{{--</script>--}}

{{--<!-- Yandex.Metrika counter -->--}}
{{--<script >--}}
{{--    (function (m, e, t, r, i, k, a) {--}}
{{--        m[i] = m[i] || function () {--}}
{{--            (m[i].a = m[i].a || []).push(arguments)--}}
{{--        };--}}
{{--        m[i].l = 1 * new Date();--}}
{{--        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)--}}
{{--    })--}}
{{--    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");--}}

{{--    ym(56564557, "init", {--}}
{{--        clickmap: true,--}}
{{--        trackLinks: true,--}}
{{--        accurateTrackBounce: true,--}}
{{--        webvisor: true--}}
{{--    });--}}
{{--</script>--}}
{{--<noscript>--}}
{{--    <div><img src="https://mc.yandex.ru/watch/56564557" style="position:absolute; left:-9999px;" alt="yandex"/></div>--}}
{{--</noscript>--}}
{{--<!-- /Yandex.Metrika counter -->--}}
{{--    --}}
{{--    <script src="{{ asset('js/main.js?v=1.8.0') }}"></script>--}}
</body>
</html>