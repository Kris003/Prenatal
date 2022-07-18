<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('js_library/slick-1.8.1/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('js_library/slick-1.8.1/slick/slick-theme.css') }}" rel="stylesheet">
</head>

<body>



    <div class="container">
        @yield('content')
    </div>


    <script src="{{ asset('js/app.js') }}"> </script>
    <script src="{{ asset('js_library/jquery-3.6.0.min.js') }}"> </script>
    <script src="{{ asset('js_library/slick-1.8.1/slick/slick.js') }}"> </script>

    <!-- SLick Script -->
    <script>
    $(document).ready(function() {
        $('.my-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            adaptiveHeight: true,
            responsive: [{
                    breakpoint: 1537,
                    settings: {
                        slidesToShow: 4,
                        dots: false,
                        arrows: false,
                        rows: 2,
                        variableWidth: true,
                    }
                },

                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        arrows: true,
                        dots: true,
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1,
                        arrows: true,
                        dots: true,

                    }
                }
            ]
        });
    });
    </script>

    <!-- End Slick Script -->
</body>

</html>