<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    {{-- CSS  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- JS  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        /* Image Zoom In  */
        .img-wrapper {
        width: 400px;
        height: 400px;
        overflow: hidden;
        }

        .inner-img {
        transition: 0.3s;
        }

        .inner-img:hover {
        transform: scale(1.1);
        }

        /* Other styling elements, that are not necessary for the example */

        .img-wrapper {
        display: inline-block;
        box-sizing: border-box;
        /* //border: 1px solid #000; */
        }

        /* Text Underline animate  */

        element {
            display: inline-block;
            padding-bottom: 8px;
        }
        .element:after {
            content: '';
            display: block;
            margin: auto;
            height: 2px;
            animation: underline 2s infinite;
        }

        @keyframes underline {
            0% { width: 0%; background-color: black;}
            100% {width: 100%; background-color: transparent;}
            }

            .hoverelement > a{
            position: relative;
            color: #000;
            text-decoration: none;
            }

            .hoverelement > a:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 1px;
            bottom: 0;
            left: 0;
            margin-bottom: -2px;
            background-color: #000;
            visibility: hidden;
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s;
            }

            .hoverelement > a:hover:before {
            visibility: visible;
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
            }

            .sliding {
                text-decoration: none;
                display: inline;
                border-bottom: 2px solid transparent;
                width: 0px;
                transition: 1s linear;
                white-space: nowrap;
                padding-bottom: 2px;
            }
            .sliding:hover {
                border-bottom: 2px solid rgba(0, 0, 0, 0.671);
                width: 100%;
            }

            /* Box Animated  */

            .gradient-border {
                --borderWidth: 3px;
                background: #1D1F20;
                position: relative;
                border-radius: var(--borderWidth);
                }
                .gradient-border:after {
                content: '';
                position: absolute;
                top: calc(-1 * var(--borderWidth));
                left: calc(-1 * var(--borderWidth));
                height: calc(100% + var(--borderWidth) * 2);
                width: calc(100% + var(--borderWidth) * 2);
                background: linear-gradient(60deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82);
                border-radius: calc(2 * var(--borderWidth));
                z-index: -1;
                animation: animatedgradient 3s ease alternate infinite;
                background-size: 300% 300%;
                }


                @keyframes animatedgradient {
                    0% {
                        background-position: 0% 50%;
                    }
                    50% {
                        background-position: 100% 50%;
                    }
                    100% {
                        background-position: 0% 50%;
                    }
                }

    </style>
  </head>
  <body>

    <!-- Navbar  -->
        @include('frontend.layouts.header')

        @yield('content')

       @include('frontend.layouts.footer')

  </body>
</html>
