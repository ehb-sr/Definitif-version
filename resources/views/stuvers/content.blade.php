<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Stuvers - Studentenraad</title>
    @include('head-base')
</head>
<body>
@include('menu.menu')
<div class="sitewrap" id="loaded">
    <div class="contentwrap" id="contentAbout">
        <div id="followWrap">
            <h2 id="followItem" class="sticky">{{ $departementen->year->today }}</h2>
        </div>
        <h1>@lang('stuvers.hoofdtitel')</h1>
        <p>@lang('stuvers.inleiding')</p>
        <div>
            <form method="get" action="/getStuvers" id="stuver">
                <select name="jaar" id="jaar">
                    @foreach($departementen->year->others as $year)
                        <option value="{{ $year->jaar }}">{{ $year->text }}</option>
                    @endforeach
                </select>
                <button type="submit">@lang('stuvers.button')</button>
            </form>
        </div>
    </div>

    <div class="photowrap">
        <img src="{{ asset('img/campussen/kaai.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap" id="contentAbout">
        <h2>@lang('stuvers.dt')</h2>
        <div class="DesignEnItcontent">
            <img class="roundrect" src="{{ asset('img/campussen/kaai.jpg') }}" width="250" height="250"/>
        </div>
        @foreach($departementen->departementen as $departement)
            @if($departement->departement == 'DT')
                @include('stuvers.departement')
            @endif
        @endforeach
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/campussen/bloemenhof.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap" id="contentAbout">
        <h2>@lang('stuvers.mmm')</h2>
        <div class="DesignEnItcontent">
            <img class="roundrect" src="{{ asset('img/campussen/bloemenhof.jpg') }}" width="250" height="250"/>
        </div>
        @foreach($departementen->departementen as $departement)
            @if($departement->departement == 'MMM')
                @include('stuvers.departement')
            @endif
        @endforeach
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/campussen/Jette.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap" id="contentAbout">
        <h2>@lang('stuvers.gl')</h2>
        <div class="DesignEnItcontent">
            <img class="roundrect" src="{{ asset('img/campussen/Jette.jpg') }}" width="250" height="250"/>
        </div>
        @foreach($departementen->departementen as $departement)
            @if($departement->departement == 'GL')
                @include('stuvers.departement')
            @endif
        @endforeach
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/campussen/Jette.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap" id="contentAbout">
        <h2>@lang('stuvers.edu')</h2>
        <div class="DesignEnItcontent">
            <img class="roundrect" src="{{ asset('img/campussen/Jette.jpg') }}" width="250" height="250"/>
        </div>
        @foreach($departementen->departementen as $departement)
            @if($departement->departement == 'EDU')
                @include('stuvers.departement')
            @endif
        @endforeach
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/campussen/kcb.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap" id="contentAbout">
        <h2>@lang('stuvers.kcb')</h2>
        <div class="DesignEnItcontent">
            <img class="roundrect" src="{{ asset('img/campussen/kcb.jpg') }}" width="250" height="250"/>
        </div>
        @foreach($departementen->departementen as $departement)
            @if($departement->departement == 'KCB')
                @include('stuvers.departement')
            @endif
        @endforeach
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/campussen/ritcs.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap" id="contentAbout">
        <h2>@lang('stuvers.ritcs')</h2>
        <div class="DesignEnItcontent">
            <img class="roundrect" src="{{ asset('img/campussen/ritcs.jpg') }}" width="250" height="250"/>
        </div>
        @foreach($departementen->departementen as $departement)
            @if($departement->departement == 'RITCS')
                @include('stuvers.departement')
            @endif
        @endforeach
    </div>
</div>
<script src="{{ asset('js/main.js') }}"></script>
@include('dossier.script')
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