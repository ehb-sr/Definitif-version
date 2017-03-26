<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dossier</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/parallax.css') }}">
    <link rel="stylesheet" href="{{ asset('css/verkiezing.css') }}">
    <script rel="script" src="{{ asset('js/jquery.min.js') }}"></script>
    <script rel="script" src="{{ asset('js/parallax.js') }}"></script>
</head>
<body>
<div class="containerMenu">
    <a class="menuLogo" href="./"><img src="{{ asset('img/SR_Logo_transparant_wit.png') }}"> </a>
    <div>
        <a class="item" href="#" id="about">About</a>
        <a class="item" href="#" id="stuvers">Stuvers</a>
        <a class="item" href="#" id="raden">Raden</a>
        <a class="item" href="#">Dossiers</a>
        <a class="item" href="#">Verkiezing</a>
        <a class="item" href="#">Contact</a>
    </div>
</div>

<div class="content">
    <div class="sitewrap">
        <div class="contentwrap">
            <h1>Verkiezing</h1>
            <p></p>
        </div>
        <div class="photowrap">
            <img src="{{ asset('img/home/parallax/event-background.jpg') }}" class="bgimages" alt=""/>
        </div>
        <div class="contentwrap">
            <h1>Zet de stap! Word Studentenvertegenwoordiger!</h1>
            <p>De taak als Studentenvertegenwoordiger is een verantwoordelijkheid die je opneemt naar jou en de
                studenten van de school toe. Je vertegenwoordigt meer dan 5000 studenten in de verschillende
                onderwijsraden binnen en buiten onze school. Het is een compleet nieuwe ervaring waardoor je de
                school beter leert kennen en ervaring verwerft in organiseren, in dialoog gaan met andere partijen,
                adviseren, etc. Als Studentenvertegenwoordiger laat je het beleid van de school voelen wat er leeft
                onder de studenten. Jouw stem heeft zeker belang en kan dingen veranderen, ten goede van de school.
            </p>
        </div>

        <div class="photowrap">
            <img src="{{ asset('img/home/parallax/event-background.jpg') }}" class="bgimages" alt=""/>
        </div>
        <div class="contentwrap">
            <div id="titelWrap">
                <h2>Vacature van een Studentenvertegenwoordiger</h2>
            </div>
            <!-- Koppel vehaal -->
        </div>

        <div class="photowrap">
            <img src="{{ asset('img/home/parallax/event-background.jpg') }}" class="bgimages" alt=""/>
        </div>
        <div class="contentwrap">
            <!-- Wie zoeken we -->
        </div>

        <div class="photowrap">
            <img src="{{ asset('img/home/parallax/event-background.jpg') }}" class="bgimages" alt=""/>
        </div>
        <div class="contentwrap">
            <!-- Wat wordt er van jou verwacht -->
        </div>

        <div class="photowrap">
            <img src="{{ asset('img/home/parallax/event-background.jpg') }}" class="bgimages" alt=""/>
        </div>
        <div class="contentwrap">
            <!-- Voordelen -->
        </div>

        <div class="photowrap">
            <img src="{{ asset('img/home/parallax/event-background.jpg') }}" class="bgimages" alt=""/>
        </div>
        <div class="contentwrap">
            <!-- Ondersteuning -->
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