<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Allquran - {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .btn-success {
            border-color: azure !important;
            border-collapse: inherit !important;
        }

        /* buat navbar tetap di atas */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1;
        }

        /* navbar tidak menimpa conten */
        .content_saya {
            margin-top: 50px;
        }

        .warna_jumbotorn {
            background-color: #d9eb91;
        }

        .footer__widget {
            margin-bottom: 30px;
        }

        .f_c {
            margin-bottom: 40px;
        }
    </style>
</head>

<body>
    @include('template_public.navbar')
    <div class=" container-fluid content">
        @yield('content')
    </div>
    <hr>
    @include('template_public.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
