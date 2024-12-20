<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Basics -->
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_site_icon_url(); ?>">
    <link rel="apple-touch-icon" href="<?php echo get_site_icon_url(); ?>">

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.7.1.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5P5KZWS6');</script>
    <!-- End Google Tag Manager -->
        <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PBVGKMGH');</script>
    <!-- End Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HN9MXYRT4Q"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HN9MXYRT4Q');
    </script>

    <!-- Hotjar Tracking Code for https://www.crossmobile.pl -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 3669424,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '302174599233088');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=302174599233088&ev=PageView&noscript=1" /></noscript>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5P5KZWS6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBVGKMGH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class="navbar-default">
        <div class="nav-wrapper">
            <div class="container">
                <div class="nav-wrapper-inner">
                    <div class="brand">
                        <a href="<?php echo get_home_url(); ?>" class="main-logo" title="crossmobile logo">
                            <?php if (!empty(get_theme_mod('custom_logo'))) { ?>
                                <?php echo wp_get_attachment_image(get_theme_mod('custom_logo'), 'full', 0, ['class' => '']); ?>
                            <?php }; ?>
                        </a>
                        <div class="desktop-hamburger" onclick="toggleDesktopMenu()">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                    </div>
                    <div class="hamburger" onclick="toggleMenu()">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                    <div class="nav-primary collapse navbar-collapse">
                        <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'primary',
                            'depth'           => 2,
                            'container'       => 'div',
                            'container_class' => '',
                            'menu_class'      => 'navbar-nav',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ));
                        ?>

                        <?php if (!empty(get_field('header_button_external', 'option'))) { ?>
                            <div class="nav-buttons">
                                <div class="search-slider">
                                    <div class="search-slider__icon">
                                        <svg width="20" height="20" class="search-icon" role="img" viewBox="2 9 20 5" focusable="false" aria-label="Search">
                                            <path fill="#ffff" d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                        </svg>
                                    </div>
                                    <div class="search-slider__form">
                                        <form id="search-form" class="search-form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                                            <input type="text" name="s" placeholder="Szukaj..." aria-label="Szukaj">
                                            <button type="submit">
                                                <svg width="20" height="20" class="search-icon" role="img" viewBox="2 9 20 5" focusable="false" aria-label="Search">
                                                    <path fill="#ffff" d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <a href="<?php echo get_field('header_button_external', 'option')['url'] ? get_field('header_button_external', 'option')['url'] : '#'; ?>" class="button-external" title="<?php echo get_field('header_button_external', 'option')['title'] ? get_field('header_button_external', 'option')['title'] : ''; ?>" target="<?php echo get_field('header_button_external', 'option')['target'] ? get_field('header_button_external', 'option')['target'] : '_self'; ?>">
                                    <?php echo get_field('header_button_external', 'option')['title'] ? get_field('header_button_external', 'option')['title'] : ''; ?>
                                    <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.0018 20.4872C16.5176 20.4872 20.989 16.0158 20.989 10.5C20.989 4.98423 16.5176 0.512817 11.0018 0.512817M15.0443 10.7378H0.539063" stroke="white" stroke-width="0.798647" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M15.0449 10.7379L11.2402 6.93323" stroke="white" stroke-width="0.798647" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M15.0449 10.7378L11.2402 14.5424" stroke="white" stroke-width="0.798647" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                        <?php }; ?>

                    </div>

                </div>
            </div>
            <div class="nav-wrapper-desktop">
                <div class="container">
                    <div class="nav-desktop-wrap">
                        <?php if (!empty(get_field('menu_hamburger', 'option'))) { ?>
                            <div class="nav-desktop-menu">
                                <ul>
                                    <?php foreach (get_field('menu_hamburger', 'option') as $single) { ?>
                                        <?php if (!empty($single['link'])) { ?>
                                            <li>
                                                <a href="<?php echo $single['link']['url'] ? $single['link']['url'] : '#'; ?>" class="btn btn-primary" title="<?php echo $single['link']['title'] ? $single['link']['title'] : ''; ?>" target="<?php echo $single['link']['target'] ? $single['link']['target'] : '_self'; ?>">
                                                    <?php echo $single['link']['title'] ? $single['link']['title'] : ''; ?>
                                                </a>
                                            </li>
                                        <?php }; ?>
                                    <?php }; ?>
                                </ul>
                            </div>
                        <?php }; ?>
                        <div class="nav-desktop-contact">
                            <div class="footer-data-contact">
                                <div class="footer-contact-wrapper">
                                    <a href="tel:<?php echo preg_replace('/\s+/', '', get_field('footer_phone', 'option')); ?>"><?php echo get_field('footer_phone', 'option'); ?></a>
                                    <a href="mailto:<?php echo get_field('footer_email', 'option'); ?>"><?php echo get_field('footer_email', 'option'); ?></a>
                                    <div class="footer-social">
                                        <p>Bądź na bieżąco</p>
                                        <a href="<?php echo get_field('fb', 'option'); ?>" target="_blank" rel='noopener noreferrer nofollow' title="crossmobile facebook">
                                            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2018_932)">
                                                    <path d="M44.76 21.2942V23.5487C44.7311 23.7096 44.6885 23.8696 44.6768 24.0314C44.5347 25.9875 44.1943 27.9084 43.5408 29.7579C41.2209 36.326 36.765 40.8882 30.3575 43.5621C29.2016 44.0448 27.9715 44.3531 26.7215 44.7589V28.5927H31.0915C31.4237 26.4738 31.746 24.4155 32.0791 22.2894H25.4308C25.4308 20.8034 25.4199 19.3778 25.4335 17.9523C25.4507 16.1742 26.5378 14.9403 28.3164 14.8075C29.694 14.7044 31.0825 14.7451 32.4664 14.7225C32.6402 14.7198 32.814 14.7225 32.9941 14.7225V9.19302C30.8254 8.91099 28.6803 8.64613 26.5025 8.83777C22.404 9.19935 19.4868 12.0658 19.2089 16.1589C19.0822 18.0291 19.1356 19.9121 19.1075 21.7896C19.1048 21.9487 19.1075 22.1078 19.1075 22.3057H14.0795V28.6171H19.0831V44.6432C19.017 44.6432 18.9708 44.6496 18.9274 44.6423C15.9359 44.1198 13.1037 43.1517 10.5241 41.5318C1.49261 35.8596 -1.89079 25.1676 1.01561 15.7467C4.47505 4.52954 15.9956 -2.05483 27.471 0.57747C36.1395 2.56616 42.9878 9.84206 44.4052 18.5805C44.5509 19.48 44.6433 20.3893 44.76 21.2933V21.2942Z" fill="#E81F76"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2018_932">
                                                        <rect width="44.76" height="44.76" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                        <a href="<?php echo get_field('ig', 'option'); ?>" target="_blank" rel='noopener noreferrer nofollow' title="crossmobile instagram">
                                            <svg width="45" height="45" xmlns="http://www.w3.org/2000/svg" fill="none">
                                                <g>
                                                    <path fill="#E81F76"
                                                        d="m24.14686,44.54564l-3.145,0c-0.126,-0.0276 -0.2511,-0.0655 -0.3798,-0.0819c-0.7482,-0.1 -1.5051,-0.1543 -2.2445,-0.2974c-4.8147,-0.9309 -8.9092,-3.1616 -12.2388,-6.712c-3.0803,-3.2832 -4.9792,-7.1439 -5.6723,-11.5691c-0.0901,-0.5758 -0.1715,-1.1525 -0.2572,-1.7291c0,-1.0895 0,-2.1799 0,-3.2694c0.0656,-0.4784 0.1251,-0.9576 0.1969,-1.4343c0.6396,-4.2528 2.318,-8.0592 5.2136,-11.28205c5.1446,-5.72681 11.6368,-8.22819 19.3567,-7.55415c3.1476,0.27497 6.0798,1.28948 8.8278,2.84186c7.988,4.51318 12.425,13.76274 10.847,22.68394c-0.877,4.9614 -3.183,9.1746 -6.942,12.5897c-3.185,2.8944 -6.923,4.7278 -11.1979,5.4734c-0.7841,0.137 -1.576,0.2275 -2.3645,0.3396l0,0.0009zm-1.5287,-34.58584c0,-0.04827 -0.0018,-0.09654 -0.0018,-0.14481c-2.108,0.07585 -4.2196,0.09654 -6.3224,0.24393c-1.7283,0.12154 -3.2596,0.78002 -4.4909,2.03512c-1.3616,1.3877 -1.8945,3.109 -1.9654,4.9657c-0.1479,3.8675 -0.2223,7.7386 0.0718,11.6035c0.105,1.3783 0.5626,2.6549 1.436,3.7625c1.4736,1.8687 3.5204,2.5548 5.814,2.647c1.9339,0.0776 3.8713,0.1129 5.8061,0.0845c2.15,-0.0319 4.3185,-0.0086 6.4437,-0.2767c2.752,-0.3474 4.615,-1.9446 5.495,-4.5813c0.41,-1.23 0.464,-2.5057 0.457,-3.7788c-0.019,-3.3952 -0.032,-6.7921 -0.137,-10.1856c-0.042,-1.3602 -0.557,-2.6238 -1.422,-3.7194c-1.474,-1.8695 -3.521,-2.55996 -5.8147,-2.64185c-1.7878,-0.06378 -3.5799,-0.01293 -5.3694,-0.01293l0,-0.00086z"></path>
                                                    <path fill="#E81F76"
                                                        d="m22.56666,12.07934c2.0083,0.0681 4.0034,0.0956 5.9916,0.2146c2.512,0.15 4.294,1.8584 4.39,4.3347c0.123,3.1496 0.125,6.3044 0.126,9.4565c0,1.0533 -0.055,2.1308 -0.28,3.1556c-0.46,2.1006 -2.036,3.4237 -4.2307,3.4978c-3.2273,0.1086 -6.459,0.1207 -9.6889,0.1198c-1.0544,0 -2.1325,-0.0629 -3.159,-0.281c-2.0923,-0.4447 -3.439,-1.9868 -3.5152,-4.1029c-0.1137,-3.1788 -0.1268,-6.3612 -0.1277,-9.5426c0,-1.0533 0.0604,-2.1299 0.2853,-3.1548c0.4568,-2.0816 2.0275,-3.3581 4.2012,-3.4822c2.0039,-0.1147 4.0122,-0.1474 6.0056,-0.2155l0.0018,0zm0.0079,3.971c-3.6552,0 -6.5657,2.8608 -6.5701,6.4586c-0.0052,3.5978 2.8982,6.4715 6.5482,6.4819c3.6727,0.0094 6.5966,-2.8652 6.5916,-6.4811c-0.004,-3.5986 -2.9137,-6.4594 -6.5689,-6.4594l-0.0008,0zm6.8517,1.2248c0.833,0.0009 1.527,-0.674 1.535,-1.4929c0.008,-0.8171 -0.677,-1.5084 -1.508,-1.5213c-0.8495,-0.013 -1.5565,0.6775 -1.553,1.517c0.0035,0.8223 0.6913,1.4972 1.526,1.4981l0,-0.0009z"></path>
                                                    <path fill="#E81F76"
                                                        d="m22.57176,26.73624c-2.389,0 -4.2817,-1.8765 -4.2782,-4.2391c0.0035,-2.3264 1.9094,-4.1916 4.2826,-4.1908c2.3898,0 4.2817,1.8748 4.2773,4.2382c-0.0043,2.3282 -1.9085,4.1917 -4.2817,4.1917z"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer-contact-icon">
                                    <svg width="79" height="72" viewBox="0 0 79 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2012_952)">
                                            <path
                                                d="M20.8949 0C33.0396 0 45.1826 0 57.3273 0C57.4152 0.0557746 57.4964 0.141972 57.5927 0.163944C59.3269 0.569577 60.4189 1.63775 60.7164 3.39042C60.8702 4.29465 60.8634 5.23775 60.8313 6.16056C60.8093 6.7893 61.0325 7.09521 61.5852 7.37408C66.296 9.74704 70.9933 12.147 75.6872 14.5521C78.1365 15.8062 78.723 17.6755 77.4688 20.1414C72.0565 30.7859 66.6391 41.427 61.2454 52.08C61.0037 52.5566 60.8702 53.1431 60.8651 53.6789C60.8279 58.3251 60.8381 62.9696 60.8195 67.6158C60.811 69.627 59.7766 71.1194 58.0288 71.6975C57.6874 71.8107 57.3358 71.8986 56.9893 71.9983H21.2313C21.1569 71.9594 21.0876 71.902 21.0098 71.8851C18.5031 71.3172 17.4044 69.9431 17.3977 67.3623C17.3875 62.8293 17.3926 58.2946 17.3487 53.7617C17.3436 53.1718 17.1948 52.5296 16.9295 52.0056C11.5273 41.3273 6.09473 30.6625 0.673979 19.9927C-0.477107 17.7262 0.153371 15.7825 2.393 14.64C6.59337 12.4969 10.7464 10.2541 15.0127 8.25296C16.8128 7.40958 17.8372 6.44282 17.3723 4.37915C17.3419 4.24563 17.3605 4.0969 17.3723 3.95831C17.5295 2.35437 18.2766 1.14592 19.7506 0.441127C20.1174 0.265352 20.5112 0.145352 20.8932 0L20.8949 0ZM19.9111 59.2715H58.3094V10.6073H19.9111V59.2715ZM19.8689 61.8744C19.8689 63.6963 19.8689 65.4372 19.8689 67.178C19.8689 69.0152 20.3236 69.4715 22.1558 69.4715C33.4537 69.4715 44.7516 69.4715 56.0495 69.4715C56.3301 69.4715 56.6157 69.4918 56.8912 69.453C57.6705 69.3448 58.2824 68.9053 58.3094 68.1228C58.3787 66.0524 58.3331 63.9786 58.3331 61.8761H19.8689V61.8744ZM19.879 8.05014H58.3449C58.3449 6.95155 58.3449 5.91211 58.3449 4.87437C58.3449 3 57.8885 2.54704 56.0038 2.54704C44.7381 2.54704 33.474 2.54704 22.2082 2.54704C21.8989 2.54704 21.5845 2.52845 21.2837 2.58085C20.4706 2.72113 19.9331 3.22141 19.8959 4.04113C19.8334 5.35606 19.879 6.67775 19.879 8.04845V8.05014ZM73.0166 23.4879C68.9379 21.4073 64.9556 19.3741 60.9074 17.3087V47.018L61.0358 47.0535C65.0148 39.2282 68.992 31.4045 73.0166 23.4896V23.4879ZM5.20733 23.4913C9.22852 31.3994 13.2108 39.2299 17.1932 47.0603C17.2303 47.0383 17.2692 47.018 17.3064 46.9961V17.3189C13.2261 19.4011 9.24205 21.4327 5.20733 23.493V23.4913ZM60.8499 9.75211C60.8499 11.3087 60.8347 12.7386 60.8685 14.1651C60.8736 14.3544 61.0798 14.618 61.2623 14.7127C65.5269 16.9082 69.8 19.0834 74.1187 21.2873C74.4821 20.5859 74.832 19.9183 75.1734 19.249C75.9729 17.6823 75.8782 17.4 74.2826 16.587C70.5826 14.7025 66.8808 12.818 63.1808 10.9352C62.4388 10.5566 61.695 10.1814 60.8499 9.75211ZM17.3673 9.76225C15.8156 10.5499 14.3738 11.2783 12.9336 12.0118C9.78463 13.6158 6.63562 15.2197 3.49 16.8304C2.58907 17.2918 2.34398 17.7515 2.68204 18.4885C3.11137 19.4299 3.6117 20.3375 4.10019 21.2992C8.41888 19.0935 12.6919 16.9166 16.9548 14.7211C17.1374 14.6265 17.3453 14.3628 17.3504 14.1718C17.3842 12.747 17.3689 11.3189 17.3689 9.76225H17.3673Z"
                                                fill="#E72176"></path>
                                            <path
                                                d="M39.0924 64.4043C40.4953 64.4043 41.8983 64.3958 43.3012 64.4077C44.1565 64.4144 44.6484 64.8319 44.6889 65.5451C44.7312 66.3057 44.2495 66.8516 43.3773 66.8601C40.5443 66.8888 37.7097 66.8871 34.8768 66.8634C33.9928 66.855 33.5077 66.3378 33.5313 65.5789C33.555 64.8268 34.052 64.4127 34.9681 64.406C36.3423 64.3975 37.7182 64.4043 39.0924 64.4043Z"
                                                fill="#E72176"></path>
                                            <g clip-path="url(#clip1_2012_952)">
                                                <path
                                                    d="M48.5893 35.4067C47.894 40.077 43.3797 43.3204 38.5127 42.6537C35.7652 42.2768 33.3569 40.6954 31.9999 38.3731C31.4625 37.4552 31.1064 36.4503 30.9486 35.4067H27.1094C27.9659 42.0256 34.257 46.7281 41.1595 45.9067C46.8863 45.2271 51.4007 40.8983 52.1094 35.4067H48.5893Z"
                                                    fill="#E72176"></path>
                                                <path
                                                    d="M37.9451 28.3786H35.0632V25.9501C34.3511 25.7214 33.6054 25.6055 32.853 25.6055V28.369H30.3305C30.0887 29.0518 29.9678 29.7668 29.9678 30.4883H32.8497V32.9394C33.5618 33.168 34.3074 33.284 35.0598 33.284V30.5237H37.5823C37.8208 29.8409 37.9417 29.1259 37.9417 28.4044C37.9417 28.4044 37.9484 28.3786 37.9417 28.3786H37.9451Z"
                                                    fill="#E72176"></path>
                                                <path
                                                    d="M49.2981 29.4703C49.4627 31.7765 47.6455 33.7766 45.2372 33.9312C42.8323 34.089 40.7464 32.3466 40.5852 30.0372C40.5717 29.8472 40.5717 29.6571 40.5852 29.4671C40.4206 27.1642 42.2377 25.1673 44.646 25.0094C47.051 24.8516 49.1368 26.5941 49.2981 28.9035C49.3115 29.0935 49.3115 29.2835 49.2981 29.4736V29.4703ZM41.6835 29.4703C41.6264 31.1935 43.0372 32.6364 44.8341 32.6944C46.6311 32.7492 48.1359 31.3964 48.1964 29.6732C48.1964 29.6056 48.1964 29.538 48.1964 29.4736C48.2535 27.7504 46.8427 26.3074 45.0458 26.2495C43.2488 26.1947 41.744 27.5475 41.6835 29.2706C41.6835 29.3383 41.6835 29.4027 41.6835 29.4703Z"
                                                    fill="white"></path>
                                                <g clip-path="url(#clip2_2012_952)">
                                                    <path
                                                        d="M66.0594 35.3101C63.9894 49.8101 50.5494 59.8801 36.0594 57.8101C27.8794 56.6401 20.7094 51.7301 16.6694 44.5201C15.0694 41.6701 14.0094 38.5501 13.5394 35.3101H2.10938C4.65937 55.8601 23.3894 70.4601 43.9394 67.9101C60.9894 65.8001 74.4294 52.3601 76.5394 35.3101H66.0594Z"
                                                        fill="#E72176"></path>
                                                    <path
                                                        d="M34.3694 13.4899H25.7894V5.94988C23.6694 5.23988 21.4494 4.87988 19.2094 4.87988V13.4599H11.6994C10.9794 15.5799 10.6194 17.7999 10.6194 20.0399H19.1994V27.6499C21.3194 28.3599 23.5394 28.7199 25.7794 28.7199V20.1499H33.2894C33.9994 18.0299 34.3594 15.8099 34.3594 13.5699C34.3594 13.5699 34.3794 13.4899 34.3594 13.4899H34.3694Z"
                                                        fill="#E72176"></path>
                                                </g>
                                            </g>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2012_952">
                                                <rect width="78" height="72" fill="white" transform="translate(0.109375)"></rect>
                                            </clipPath>
                                            <clipPath id="clip1_2012_952">
                                                <rect width="25" height="21" fill="white" transform="translate(27.1094 25)"></rect>
                                            </clipPath>
                                            <clipPath id="clip2_2012_952">
                                                <rect width="74.43" height="65.2" fill="white" transform="translate(2.10938 3)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <main class="main">