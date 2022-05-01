<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online class</title>
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

    <!-- New css  -->

    <link rel="shortcut icon" href="{{ url('backend/img/favicon.png') }}">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="{{ url('backend/plugins/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ url('backend/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ url('backend/css/style.css') }}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>

<body>
    <div class="main-wrapper">

        @include('admin.partials.header')
        @include('admin.partials.nav')

        <div class="page-wrapper">
            @yield('content')
        </div>
    </div>



    <!-- new js  -->

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

</html>
