<!DOCTYPE html>
<html>
<head>
    @include('head-base')
</head>
<body>
@include('menu.menu')
<div class="sitewrap">
    <div class="contentwrap" id="contentAbout">
        @include('about.about')
    </div>

    <div class="photowrap">
        <img src="{{ asset('img/about/about.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap" id="citaatContent">
        <h1>Citaten</h1>
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
    })
</script>
</body>
</html>
