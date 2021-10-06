<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
{{-- <link rel="stylesheet" href="{{asset('css/tailwind.css')}}"> --}}
<link rel="stylesheet" href="{{asset("css/app.css")}}">

    {{-- icone dans le select --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/css/bootstrap-select.min.css">
    

    <title>Document</title>
</head>
<body id="mainbody">
    
    @include('backoffice.partials.navback.navback')
    
    <section>
        <div class="text">
                @yield('backpage')
        </div>
    </section>


    {{-- <script src="{{asset('js/tailwind.js')}}"></script> --}}
    <script src="{{asset("js/app.js")}}"></script>

    
    {{-- icone dans le select --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/i18n/defaults-*.min.js"></script>
</body>
</html>