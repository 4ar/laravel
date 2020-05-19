<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
        <script src="js/app.js" charset="utf-8"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
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
            nav > a,
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .menu {
                display: flex;
                justify-content: flex-end;
                margin: 20px 10px;
             }
             .Articles {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
             }   
             .Article {
                width: calc(100%/3);
            }

            .Article > .title {
                font-size: 4.75em;
                color: black;
            }
        </style>

     
		    </head>
            <body>
            <nav class="menu">
                <a href="/">Главная</a> 
                <a href="/news">Статьи</a>
                <a href="/about">О нас</a> 
                <a href="/admin">Добавить статью</a> 
            </nav>