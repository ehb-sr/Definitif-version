<!DOCTYPE html>
<html>
<head>
    @include('head-base')
</head>
<body>
<title>Verkiezing - Studentenraad</title>
@include('menu.menu')
<div class="sitewrap" id="verk">
    <div class="contentwrap">
        <h1>@lang('verkiezing.titel')</h1>
        <p>@lang('verkiezing.inleiding')</p>
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/verkiezing/verk_1.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap">
        @include('verkiezing.inleiding')
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/verkiezing/verk_2.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap">
        @include('verkiezing.samenstelling')
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/verkiezing/verk_3.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap">
        @include('verkiezing.wie')
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/verkiezing/verk_4.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap">
        @include('verkiezing.verwachting')
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/verkiezing/verk_5.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap">
        @include('verkiezing.voordelen')
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/verkiezing/verk_6.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap">
        @include('verkiezing.ondersteuning')
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/caroussel/ehb_studentenraad_2016.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap">
        @include('verkiezing.inschrijving')
    </div>
</div>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>