<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Egresados Utp</title>
    <meta name="description" content="A HTML5/CSS3 template made exclusively for themeforest by dougborton" />
    <meta name="keywords" content="html5 template, css3, one page, animations, agency, portfolio, web design" />
    <meta name="author" content="dougborton" />
    <!-- Bootstrap -->
    <script src="js/modernizr.custom.js"></script>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/estilosinicio.css">


    <style>

        body {
            /*margin: auto;
            background-image: url('fondo.jpg');*/

            font-size: 2rem;
            font-family: "Open Sans", sans-serif;
            /*/*color: #0f222b;*/
            /*background-color: #0f222b;*/
            /*background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('../img/bgregistro.jpg') no-repeat center center;*/
        }

        /*@media screen and (min-width: 800px) {
            .logoimg{
                margin-left: -5px;
                margin-top: -50px;
            }

            .logoimg{
                width: 100%;
                height: auto;
            }


            .hero {
                position: relative;
                padding: 60px 0 60px 0;


                background-size: cover;
                color: #fff;
            }
            .hero h1 {
                margin: 200px 0 45px 0;
                font-weight: 300;
                font-size: 25px;
            }
            .hero h1 span {
                display: inline-block;
                color: #a1a9b0;
            }
            #home {
                width: 100%;
                height: 100%;
            }
            .hero {
                width: 100%;
                height: 100%;
            }
            header i {
                margin-left: 5px
            }

            .panel-login {
                border-color: #ccc;
                -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
                -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
                box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
            }
            .panel-login>.panel-heading {
                color: #00415d;
                background-color: #fff;
                border-color: #fff;
                text-align:center;
            }
            .panel-login>.panel-heading a{
                text-decoration: none;
                color: #666;
                font-weight: bold;
                font-size: 15px;
                -webkit-transition: all 0.1s linear;
                -moz-transition: all 0.1s linear;
                transition: all 0.1s linear;
            }
            .panel-login>.panel-heading a.active{
                color: #67afa6;
                font-size: 18px;
            }
            .panel-login>.panel-heading hr{
                margin-top: 10px;
                margin-bottom: 0px;
                clear: both;
                border: 0;
                height: 1px;
                background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
                background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
                background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
                background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
            }
            .panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
                height: 45px;
                border: 1px solid #ddd;
                font-size: 16px;
                -webkit-transition: all 0.1s linear;
                -moz-transition: all 0.1s linear;
                transition: all 0.1s linear;
            }
            .panel-login input:hover,
            .panel-login input:focus {
                outline:none;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
                border-color: #ccc;
            }
            .btn-login {
                background-color: #0F222B;
                outline: none;
                color: #fff;
                font-size: 14px;
                height: auto;
                font-weight: normal;
                padding: 14px 0;
                text-transform: uppercase;
                border-color: #59B2E6;
            }
            .btn-login:hover,
            .btn-login:focus {
                color: #fff;
                background-color: #53A3CD;
                border-color: #53A3CD;
            }
            .forgot-password {
                text-decoration: underline;
                color: #888;
            }
            .forgot-password:hover,
            .forgot-password:focus {
                text-decoration: underline;
                color: #666;
            }

            .btn-register {
                background-color: #1CB94E;
                outline: none;
                color: #fff;
                font-size: 14px;
                height: auto;
                font-weight: normal;
                padding: 14px 0;
                text-transform: uppercase;
                border-color: #1CB94A;
            }
            .btn-register:hover,
            .btn-register:focus {
                color: #fff;
                background-color: #1CA347;
                border-color: #1CA347;
            }
        }

        .logoimg{
            width: 100%;
            height: auto;
        }
*/


    </style>
</head>

<body>
<div>
    <h1>
        Bienvenido {{auth()->user()->nombre1}} {{auth()->user()->apellido1}}
    </h1>
    <form id="login-form" class="form-horizontal" method="get" action="{{route('logout')}}"  style="">
        <div class="col-sm-4 col-sm-offset-2">
            <input style="background-color: #0F222B; color: white;" type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="cerrar Sesión">
        </div>

    </form>

</div>
</body>
