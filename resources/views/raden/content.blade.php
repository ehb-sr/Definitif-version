<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Raden - Studentenraad</title>
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
        <img src="{{ asset('img/raden/raden.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap" id="vvs">
        @include('raden.vlaamsniv')
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/raden/raden2.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap large" id="ass">
        @include('raden.associatie')
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/raden/raden3.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap large">
        @include('raden.hogeschoolniv')
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/raden/raden4.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap">
        @include('raden.departement')
    </div>
</div>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>