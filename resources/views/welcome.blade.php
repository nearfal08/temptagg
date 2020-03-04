<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


        <!-- Styles -->
        <style>
            html, body {
                color: #636b6f; 
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
                height: 10000px;
                background-color: #ffffff;
                /* background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 100 60'%3E%3Cg %3E%3Crect fill='%23ffffff' width='11' height='11'/%3E%3Crect fill='%23fefeff' x='10' width='11' height='11'/%3E%3Crect fill='%23fdfdff' y='10' width='11' height='11'/%3E%3Crect fill='%23fcfdff' x='20' width='11' height='11'/%3E%3Crect fill='%23fbfcff' x='10' y='10' width='11' height='11'/%3E%3Crect fill='%23fafbff' y='20' width='11' height='11'/%3E%3Crect fill='%23f9faff' x='30' width='11' height='11'/%3E%3Crect fill='%23f8f9ff' x='20' y='10' width='11' height='11'/%3E%3Crect fill='%23f7f8ff' x='10' y='20' width='11' height='11'/%3E%3Crect fill='%23f6f8ff' y='30' width='11' height='11'/%3E%3Crect fill='%23f6f7ff' x='40' width='11' height='11'/%3E%3Crect fill='%23f5f6ff' x='30' y='10' width='11' height='11'/%3E%3Crect fill='%23f4f5ff' x='20' y='20' width='11' height='11'/%3E%3Crect fill='%23f3f4ff' x='10' y='30' width='11' height='11'/%3E%3Crect fill='%23f2f4ff' y='40' width='11' height='11'/%3E%3Crect fill='%23f1f3ff' x='50' width='11' height='11'/%3E%3Crect fill='%23f0f2ff' x='40' y='10' width='11' height='11'/%3E%3Crect fill='%23eff1ff' x='30' y='20' width='11' height='11'/%3E%3Crect fill='%23eef0ff' x='20' y='30' width='11' height='11'/%3E%3Crect fill='%23edf0ff' x='10' y='40' width='11' height='11'/%3E%3Crect fill='%23ecefff' y='50' width='11' height='11'/%3E%3Crect fill='%23ebeeff' x='60' width='11' height='11'/%3E%3Crect fill='%23eaedff' x='50' y='10' width='11' height='11'/%3E%3Crect fill='%23e9ecff' x='40' y='20' width='11' height='11'/%3E%3Crect fill='%23e8ecff' x='30' y='30' width='11' height='11'/%3E%3Crect fill='%23e7ebff' x='20' y='40' width='11' height='11'/%3E%3Crect fill='%23e6eaff' x='10' y='50' width='11' height='11'/%3E%3Crect fill='%23e5e9ff' x='70' width='11' height='11'/%3E%3Crect fill='%23e4e8ff' x='60' y='10' width='11' height='11'/%3E%3Crect fill='%23e3e8ff' x='50' y='20' width='11' height='11'/%3E%3Crect fill='%23e2e7ff' x='40' y='30' width='11' height='11'/%3E%3Crect fill='%23e1e6ff' x='30' y='40' width='11' height='11'/%3E%3Crect fill='%23e0e5ff' x='20' y='50' width='11' height='11'/%3E%3Crect fill='%23dfe4ff' x='80' width='11' height='11'/%3E%3Crect fill='%23dee4ff' x='70' y='10' width='11' height='11'/%3E%3Crect fill='%23dde3ff' x='60' y='20' width='11' height='11'/%3E%3Crect fill='%23dce2ff' x='50' y='30' width='11' height='11'/%3E%3Crect fill='%23dbe1ff' x='40' y='40' width='11' height='11'/%3E%3Crect fill='%23dae0ff' x='30' y='50' width='11' height='11'/%3E%3Crect fill='%23d9e0ff' x='90' width='11' height='11'/%3E%3Crect fill='%23d8dfff' x='80' y='10' width='11' height='11'/%3E%3Crect fill='%23d7deff' x='70' y='20' width='11' height='11'/%3E%3Crect fill='%23d6ddff' x='60' y='30' width='11' height='11'/%3E%3Crect fill='%23d5ddff' x='50' y='40' width='11' height='11'/%3E%3Crect fill='%23d4dcff' x='40' y='50' width='11' height='11'/%3E%3Crect fill='%23d3dbff' x='90' y='10' width='11' height='11'/%3E%3Crect fill='%23d2daff' x='80' y='20' width='11' height='11'/%3E%3Crect fill='%23d1d9ff' x='70' y='30' width='11' height='11'/%3E%3Crect fill='%23d0d9ff' x='60' y='40' width='11' height='11'/%3E%3Crect fill='%23cfd8ff' x='50' y='50' width='11' height='11'/%3E%3Crect fill='%23ced7ff' x='90' y='20' width='11' height='11'/%3E%3Crect fill='%23cdd6ff' x='80' y='30' width='11' height='11'/%3E%3Crect fill='%23ccd5ff' x='70' y='40' width='11' height='11'/%3E%3Crect fill='%23cbd5ff' x='60' y='50' width='11' height='11'/%3E%3Crect fill='%23cad4ff' x='90' y='30' width='11' height='11'/%3E%3Crect fill='%23c9d3ff' x='80' y='40' width='11' height='11'/%3E%3Crect fill='%23c8d2ff' x='70' y='50' width='11' height='11'/%3E%3Crect fill='%23c7d2ff' x='90' y='40' width='11' height='11'/%3E%3Crect fill='%23c6d1ff' x='80' y='50' width='11' height='11'/%3E%3Crect fill='%23c5d0ff' x='90' y='50' width='11' height='11'/%3E%3C/g%3E%3C/svg%3E"); */
                /* background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 100 60'%3E%3Cg %3E%3Crect fill='%23ffffff' width='11' height='11'/%3E%3Crect fill='%23fdfdff' x='10' width='11' height='11'/%3E%3Crect fill='%23fcfcff' y='10' width='11' height='11'/%3E%3Crect fill='%23fafaff' x='20' width='11' height='11'/%3E%3Crect fill='%23f8f8ff' x='10' y='10' width='11' height='11'/%3E%3Crect fill='%23f6f7ff' y='20' width='11' height='11'/%3E%3Crect fill='%23f4f5ff' x='30' width='11' height='11'/%3E%3Crect fill='%23f3f3ff' x='20' y='10' width='11' height='11'/%3E%3Crect fill='%23f1f2ff' x='10' y='20' width='11' height='11'/%3E%3Crect fill='%23eff0ff' y='30' width='11' height='11'/%3E%3Crect fill='%23edefff' x='40' width='11' height='11'/%3E%3Crect fill='%23ecedff' x='30' y='10' width='11' height='11'/%3E%3Crect fill='%23eaebff' x='20' y='20' width='11' height='11'/%3E%3Crect fill='%23e8eaff' x='10' y='30' width='11' height='11'/%3E%3Crect fill='%23e6e8ff' y='40' width='11' height='11'/%3E%3Crect fill='%23e4e6ff' x='50' width='11' height='11'/%3E%3Crect fill='%23e3e5ff' x='40' y='10' width='11' height='11'/%3E%3Crect fill='%23e1e3ff' x='30' y='20' width='11' height='11'/%3E%3Crect fill='%23dfe2ff' x='20' y='30' width='11' height='11'/%3E%3Crect fill='%23dde0ff' x='10' y='40' width='11' height='11'/%3E%3Crect fill='%23dbdeff' y='50' width='11' height='11'/%3E%3Crect fill='%23daddff' x='60' width='11' height='11'/%3E%3Crect fill='%23d8dbff' x='50' y='10' width='11' height='11'/%3E%3Crect fill='%23d6daff' x='40' y='20' width='11' height='11'/%3E%3Crect fill='%23d4d8ff' x='30' y='30' width='11' height='11'/%3E%3Crect fill='%23d2d6ff' x='20' y='40' width='11' height='11'/%3E%3Crect fill='%23d0d5ff' x='10' y='50' width='11' height='11'/%3E%3Crect fill='%23ced3ff' x='70' width='11' height='11'/%3E%3Crect fill='%23ccd2ff' x='60' y='10' width='11' height='11'/%3E%3Crect fill='%23cbd0ff' x='50' y='20' width='11' height='11'/%3E%3Crect fill='%23c9ceff' x='40' y='30' width='11' height='11'/%3E%3Crect fill='%23c7cdff' x='30' y='40' width='11' height='11'/%3E%3Crect fill='%23c5cbff' x='20' y='50' width='11' height='11'/%3E%3Crect fill='%23c3caff' x='80' width='11' height='11'/%3E%3Crect fill='%23c1c8ff' x='70' y='10' width='11' height='11'/%3E%3Crect fill='%23bfc7ff' x='60' y='20' width='11' height='11'/%3E%3Crect fill='%23bdc5ff' x='50' y='30' width='11' height='11'/%3E%3Crect fill='%23bbc4ff' x='40' y='40' width='11' height='11'/%3E%3Crect fill='%23b9c2ff' x='30' y='50' width='11' height='11'/%3E%3Crect fill='%23b7c0ff' x='90' width='11' height='11'/%3E%3Crect fill='%23b5bfff' x='80' y='10' width='11' height='11'/%3E%3Crect fill='%23b3bdff' x='70' y='20' width='11' height='11'/%3E%3Crect fill='%23b1bcff' x='60' y='30' width='11' height='11'/%3E%3Crect fill='%23afbaff' x='50' y='40' width='11' height='11'/%3E%3Crect fill='%23adb9ff' x='40' y='50' width='11' height='11'/%3E%3Crect fill='%23abb7ff' x='90' y='10' width='11' height='11'/%3E%3Crect fill='%23a9b6ff' x='80' y='20' width='11' height='11'/%3E%3Crect fill='%23a7b4ff' x='70' y='30' width='11' height='11'/%3E%3Crect fill='%23a5b3ff' x='60' y='40' width='11' height='11'/%3E%3Crect fill='%23a2b1ff' x='50' y='50' width='11' height='11'/%3E%3Crect fill='%23a0b0ff' x='90' y='20' width='11' height='11'/%3E%3Crect fill='%239eaeff' x='80' y='30' width='11' height='11'/%3E%3Crect fill='%239cacff' x='70' y='40' width='11' height='11'/%3E%3Crect fill='%239aabff' x='60' y='50' width='11' height='11'/%3E%3Crect fill='%2398a9ff' x='90' y='30' width='11' height='11'/%3E%3Crect fill='%2395a8ff' x='80' y='40' width='11' height='11'/%3E%3Crect fill='%2393a6ff' x='70' y='50' width='11' height='11'/%3E%3Crect fill='%2391a5ff' x='90' y='40' width='11' height='11'/%3E%3Crect fill='%238ea3ff' x='80' y='50' width='11' height='11'/%3E%3Crect fill='%238ca2ff' x='90' y='50' width='11' height='11'/%3E%3C/g%3E%3C/svg%3E"); */
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 100 60'%3E%3Cg %3E%3Crect fill='%23ffffff' width='11' height='11'/%3E%3Crect fill='%23fdfeff' x='10' width='11' height='11'/%3E%3Crect fill='%23fafcff' y='10' width='11' height='11'/%3E%3Crect fill='%23f8fbff' x='20' width='11' height='11'/%3E%3Crect fill='%23f6f9fe' x='10' y='10' width='11' height='11'/%3E%3Crect fill='%23f3f8fe' y='20' width='11' height='11'/%3E%3Crect fill='%23f1f7fe' x='30' width='11' height='11'/%3E%3Crect fill='%23eff5fe' x='20' y='10' width='11' height='11'/%3E%3Crect fill='%23ecf4fe' x='10' y='20' width='11' height='11'/%3E%3Crect fill='%23eaf2fe' y='30' width='11' height='11'/%3E%3Crect fill='%23e8f1fe' x='40' width='11' height='11'/%3E%3Crect fill='%23e5f0fd' x='30' y='10' width='11' height='11'/%3E%3Crect fill='%23e3eefd' x='20' y='20' width='11' height='11'/%3E%3Crect fill='%23e1edfd' x='10' y='30' width='11' height='11'/%3E%3Crect fill='%23deebfd' y='40' width='11' height='11'/%3E%3Crect fill='%23dceafd' x='50' width='11' height='11'/%3E%3Crect fill='%23d9e9fd' x='40' y='10' width='11' height='11'/%3E%3Crect fill='%23d7e7fd' x='30' y='20' width='11' height='11'/%3E%3Crect fill='%23d5e6fc' x='20' y='30' width='11' height='11'/%3E%3Crect fill='%23d2e4fc' x='10' y='40' width='11' height='11'/%3E%3Crect fill='%23d0e3fc' y='50' width='11' height='11'/%3E%3Crect fill='%23cde2fc' x='60' width='11' height='11'/%3E%3Crect fill='%23cbe0fc' x='50' y='10' width='11' height='11'/%3E%3Crect fill='%23c8dffc' x='40' y='20' width='11' height='11'/%3E%3Crect fill='%23c6defb' x='30' y='30' width='11' height='11'/%3E%3Crect fill='%23c3dcfb' x='20' y='40' width='11' height='11'/%3E%3Crect fill='%23c1dbfb' x='10' y='50' width='11' height='11'/%3E%3Crect fill='%23bed9fb' x='70' width='11' height='11'/%3E%3Crect fill='%23bcd8fb' x='60' y='10' width='11' height='11'/%3E%3Crect fill='%23b9d7fb' x='50' y='20' width='11' height='11'/%3E%3Crect fill='%23b7d5fa' x='40' y='30' width='11' height='11'/%3E%3Crect fill='%23b4d4fa' x='30' y='40' width='11' height='11'/%3E%3Crect fill='%23b2d3fa' x='20' y='50' width='11' height='11'/%3E%3Crect fill='%23afd1fa' x='80' width='11' height='11'/%3E%3Crect fill='%23acd0fa' x='70' y='10' width='11' height='11'/%3E%3Crect fill='%23aacffa' x='60' y='20' width='11' height='11'/%3E%3Crect fill='%23a7cdf9' x='50' y='30' width='11' height='11'/%3E%3Crect fill='%23a4ccf9' x='40' y='40' width='11' height='11'/%3E%3Crect fill='%23a2cbf9' x='30' y='50' width='11' height='11'/%3E%3Crect fill='%239fc9f9' x='90' width='11' height='11'/%3E%3Crect fill='%239cc8f9' x='80' y='10' width='11' height='11'/%3E%3Crect fill='%2399c7f9' x='70' y='20' width='11' height='11'/%3E%3Crect fill='%2397c5f8' x='60' y='30' width='11' height='11'/%3E%3Crect fill='%2394c4f8' x='50' y='40' width='11' height='11'/%3E%3Crect fill='%2391c3f8' x='40' y='50' width='11' height='11'/%3E%3Crect fill='%238ec1f8' x='90' y='10' width='11' height='11'/%3E%3Crect fill='%238bc0f8' x='80' y='20' width='11' height='11'/%3E%3Crect fill='%2388bff7' x='70' y='30' width='11' height='11'/%3E%3Crect fill='%2385bdf7' x='60' y='40' width='11' height='11'/%3E%3Crect fill='%2382bcf7' x='50' y='50' width='11' height='11'/%3E%3Crect fill='%237fbbf7' x='90' y='20' width='11' height='11'/%3E%3Crect fill='%237bb9f7' x='80' y='30' width='11' height='11'/%3E%3Crect fill='%2378b8f6' x='70' y='40' width='11' height='11'/%3E%3Crect fill='%2375b7f6' x='60' y='50' width='11' height='11'/%3E%3Crect fill='%2371b5f6' x='90' y='30' width='11' height='11'/%3E%3Crect fill='%236eb4f6' x='80' y='40' width='11' height='11'/%3E%3Crect fill='%236ab3f6' x='70' y='50' width='11' height='11'/%3E%3Crect fill='%2367b2f5' x='90' y='40' width='11' height='11'/%3E%3Crect fill='%2363b0f5' x='80' y='50' width='11' height='11'/%3E%3Crect fill='%235faff5' x='90' y='50' width='11' height='11'/%3E%3C/g%3E%3C/svg%3E");
                background-attachment: fixed;
                background-size: cover;
                scroll-behavior: smooth;
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
                left: 70px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .main-card {
            }

            .title {
                font-size: 84px;
            }

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
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                color: #60b0f4;
                background-color:white;
                border-top: 2px solid black;
                border-left: 2px solid black;
                border-right: 2px solid black;
            }

            .btn-learn {
                background-color: #CAADFF;
                border: 1px solid black; 
            }
            .btn-learn:hover {
                background-color: #B69CE6; 
            }

            .btn-start {
                background-color: #F5BB5F;
                color: black;
                /* background-color: #F77E79; 
                color: white;*/
                border: 2px solid black;
                width: 200px;
                padding: 10px;
                font-size: 1.4em;
                display: block;
                position: relative;
                left: calc(50% - 100px);
                bottom: -48px;
            }
            .btn-start:hover {
                background-color: #569DDB;
                color: white;
            }
            .btn.focus, .btn:focus {
                outline: 0;
                box-shadow: none;
            }
            .section {
                padding: 20px;
                /* background-color: rgb(255,255,255, .6);  */
                background-color: rgb(0,0,0, .5); 
                border: 2px solid black;
                color: white;
                border-radius: 10px;
            }
            .get-started-wrapper {
                color: white;
                padding: 20px;
                /* background-color: rgb(255,255,255, .6);  */
                background-color: rgb(0,0,0, .5); 
                border-bottom: 2px solid black;
                border-left: 2px solid black;
                border-right: 2px solid black;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
            }
            .get-started-wrapper:after {
                content: '';
                display: block;
                position: absolute;
                bottom: .3em;
                left: calc(50% - 1px);
                width: 2px;
                height: 12.5em;
                background: rgba(0,0,0,1);
            }
            .subheadline {
                margin-bottom: -1rem;
            }
        </style>
    </head>
    <body>
        <div id="background-image"></div>
        <div class="flex-center position-ref full-height" id="main">
            @if (Route::has('login'))
                <div class="top-right links">
                    {{-- @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth --}}
                </div>
            @endif

            <div class="content main-card">
                <div class="title m-b-md">
                    Taggs
                </div>
                <div class="get-started-wrapper">
                    <h2 class="headline">The Best Way to Create Name Tags</h2>
                    <p class="subheadline">Simple, easy to create, customized name tags for pretty much anything.</p>
                    {{-- <a class="btn btn-learn" href="#" role="button">Learn More</a> --}}
                    <a class="btn btn-start" href="#get-started" role="button">Get Started</a>
                </div>
                {{-- <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> --}}
            </div>
        </div>
        <div class="container section" id="get-started">
            <div class="row">
                <div class="col">
                    <p>Testing Testing</p>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
