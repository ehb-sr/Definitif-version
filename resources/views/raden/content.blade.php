<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <title>Raden - Studentenraad</title>
    @include('head-base')
</head>
<body>
@include('menu.menu')
<div class="sitewrap" id="loaded">
    <div class="contentwrap">
        <div id="followWrap">
            <h2 id="followItem" class="sticky">{{ $leden->year->today }}</h2>
        </div>
        <h1>@lang('raden.titel')</h1>
        <p>@lang('raden.inleiding')</p>
        <div>
            <form method="get" action="/getRaden" id="stuver">
                <select name="jaar" id="jaar">
                    @foreach($leden->year->others as $year)
                        <option value="{{ $year->jaar }}">{{ $year->text }}</option>
                    @endforeach
                </select>
                <button type="submit">@lang('raden.submit')</button>
            </form>
        </div>
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