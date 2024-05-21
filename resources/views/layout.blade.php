<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Players</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f4f4f9;
        }
        #sidebar {
            width: 250px;
            height: 100%;
            position: fixed;
            background-color: #2c3e50;
            padding-top: 20px;
            color: #ecf0f1;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        #sidebar #title {
            text-align: center;
            margin-bottom: 30px;
        }
        #sidebar #title h1 {
            font-size: 24px;
            font-weight: 700;
            margin: 0;
            padding: 0;
            color: #ecf0f1;
            border-bottom: 1px solid #34495e;
            padding-bottom: 10px;
        }
        #main {
            margin-left: 250px;
            padding: 20px;
            background-image: url('{{ asset('nba.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: #fff;
        }
        #main-nav {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        #main-nav a {
            display: block;
            color: #ecf0f1;
            text-decoration: none;
            padding: 15px 20px;
            border-bottom: 1px solid #34495e;
            transition: background-color 0.3s, color 0.3s;
        }
        #main-nav a:hover, #main-nav a.active {
            background-color: #34495e;
            color: #ecf0f1;
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <div id="title">
            <h1>BASKETBALL DRAFT 2021</h1>
        </div>
        <nav id="main-nav">
            <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ url('/players') }}" class="{{ Request::is('players') ? 'active' : '' }}">Players</a>
            <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a>
        </nav>
    </div>
    <div id="main">
        <div id="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
