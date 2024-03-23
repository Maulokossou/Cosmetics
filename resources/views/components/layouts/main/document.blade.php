<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- REQUIRE META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- TEMPLATE META -->
    <meta name="keywords" content="">

    <style>
        /*! CSS Used from: http://localhost:8000/main/vendor/bootstrap_pdf/css/bootstrap.min.css */

        /* :root {
            --h1size: 50px;
            --h2size: 40px;
            --h3size: 24px;
            --h4size: 20px;
            --h5size: 18px;
            --h6size: 16px;
            --bodysize: 16px;
            --h1height: 58px;
            --h2height: 48px;
            --h3height: 32px;
            --h4height: 28px;
            --h5height: 26px;
            --h6height: 26px;
            --bodyheight: 26px;
            --pfamily: 'Rubik', sans-serif;
            --red: #ff3838;
            --gray: #777777;
            --text: #555555;
            --blue: #1494a9;
            --white: #ffffff;
            --chalk: #f5f5f5;
            --green: #11b76b;
            --purple: #b12fad;
            --orange: #e86121;
            --yellow: #ffab10;
            --body: #f5f6f7;
            --border: #e8e8e8;
            --heading: #39404a;
            --primary: #2d58a4;
            --primary-chalk: #dae8ff;
            --sub-heading: #565765;
            --green-chalk: #ddffd5;
            --green-dark: #072f17;
            --gray-chalk: #cccccc;
            --intro-bg: #f8fffa;
            --facebook: #3b5998;
            --linkedin: #0e76a8;
            --twitter: #00acee;
            --google: #E60023;
            --instagram: #F77737;
            --primary-bshadow: 0px 15px 35px 0px rgba(0, 0, 0, 0.1);
            --primary-tshadow: 2px 3px 8px rgba(0, 0, 0, 0.1);
        } */

        a {
            background-color: transparent;
        }

        a:active,
        a:hover {
            outline: 0;
        }

        small {
            font-size: 80%;
        }

        img {
            border: 0;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 0;
        }

        .invoice-part {
            background: #f5f6f7;
        }

        @media print {

            *,
            :after,
            :before {
                color: #000 !important;
                background: 0 0 !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }

            a,
            a:visited {
                text-decoration: underline;
            }

            a[href]:after {
                content: " ("attr(href) ")";
            }

            thead {
                display: table-header-group;
            }

            img,
            tr {
                page-break-inside: avoid;
            }

            img {
                max-width: 100% !important;
            }

            p {
                orphans: 3;
                widows: 3;
            }
        }

        a {
            color: #337ab7;
            text-decoration: none;
        }

        a:focus,
        a:hover {
            color: #23527c;
            text-decoration: underline;
        }

        a:focus {
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }

        img {
            vertical-align: middle;
        }

        h4,
        h6 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit;
        }

        h6 small {
            font-weight: 400;
            line-height: 1;
            color: #777;
        }

        h4,
        h6 {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        h6 small {
            font-size: 75%;
        }

        h4 {
            font-size: 18px;
        }

        h6 {
            font-size: 12px;
        }

        p {
            margin: 0 0 10px;
        }

        small {
            font-size: 85%;
        }

        ul {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width:768px) {
            .container {
                width: 750px;
            }
        }

        @media (min-width:992px) {
            .container {
                width: 970px;
            }
        }

        @media (min-width:1200px) {
            .container {
                width: 1170px;
            }
        }

        .row {
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-lg-12,
        .col-lg-6 {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        @media (min-width:1200px) {

            .col-lg-12,
            .col-lg-6 {
                float: left;
            }

            .col-lg-12 {
                width: 100%;
            }

            .col-lg-6 {
                width: 50%;
            }
        }

        table {
            background-color: transparent;
        }

        th {
            text-align: left;
        }

        .alert-info {
            color: #31708f;
            background-color: #d9edf7;
            border-color: #bce8f1;
        }

        .container:after,
        .container:before,
        .row:after,
        .row:before {
            display: table;
            content: " ";
        }

        .container:after,
        .row:after {
            clear: both;
        }

        /*! CSS Used from: http://localhost:8000/main/css/main.css */
        * {
            margin: 0px;
            padding: 0px;
            outline: 0px;
        }

        img {
            vertical-align: middle;
        }

        a {
            text-decoration: none;
            display: inline-block;
            color: #565765;
        }

        a:hover {
            text-decoration: none;
        }

        ul {
            padding: 0px;
            list-style: none;
        }

        h4,
        h6,
        p,
        ul,
        li {
            margin-bottom: 0px;
        }

        h4,
        h6 {
            font-weight: 500;
            color: #39404a;
        }

        h4 {
            font-size: 20px;
            line-height: 28px;
        }

        h6 {
            font-size: 16px;
            line-height: 26px;
        }

        .inner-section {
            margin-bottom: 50px;
        }

        @media (max-width: 767px) {
            .inner-section {
                margin-bottom: 60px;
            }
        }

        @media (min-width: 768px) and (max-width: 1199px) {
            .inner-section {
                margin-bottom: 80px;
            }
        }

        .alert-info {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px 20px;
            border-radius: 3px;
            background: #ffffff;
            border-top: 3px solid #2d58a4;
        }

        .alert-info p {
            font-weight: 500;
            color: #2d58a4;
        }

       .table-scroll {
        padding: 35px;
        border-radius: 8px;
        background: #ffffff;
        }

        .table-list {
            width: 100%;
        }

        thead tr {
            background: #2d58a4;
        }

        thead tr th {
            font-size: 17px;
            font-weight: 500;
            white-space: nowrap;
            text-align: center;
            text-transform: capitalize;
            padding: 12px 20px;
            color: #ffffff;
            border-right: 1px solid #e8e8e8;
        }

        thead tr th:first-child {
            border-radius: 6px 0px 0px 6px;
        }

        thead tr th:last-child {
            border-right: none;
            border-radius: 0px 6px 6px 0px;
        }

        tbody tr {
            border-bottom: 1px solid #e8e8e8;
        }

        tbody tr td {
            padding: 12px 20px;
            text-align: center;
            border-right: 1px solid #e8e8e8;
        }

        tbody tr td:last-child {
            border-right: none;
        }

        .table-name {
            white-space: nowrap;
            text-transform: capitalize;
        }

        .table-image img {
            width: auto;
            height: 100px;
        }

        .table-price h6 {
            white-space: nowrap;
        }

        @media (max-width: 1199px) {
            .table-scroll {
                /* overflow-x: scroll; */
            }
        }

        .account-card {
            margin-bottom: 30px;
            border-radius: 8px;
            padding: 0px 30px 30px;
            background: #ffffff;
        }

        .account-title {
            padding: 18px 0px;
            margin-bottom: 25px;
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            border-bottom: 1px solid #e8e8e8;
        }

        .account-title::before {
            position: absolute;
            content: "";
            bottom: -2px;
            left: 0px;
            width: 50px;
            height: 2px;
            background: #2d58a4;
        }

        .account-title h4 {
            text-transform: capitalize;
        }

        @media (max-width: 575px) {
            .account-card {
                padding: 0px 15px 15px;
            }
        }

        /*! CSS Used from: http://localhost:8000/main/css/user-auth.css */
        .user-form-logo {
            text-align: center;
            margin-bottom: 25px;
        }

        .user-form-logo img {
            width: 200px;
        }
    </style>

    {{--
    <link rel="stylesheet" href="{{ URL::asset('main/vendor/bootstrap_pdf/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('main/css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('main/css/user-auth.css') }}"> --}}
</head>

<body>

    {{ $slot }}

</body>

</html>