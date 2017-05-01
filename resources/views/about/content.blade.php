<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>About - Studentenraad</title>
    @include('head-base')
</head>
<body>
@include('menu.menu')
<div class="sitewrap" id="loaded">
    <div class="contentwrap" id="contentAbout">
        @include('about.about')
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/about/about.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap" id="citaatContent">
        <h1>@lang('about.citaat_titel')</h1>
    @foreach($citaten as $citaat)
        @include('about.citaatcontainer')
    @endforeach
    </div>
</div>
<script src="{{ asset('js/main.js') }}"></script>
<script>
    $(document).ready(function() {
        $.parallax({
            speed: .70
        });
    });
    window.onload = function() {
        if(!window.location.hash) {
            window.location = window.location + '#loaded';
            window.location.reload();
        }
    }
</script>
</body>
</html>
