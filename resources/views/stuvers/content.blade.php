<!DOCTYPE html>
<html>
<head>
    @include('head-base')
</head>
<body>
@include('menu.menu')
<div class="sitewrap">
    <div class="contentwrap" id="contentAbout">
        <h1>Studentenvertegenwoordigers</h1>
        <p>Elk departement heeft 4 studentenvertegenwoordigers. Kijkt wie op u departement u stem zal vertegenwoordigen! Je kan u studentenvertegenwoordiger ook rechtstreeks contacteren.</p>
    </div>

    <div class="photowrap">
        <img src="{{ asset('img/campussen/kaai.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap" id="contentAbout">
        <h2>Design en technologie</h2>
        <div class="DesignEnItcontent">
            <img class="roundrect" src="{{ asset('img/campussen/kaai.jpg') }}" width="250" height="250"/>
        </div>
        @foreach($departementen as $departement)
            @if($departement->departement == 'DT')
                @include('stuvers.departement')
            @endif
        @endforeach
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/campussen/bloemenhof.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap" id="contentAbout">
        <h2>Management, media & maatschappij</h2>
        <div class="DesignEnItcontent">
            <img class="roundrect" src="{{ asset('img/campussen/bloemenhof.jpg') }}" width="250" height="250"/>
        </div>
        @foreach($departementen as $departement)
            @if($departement->departement == 'MMM')
                @include('stuvers.departement')
            @endif
        @endforeach
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/campussen/Jette.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap" id="contentAbout">
        <h2>Gezondheidszorg & Landsschapsarchitectuur</h2>
        <div class="DesignEnItcontent">
            <img class="roundrect" src="{{ asset('img/campussen/Jette.jpg') }}" width="250" height="250"/>
        </div>
        @foreach($departementen as $departement)
            @if($departement->departement == 'GL')
                @include('stuvers.departement')
            @endif
        @endforeach
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/campussen/Jette.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap" id="contentAbout">
        <h2>Onderwijs & Pedagogie</h2>
        <div class="DesignEnItcontent">
            <img class="roundrect" src="{{ asset('img/campussen/Jette.jpg') }}" width="250" height="250"/>
        </div>
        @foreach($departementen as $departement)
            @if($departement->departement == 'EDU')
                @include('stuvers.departement')
            @endif
        @endforeach
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/campussen/kcb.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap" id="contentAbout">
        <h2>Koninklijk Conservatorium Brussel</h2>
        <div class="DesignEnItcontent">
            <img class="roundrect" src="{{ asset('img/campussen/kcb.jpg') }}" width="250" height="250"/>
        </div>
        @foreach($departementen as $departement)
            @if($departement->departement == 'KCB')
                @include('stuvers.departement')
            @endif
        @endforeach
    </div>
    <div class="photowrap">
        <img src="{{ asset('img/campussen/ritcs.jpg') }}" class="bgimages" alt=""/>
    </div>
    <div class="contentwrap" id="contentAbout">
        <h2>RITCS</h2>
        <div class="DesignEnItcontent">
            <img class="roundrect" src="{{ asset('img/campussen/ritcs.jpg') }}" width="250" height="250"/>
        </div>
        @foreach($departementen as $departement)
            @if($departement->departement == 'RITCS')
                @include('stuvers.departement')
            @endif
        @endforeach
    </div>
</div>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>