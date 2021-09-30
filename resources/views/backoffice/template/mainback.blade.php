<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
<link rel="stylesheet" href="{{asset("css/app.css")}}">

    <title>Document</title>
</head>
<body>
    <h1>Bienvenue dans mon back</h1>
    @include('backoffice.partials.navback.navback')
    
    <section>
        <div class="text">
                @yield('backpage')
        </div>
    </section>


    <script src="{{asset('js/tailwind.js')}}"></script>
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>