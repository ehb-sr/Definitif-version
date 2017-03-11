<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Studentenraad</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/parallax.css') }}">
    <script rel="script" src="{{ asset('js/jquery.min.js') }}"></script>
    <script rel="script" src="{{ asset('js/parallax.js') }}"></script>
</head>
<body>
<div class="containerMenu">
    <a class="menuLogo" href="./"><img src="{{ asset('img/SR_Logo_transparant_wit.png') }}"> </a>
    <div>
        <a class="item" href="#">About</a>
        <a class="item" href="#">Stuvers</a>
        <a class="item" href="#">Raden</a>
        <a class="item" href="#">Dossiers</a>
        <a class="item" href="#">Galerij</a>
        <a class="item" href="#">Verkiezing</a>
        <a class="item" href="#">Contact</a>
    </div>
</div>
<div class="content">
    <div class="sitewrap">
        <div class="contentWarp">

        </div>
        <div class="photowrap">

        </div>

        <div class="contentwrap">

        </div>
        <div class="photowrap">
            <img src="{{ asset('img/home/parallax/event-background.jpg') }}" class="bgimages" alt=""/>
        </div>
        <div class="contentwrap flex" id="eventContent">

        </div>

        <div class="photowrap">
            <img src="{{ asset('img/home/parallax/agenda-background.jpg') }}" class="bgimages" alt=""/>
        </div>
        <div class="contentwrap flex" id="agendaContent">

        </div>

        <div class="photowrap">
            <img src="{{ asset('img/home/parallax/contact-us2-background.jpg') }}" class="bgimages" alt=""/>
        </div>
        <div class="contentwrap">

        </div>
    </div>
</div>
<script src="{{ asset('js/main.js') }}"></script>
<script>
    $(document).ready(function(){
        $.parallax({
            speed: .70
        });
    });
</script>
</body>
</html>