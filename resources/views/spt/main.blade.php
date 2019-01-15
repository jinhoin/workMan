<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WorkMan</title>
        <style>
            

        </style>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
        <script src="{{ asset('js/app.js') }}"> </script>
        <link rel="stylesheet" href="{{ 'css/style.css' }}">

        <style>
            
        </style>
    </head>
    <body>
            <header class="top-header">
                    <div class="header__top">
                        <div class="header__column">
                            <!-- plane icon -->
                            <i class="fas fa-fighter-jet"></i>
                            <!-- wifi icon -->
                            <i class="fas fa-wifi"></i>
                        </div>
                        <div class="header__column">
                            <span class="header_time">18:30</span>
                        </div>
                        <div class="header__column">
                            <!-- monn icon -->
                            <!-- blue icon -->
                            <i class="fas fa-moon"></i>
                            <i class="fab fa-bluetooth"></i>
                            <span class="header_battery">66%
                                <i class="fas fa-battery-full"></i> 
                            </span>
                        </div>
                    </div> 
            
            
                    <div class="header__bottom">
                            <div class="header__column">
                                <span class="header_text">Manage</span>
                            </div>
                            <div class="header__column">
                                <span class="header_text">Friends 
                                    <span class="header_number">1</span>
                                </span>
                            </div>
                            <div class="header__column">
                                <i class="fas fa-cog"></i>
                                <span class="friends_profile-name">Hoin</span>
                            </div>
                    </div>
            </header>
           

            <div class="content">
                <div class="title m-b-md">
                    Hello, WorkMan
                </div>
             @if (Route::has('login'))
                <div class="links">
                    @auth
                        <li>
                        <a href="{{ url('/home') }}">Home</a>
                        </li>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                    <br>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif    
                


            </div>

            <nav class="tab-bar">
                    <a href="index.html" class="tab-bar__tab tab-bar__tab--seleted">
                        <i class="fa fa-user"> </i>
                        <span class="tab-bar__title">Friends</span>
                     
                    </a>
                    <a href="chats.html" class="tab-bar__tab">
                        <i class="fa fa-comment"></i>
                        <span class="tab-bar__title">Chats</span>
                    </a>
                    <a href="find.html" class="tab-bar__tab">
                        <i class="fa fa-search"></i>
                        <span class="tab-bar__title">Find</span>
                    </a>
                    <a href="more.html" class="tab-bar__tab">
                        <i class="fa fa-ellipsis-h"></i>
                        <span class="tab-bar__title">More</span>
                    </a>
        
            </nav>
                <div class="bigScreenText">
                    <span>Please make your screen smaller</span>
                </div>        

    </body>
</html>
