<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('assets/css/app.css') }}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-205246474-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-205246474-2');
    </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script async src='/assets/js/app.js'></script>
</head>
<div class="--wrapper" id="@yield('id-page')">
@include('layouts.nav')

    @yield('content')

    @include('layouts.footer')
</div>
 <!-- Chatbot ALMA -->
 <script id="helper" data-idEmpresa="11b575c0-3b73-11ea-9b14-afbcefb5bb52" data-idChatbot="91401df0-a368-11ec-9289-add28a26e8a2" data-install="1" src="https://assistant.almaintelligence.com:7777/stylesAndScripts/version3/iframe.js"></script>
 <!-- Fin Chatbot ALMA -->
 <script>
     $('#imgAlma').attr('src', '{{ URL::to('/') }}/images/svg/bubble_2.svg');
 </script>
</body>
</html>