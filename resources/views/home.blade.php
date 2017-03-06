<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Studentenraad</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/caroussel/edslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/caroussel/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/parallax.css') }}">
    <script rel="script" src="{{ asset('js/jquery.min.js') }}"></script>
    <script rel="script" src="{{ asset('js/jquery-edslider-1.4.js') }}"></script>
    <script rel="script" src="{{ asset('js/parallax.js') }}"></script>
</head>
<body>
    <div class="containerMenu">
        <a class="menuLogo" href="./"><img src="{{ asset('img/SR_Logo_transparant_wit.png') }}"> </a>
        <div>
            <a class="item" href="#">About</a>
            <a class="item" href="#">Stuvers</a>
            <a class="item" href="#">Raden</a>
            <a class="item" href="#">Dossiers</a>
            <a class="item" href="#">Galerij</a>
            <a class="item" href="#">Verkiezing</a>
            <a class="item" href="#">Contact</a>
        </div>
    </div>
    <div class="content">
        <div class="sitewrap">
            <div class="photowrap">
                <div class="container">
                    <div class="edslider">
                        <div class="progress">
                        </div>
                        <ul class="mySlideshow">
                            <li class="first">
                                <img src="{{ asset('img/caroussel/SR_Logo.png') }}" alt="" class="animated fadeInLeft">
                                <p class="animated fadeInRight">Studentenraad Erasmushogeschool Brussel</p>
                            </li>
                            <li class="second">
                                <p class="animated fadeInUp">"Wij streven naar verbetering en kwaliteit"</p>
                            </li>
                            <li class="third">
                                <p class="animated fadeInLeft">"We werken met hart en ziel"</p>
                            </li>
                            <li class="fourth">
                                <p class="animated fadeInRight">"We zijn er altijd voor jullie te steunen"</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

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
                <img src="{{ asset('img/home/parallax/event-background.jpg') }}" class="bgimages" alt=""/>
            </div>
            <div class="contentwrap flex" id="eventContent">
                <div class="infoContent">
                    <h1>Events</h1>
                    <p>Evenementen die wij organiseren, STUVO en nog meer. Hou u van alles op de hoogte!</p>
                    <img src="{{ asset('img/home/events_icon.png') }}" alt="" class="contentImg">
                </div>
                <div class="date">
                    <div class="flex">
                        <div>
                            <time datetime="2014-09-24" class="date-as-calendar inline-flex size1x">
                                <span class="weekday">Wednesday</span>
                                <span class="day">24</span>
                                <span class="month">September</span>
                            </time>
                        </div>
                        <div>
                            <p>Tittel</p>
                            <p>Ondertittel</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <time datetime="2014-09-24" class="date-as-calendar inline-flex size1x">
                                <span class="weekday">Wednesday</span>
                                <span class="day">24</span>
                                <span class="month">September</span>
                            </time>
                        </div>
                        <div>
                            <p>Tittel</p>
                            <p>Ondertittel</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <time datetime="2014-09-24" class="date-as-calendar inline-flex size1x">
                                <span class="weekday">Wednesday</span>
                                <span class="day">24</span>
                                <span class="month">September</span>
                            </time>
                        </div>
                        <div>
                            <p>Tittel</p>
                            <p>Ondertittel</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <time datetime="2014-09-24" class="date-as-calendar inline-flex size1x">
                                <span class="weekday">Wednesday</span>
                                <span class="day">24</span>
                                <span class="month">September</span>
                            </time>
                        </div>
                        <div>
                            <p>Tittel</p>
                            <p>Ondertittel</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <time datetime="2014-09-24" class="date-as-calendar inline-flex size1x">
                                <span class="weekday">Wednesday</span>
                                <span class="day">24</span>
                                <span class="month">September</span>
                            </time>
                        </div>
                        <div>
                            <p>Tittel</p>
                            <p>Ondertittel</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="photowrap">
                <img src="{{ asset('img/home/parallax/agenda-background.jpg') }}" class="bgimages" alt=""/>
            </div>
            <div class="contentwrap flex" id="agendaContent">
                <div class="date">
                    <div class="flex">
                        <div>
                            <time datetime="2014-09-24" class="date-as-calendar inline-flex size1x">
                                <span class="weekday">Wednesday</span>
                                <span class="day">24</span>
                                <span class="month">September</span>
                            </time>
                        </div>
                        <div>
                            <p>Tittel</p>
                            <p>Ondertittel</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <time datetime="2014-09-24" class="date-as-calendar inline-flex size1x">
                                <span class="weekday">Wednesday</span>
                                <span class="day">24</span>
                                <span class="month">September</span>
                            </time>
                        </div>
                        <div>
                            <p>Tittel</p>
                            <p>Ondertittel</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <time datetime="2014-09-24" class="date-as-calendar inline-flex size1x">
                                <span class="weekday">Wednesday</span>
                                <span class="day">24</span>
                                <span class="month">September</span>
                            </time>
                        </div>
                        <div>
                            <p>Tittel</p>
                            <p>Ondertittel</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <time datetime="2014-09-24" class="date-as-calendar inline-flex size1x">
                                <span class="weekday">Wednesday</span>
                                <span class="day">24</span>
                                <span class="month">September</span>
                            </time>
                        </div>
                        <div>
                            <p>Tittel</p>
                            <p>Ondertittel</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <time datetime="2014-09-24" class="date-as-calendar inline-flex size1x">
                                <span class="weekday">Wednesday</span>
                                <span class="day">24</span>
                                <span class="month">September</span>
                            </time>
                        </div>
                        <div>
                            <p>Tittel</p>
                            <p>Ondertittel</p>
                        </div>
                    </div>
                </div>
                <div class="infoContent">
                    <h1>Agenda</h1>
                    <p>Volg onze toekomende vergaderingen of werkgroepen. Zodat jij altijd op de hoogte zijt wanneer wij
                        samenkomen!</p>
                    <img src="{{ asset('img/home/calendar-icon.png') }}" alt="" class="contentImg">
                </div>
            </div>

            <div class="photowrap">
                <img src="{{ asset('img/home/parallax/contact-us2-background.jpg') }}" class="bgimages" alt=""/>
            </div>
            <div class="contentwrap">
                <h1>Contact us!</h1>
                <div class="flex" id="contactContent">
                    <div class="card">
                        <img src="{{ asset('img/home/facebook-logo-white.jpg') }}" alt="" class="contentImg top">
                        <img src="{{ asset('img/home/facebook-logo.jpg') }}" alt="" class="contentImg">
                        <h2>Facebook</h2>
                    </div>
                    <div class="card">
                        <img src="{{ asset('img/home/email-icon-white.jpg') }}" alt="" class="contentImg top">
                        <img src="{{ asset('img/home/email-icon.jpg') }}" alt="" class="contentImg">
                        <h2>Mail</h2>
                    </div>
                    <div class="card">
                        <img src="{{ asset('img/home/form-icon-white.png') }}" alt="" class="contentImg top">
                        <img src="{{ asset('img/home/form-icon.png') }}" alt="" class="contentImg">
                        <h2>Algemeen Contactformulier</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{ asset('js/main.js') }}"></script>
<script>
    $(document).ready(function(){
        $.parallax({
            speed: .70
        });
    });
</script>
</body>
</html>