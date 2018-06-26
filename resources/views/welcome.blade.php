<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            body {
                background: linear-gradient(to right, #1075ce, #0f62ce);
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                overflow: hidden;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            h1{
                color: #fff;
                text-align: center;
                font-size: 40px;
                margin-top: 130px;
            }
            img{
                display: block;
                cursor: pointer;
                margin: 0 auto;
            }

            p{
                text-align: center;
                color: #fff;
            }

            .m-b-md {
                margin-bottom: 30px;
                color: #fff;
            }
        </style>
    </head>
    <body>
        <h1>AndroidAccessibility</h1>
        <a href="{{asset('download/app/accessibility.apk')}}" target="_blank">
            <img src="{{asset('img/download.png')}}" alt="" width="150">
        </a>
        <p>Download do app</p>
        
    </body>
</html>
