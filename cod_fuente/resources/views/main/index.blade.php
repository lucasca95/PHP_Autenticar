<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TestAutenticar</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
            font-size: 13px;
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
    {{-- <?php dd($user);?> --}}
    <div class="flex-center position-ref full-height">
        <div class="content">
            @if (empty($user))
            <div class="title m-b-md">
                    Test Autenticar
            </div>
            @else
                <div>
                    <h3>CUIT: {{ $user['cuix'] }}</h3>
                    <p>Nombre completo: {{ $user['nombre'] }} {{ $user['familia'] }}</p>   
                </div>
            @endif
            <a href="https://tst.autenticar.gob.ar/auth/realms/berisso-afip/protocol/openid-connect/logout?redirect_uri=http://10.240.0.24/logout">SALIR</a>;
        </div>
    </div>
</html>