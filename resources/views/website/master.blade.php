<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/ecour/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Dec 2021 14:33:23 GMT -->

<head>
    <style>
        nav {}

        ul,
        li {
            margin: 0;
            padding: 0;
        }

        .main {
            position: absolute;
            z-index: 1;

        }

        .main li {
            list-style: none;
            background: rgb(242, 242, 244);
            width: 100px;
            padding: 0 5px;
            border: 1px solid black;
            height: 30px;

            line-height: 30px;

            -webkit-transition: all .5s ease-in-out;

        }

        .main li:nth-child(odd) {

            -webkit-transform-origin: top;
            -webkit-transform: perspective(350px) rotateX(-90deg);
        }

        .main li:nth-child(even) {
            margin-top: -65px;
            -webkit-transform-origin: bottom;
            -webkit-transform: perspective(350px) rotateX(90deg);
        }



        .hov:hover li:nth-child(odd) {
            -webkit-transform-origin: top;
            -webkit-transform: perspective(350px) rotateX(0deg);
            margin-top: 0;
        }

        .hov:hover li:nth-child(even) {
            -webkit-transform-origin: bottom;
            -webkit-transform: perspective(350px) rotateX(0deg);
            margin-top: 0;
        }

        .main li:first-child {
            margin-top: 0;
        }

        .hov {
            position: relative;
            height: 40px;
            width: 112px;
            background: rgb(7, 197, 7);
            color: white;
            font-size: 13px;
            font-family: Helvetica;
            font-weight: bold;
            text-align: center;
            line-height: 40px;
            list-style: none;
            z-index: 2;

        }

    </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Online Class Management System</title>

    <link rel="preconnect" href="https://fonts.gstatic.com/">


    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">


    <!-- new  -->

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('backend/img/favicon.png') }}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ url('assets/css/preloader.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/backToTop.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/huicalendar.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/fontAwesome5Pro.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">

    <!-- more new  -->

    <link rel="stylesheet" type="text/css" href="{{ url('assets2/css/assets.css') }}">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets2/css/typography.css') }}">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets2/css/shortcodes/shortcodes.css') }}">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets2/css/style.css') }}">
    <link class="skin" rel="stylesheet" type="{{ url('text/c2ss" href="assets/css/color/color-1.css') }}">

    <!-- REVOLUTION SLIDER CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets2/vendors/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets2/vendors/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets2/vendors/revolution/css/navigation.css') }}">

    <!-- more new  -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="{{ url('backend/plugins/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ url('backend/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ url('backend/css/style.css') }}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

</head>

<body>




    <header>
        @include('website.fixed.header')
    </header>
    <main>
        @yield('content')
    </main>











    @include('website.fixed.footer')



    <!-- <a href="#" class="back-to-top bounce"><i class="las la-arrow-up"></i></a> -->



    <!-- New JS here -->
    <script src="{{ url('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('assets/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/meanmenu.js') }}"></script>
    <script src="{{ url('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ url('assets/js/huicalendar.js') }}"></script>
    <script src="{{ url('assets/js/parallax.min.js') }}"></script>
    <script src="{{ url('assets/js/backToTop.js') }}"></script>
    <script src="{{ url('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ url('assets/js/counterup.min.js') }}"></script>
    <script src="{{ url('assets/js/ajax-form.js') }}"></script>
    <script src="{{ url('assets/js/wow.min.js') }}"></script>
    <script src="{{ url('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/js/main.js') }}"></script>





    <!-- External JavaScripts -->
    <script src="{{ url('assets2/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets2/vendors/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ url('assets2/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets2/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('assets2/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ url('assets2/vendors/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ url('assets2/vendors/counter/waypoints-min.js') }}"></script>
    <script src="{{ url('assets2/vendors/counter/counterup.min.js') }}"></script>
    <script src="{{ url('assets2/vendors/imagesloaded/imagesloaded.js') }}"></script>
    <script src="{{ url('assets2/vendors/masonry/masonry.js') }}"></script>
    <script src="{{ url('assets2/vendors/masonry/filter.js') }}"></script>
    <script src="{{ url('assets2/vendors/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ url('assets2/js/functions.js') }}"></script>
    <script src="{{ url('assets2/js/contact.js') }}"></script>
    <script src="'"></script>
    <!-- Revolution JavaScripts Files -->
    <script src="{{ url('assets2/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ url('assets2/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ url('assets2/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ url('assets2/vendors/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ url('assets2/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ url('assets2/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ url('assets2/vendors/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ url('assets2/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ url('assets2/vendors/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ url('assets2/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ url('assets2/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            var ttrevapi;
            var tpj = jQuery;
            if (tpj("#rev_slider_486_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_486_1");
            } else {
                ttrevapi = tpj("#rev_slider_486_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "assets/vendors/revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "on",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        },

                    },
                    viewPort: {
                        enable: true,
                        outof: "pause",
                        visible_area: "80%",
                        presize: false
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [768, 600, 600, 600],
                    lazyType: "none",
                    parallax: {
                        type: "scroll",
                        origo: "enterpoint",
                        speed: 400,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55],
                        type: "scroll",
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });
    </script>


    <!-- NEW ADMIN  -->


    <script src="{{ url('backend/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ url('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ url('backend/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ url('backend/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ url('backend/plugins/apexchart/chart-data.js') }}"></script>

    <script src="{{ url('backend/js/script.js') }}"></script>
    <script src="https://kit.fontawesome.com/dd47e0ca00.js" crossorigin="anonymous"></script>

    <!-- Code injected by live-server -->
    <script type="text/javascript">
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function() {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() ==
                            "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date()
                                .valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function(msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        } else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
        // ]]>
    </script>
</body>

<!-- Mirrored from templates.hibootstrap.com/ecour/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Dec 2021 14:33:46 GMT -->

</html>
