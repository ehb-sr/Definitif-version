
<div class="sitewrap">
    @include('home.slider')

    <div class="contentwrap" id="loaded">
        <h1>@lang('home.hoofdtitel')</h1>
        <p>@lang('home.inleiding_p1')</p>
        <p>@lang('home.inleiding_p2')</p>
    </div>

    <div class="photowrap">
       <img src="{{ asset('img/home/parallax/event-background.jpg') }}" class="bgimages parallax" alt=""/>
    </div>
    <div class="contentwrap flex" id="eventContent">
        <div class="infoContent">
            <h1>@lang('home.event_titel')</h1>
            <p>@lang('home.event_text')</p>
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
            <h1>@lang('home.agenda_titel')</h1>
            <p>@lang('home.agenda_text')</p>
            <img src="{{ asset('img/home/calendar-icon.png') }}" alt="" class="contentImg">
        </div>
    </div>

    <div class="photowrap">
        <img src="{{ asset('img/home/parallax/contact-us2-background.jpg') }}" class="bgimages parallax" alt=""/>
    </div>
    <div class="contentwrap">
        <h1>@lang('home.contact_titel')</h1>
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
    });
    window.onload = function() {
        if(!window.location.hash) {
            window.location = window.location + '#loaded';
            window.location.reload();
        }
    }
</script>
