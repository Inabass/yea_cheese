<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> yea_cheese login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 24px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
			
           <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
			-->
			
            <div class="content">
                <div class="title m-b-md">login!!</div>

                <div class="links">  
					
					<!-- <p align="right">mail<input type="text" name="mail" id="mail" class="form-control"></p>
				    <p align="right">pass<input type="password" name="password" id="password" class="form-control"></p>
					 <button type="submit" class="btn btn-default">
				<i class="fa fa-btn fa-plus"></i>login
			    </button>
					-->
					
					<form action="/sigin" method="post">
    					<div>mail<input type="text" name="user_name"></div>
    					<div>pass<input type="password" name="user_password"></div>
    					<div><input type="hidden" name="_token" value="{{csrf_token()}}"></div>
    					<div><input type="submit" value="送信"></div>
					</form>
					
                </div>
            </div>
        </div>
    </body>
</html>
