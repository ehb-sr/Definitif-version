
<div class="sitewrap">
    @include('home.slider')

    <div class="contentwrap">
        <h1>Studentenraad Erasmushogeschool Brussel</h1>
        <p>De leden van de Studentenraad wenst u welkom op onze website! Dankzij onze website kan je ook u
            inbreng geven. Volg onze dossiers en geef u mening. Check onze agenda van Evenementen
            & en de verschillende vergaderingen.</p>
        <p>Kijkt wie op u Departement Studententenverantwoordelijk is en contacteer hem/haar. Check de
            verschillende raden waar we zetelen en wie er in zetelt voor u het best te kunnen oriënteren. Aarzelt
            niet om ons te contacteren via de Contact pagina. We staan altijd paraat voor jullie!</p>
    </div>

    <div class="photowrap">
       <img src="{{ asset('img/home/parallax/event-background.jpg') }}" class="bgimages parallax" alt=""/>
    </div>
    <div class="contentwrap flex" id="eventContent">
        <div class="infoContent">
            <h1>Events</h1>
            <p>Evenementen die wij organiseren, STUVO en nog meer. Hou u van alles op de hoogte!</p>
            <img src="{{ asset('img/home/events_icon.png') }}" alt="" class="contentImg">
        </div>
        <div class="date">
            <!--FOR LOOP 5x-->
            @foreach($dates->event as $date)
                @include('home.date')
            @endforeach
        </div>
    </div>

    <div class="photowrap">
        <img src="{{ asset('img/home/parallax/agenda-background.jpg') }}" class="bgimages parallax" alt=""/>
    </div>
    <div class="contentwrap flex" id="agendaContent">
        <div class="date">
            <!--FOR LOOP 5x -->
            @foreach($dates->agenda as $date)
                @include('home.date')
            @endforeach
        </div>
        <div class="infoContent">
            <h1>Agenda</h1>
            <p>Volg onze toekomende vergaderingen of werkgroepen. Zodat jij altijd op de hoogte zijt wanneer wij
                samenkomen!</p>
            <img src="{{ asset('img/home/calendar-icon.png') }}" alt="" class="contentImg">
        </div>
    </div>

    <div class="photowrap">
        <img src="{{ asset('img/home/parallax/contact-us2-background.jpg') }}" class="bgimages parallax" alt=""/>
    </div>
    <div class="contentwrap">
        <h1>Contact us!</h1>
        @include('home.contact')

    </div>
</div>

<script src="{{ asset('js/main.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.mySlideshow').edslider({
            // Set width
            width     : '100%',
            //1536

            // Set height
            height    : 650,

            // Start position
            position  : 1,

            // Interval time between slides (in milliseconds)
            interval  : 5000,

            // <a href="http://www.jqueryscript.net/animation/">Animation</a> Speed (in milliseconds)
            duration  : 1000,

            // Enable/disable animation
            animation : true,

            // Enable/disable paginator
            paginator : false,

            // Enable/disable navigator
            navigator : true,

            //  Enable/disable interval progress bar
            progress  : true,

            // Load image url
            loadImgSrc: '../../img/caroussel/load.gif',

            //  Skin name
            skin      : 'edslider'
        });
    })
</script>
