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
<div class="sitewrap" id="loaded">
    <div class="contentwrap">
        <h1>@lang('dossiers.titel')</h1>
        <p>@lang('dossiers.inleiding')</p>
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/dossier/dossiers.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap" id="contentDossiers">
        <div id="followWrap">
            <h2 id="followItem">{{ $dossiers[1]->today }}</h2>
        </div>
        @include('menu.follow')

        @foreach($dossiers[0]->dossiers as $dossier)
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
<script>
    window.onload = function() {
        if(!window.location.hash) {
            window.location = window.location + '#loaded';
            window.location.reload();
        }
    }
</script>
</body>
</html>