<!DOCTYPE html>
<html>
<head>
    @include('head-base')
</head>
<body>
@include('menu.menu')
<div class="sitewrap">
    <div class="contentwrap">
        <h1>Raden</h1>
        <p></p>
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/home/parallax/agenda-background.jpg') }}" class="bgimages" alt=""/>
    </div>
    @include('raden.vlaamsniv')
    <div class="photowrap">
        <img src="{{ asset('img/home/parallax/agenda-background.jpg') }}" class="bgimages" alt=""/>
    </div>
    @include('raden.associatie')
    <div class="photowrap">
        <img src="{{ asset('img/home/parallax/agenda-background.jpg') }}" class="bgimages" alt=""/>
    </div>
    @include('raden.hogeschoolniv')
    <div class="photowrap">
        <img src="{{ asset('img/home/parallax/agenda-background.jpg') }}" class="bgimages" alt=""/>
    </div>
    @include('raden.departement')
</div>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>