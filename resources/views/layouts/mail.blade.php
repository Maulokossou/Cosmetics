<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    {{--
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet"> --}}
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            width: 100%;
            margin: 0;
            font-family: 'Work Sans', sans-serif;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.8;
            color: rgba(0, 0, 0, 0.4);
            background-color: #f1f1f1
        }

        .page-main {
            width: 100%;
        }

        .page-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .mail-header {
            background: #fff;
        }

        .head-logo {
            text-align: center;
        }

        .head-logo img {
            width: 74px;
            height: 74px;
        }

        .head-banner {
            background: linear-gradient(rgba(0, 0, 0, .7),
                    rgba(0, 0, 0, 0.7));
            width: 100%;
            position: relative;
            padding: 10px 0;
        }

        .head-banner .banner-content {
            text-align: center;
            color: #fff
        }

        .head-banner .banner-content h1,
        {
        margin: 0;
        padding: 0 15px;
        font-size: 2.5rem;
        line-height: 1.4;
        font-weight: bolder;
        text-align: center;
        font-family: "system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, Liberation Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji";
        color: white;
        }

        /* .head-banner h3 {
            margin: 0;
        } */

        .head-banner a {
            color: #fff;
            background-color: #7399df;
            border-color: #7399df;
            border-radius: 5px;
            padding: 1rem 1.5rem;
            display: inline-block;
            text-decoration: none;
            text-align: center;
            margin: 30px 0 0;
            text-transform: capitalize;
            font-weight: 500;
            font-size: 17px;
            line-height: 1.5
        }

        .btn {
            color: #fff;
            background-color: #7399df;
            border-color: #7399df;
            border-radius: 5px;
            padding: 0.7rem 1rem;
            display: inline-block;
            text-decoration: none;
            text-align: center;
            margin: 10px 0 0;
            text-transform: capitalize;
            font-weight: 500;
            font-size: 15px;
            line-height: 1.5
        }

        .email-section {
            padding: 2.5rem;
            background: #fff;
            text-align: center;
        }

        .heading-section {
            padding: 0 30px;
        }

        .heading-section h2 {
            color: #000000;
            font-family: 'Work Sans', sans-serif;
            font-size: 28px;
            margin-top: 0;
            line-height: 1.4;
            font-weight: 400;
        }

        .info-part .info-img {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }

        .info-part .info-title,
        .info-part .info-description {
            text-align: center !important;
        }

        .mail-footer {
            background: rgba(33, 37, 41, 1);
            color: #fff;
            padding: 1.3rem 0;
        }

        .footer-content {
            width: fit-content;
            max-width: -moz-fit-content;
            margin: auto;
        }

        .ft-row a {
            color: inherit;
        }

        .ft-row .copy-right div {
            padding: 10px 0;
        }

        .col-links {
            text-align: center;
        }

        @media screen and (max-width: 425px) {
            .head-banner .banner-content {
                top: 60px;
            }

            .heading-section {
                padding: 0 0 15px;
                text-align: justify;
            }

            .info-part .info-img {
                height: 250px;
            }

            .ft-row {
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div class="page-main">
        <div class="page-container">
            <div class="page-row">
                <div class="mail-header">
                    <div class="head-logo">
                        <img src="data:image/png;base64,{{base64_encode(file_get_contents(public_path('/assets/images/image1.jpeg')))}}"
                             alt="">
                    </div>
                    <div class="head-banner">
                        <div class="banner-content">
                            <h3>VAL BEAUTE</h3>
                            <h1 class="text-center">Explorez notre collection de cosmétiques pour sublimer votre beauté naturelle. Des produits de qualité pour vous mettre en valeur.</h1>
                            {{-- <a href="#">Nous contacter</a> --}}
                        </div>
                    </div>
                </div>


                @yield('content')

                <div class="mail-footer">
                    <div class="footer-content">
                        <div class="ft-row">
                            <div class="copy-right">
                                <div class="text-white">Copyright © VAL BEAUTE</div>
                            </div>
                            <div class="col-links">
                                <a class="link-light small" href="https://ecosynergieafrique.com/">Website</a>
                                <span class="text-white mx-1">·</span>
                                <a class="link-light small"
                                   href="https://ecosynergieafrique.com/contactez-nous">Contact</a>
                                <span class="text-white mx-1">·</span>
                                <a class="link-light small" href="mailto:val@beauté.com"
                                   target="_blank">Email</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>