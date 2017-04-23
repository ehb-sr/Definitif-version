<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dossier - Studentenraad</title>
    @include('dossier.head')
    @include('head-base')
</head>
<body>
@include('menu.menu')
<div class="sitewrap">
    <div class="contentwrap">
        <h1>Dossiers</h1>
        <p></p>
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/dossier/dossiers.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap">
        <div id="followWrap">
            <h2 id="followItem">2016 - 2017</h2>
        </div>
        @include('menu.follow')

        @foreach($dossiers as $dossier)
            <div class="dossierBox">
                @include('dossier.dossier')
                @include('dossier.comment')
            </div>
        @endforeach
    </div>
</div>
<script src="{{ asset('js/main.js') }}"></script>
@include('dossier.script')
<script>
    $(document).ready(function() {
        $.parallax();
    });
</script>
</body>
</html>