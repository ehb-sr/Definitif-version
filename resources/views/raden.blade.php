<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Studentenraad</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/raden.css') }}">
    <link rel="stylesheet" href="{{ asset('css/parallax.css') }}">
    <script rel="script" src="{{ asset('js/jquery.min.js') }}"></script>
    <script rel="script" src="{{ asset('js/parallax.js') }}"></script>
</head>
<body>
<div class="containerMenu">
    <a class="menuLogo" href="./"><img src="{{ asset('img/SR_Logo_transparant_wit.png') }}"> </a>
    <div>
        <a class="item" href="#">About</a>
        <a class="item" href="#">Stuvers</a>
        <a class="item current" href="#">Raden</a>
        <a class="item" href="#">Dossiers</a>
        <a class="item" href="#">Verkiezing</a>
        <a class="item" href="#">Contact</a>
    </div>
</div>
<div class="content">
    <div class="sitewrap">
        <div class="contentwrap">
            <h1>Raden</h1>
            <p>Als studentenvertegenwoordiger kan je zelf kiezen in welke raden je stapt. Je kan verschillende mandaten
                combineren. Zo is het bijvoorbeeld mogelijk om te zetelen in de Studentenraad, de Raad van Toezicht, de
                Departementsraad en de Stuvo-Raad
            </p>
        </div>
        <div class="photowrap">
            <img src="{{ asset('img/raden/parallax/vvs.jpg') }}" class="bgimages" alt=""/>
        </div>

        <div class="contentwrap" id="vvs">
            <h2>Op Vlaams niveau</h2>
            <div class="flex" id="vvsContainer">
                <div id="vvsInfo">
                    <h2>VVS (Vlaamse Vereniging voor Studenten)</h2>
                    <p>De Vlaamse Vereniging van Studenten is de koepelorganisatie van studentenraden van de Vlaamse
                        hogescholen en universiteiten. Ze is de officiële spreekbuis van de student. VVS plaatst het
                        verdedigen van de studentenrechten in een breder kader van democratisering van het onderwijs.
                    </p>
                </div>
                <img src="{{ asset('img/raden/logo/Vlaanderen.gif') }}" id="vvsImg">
            </div>
            <div class="flex lidContainer">
                <div class="flex lidBox">
                    <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                    <div>
                        <h3>Naam</h3>
                        <p>Functie</p>
                    </div>
                </div>
                <div class="flex lidBox">
                    <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                    <div>
                        <h3>Naam</h3>
                        <p>Functie</p>
                    </div>
                </div>
                <div class="flex lidBox">
                    <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                    <div>
                        <h3>Naam</h3>
                        <p>Functie</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="photowrap">
            <img src="{{ asset('img/raden/parallax/Studiedag en voorstelling boek Cultuursensitieve Zorg.jpg') }}" class="bgimages" alt=""/>
        </div>
        <div class="contentwrap large" id="ass">
            <h2>Niveau van de associatie</h2>
            <p>De Erasmushogeschool Brussel en de Vrije Universiteit Brussel zijn partners in de Universitaire
                Associatie Brussel (UAB). De UAB-Studentenraad verbindt de Studentenraad van de EhB met die van de VUB.
                De raad verdiept zich ook in onderwerpen als verder studenten en heroriënteren
            </p>
            <div class="flex" id="assContent">
                <div>
                    <h3>Bast</h3>
                    <p>De UAB-Studentenraad of BAST (Brusselse Associatie Studentenraad) bestaat uit studenten van de
                        partnerinstellingen Vrije Universiteit Brussel en Erasmushogeschool Brussel die rechtstreeks
                        worden verkozen.
                    </p>
                </div>
                <img src="{{ asset('img/raden/logo/Bruxelles.png') }}" id="assImg">
                <div>
                    <h3>UAB raad van bestuur</h3>
                    <p>De Vrije Universiteit Brussel en Erasmushogeschool Brussel typeren zich als kwaliteitsvolle,
                        maatschappelijk geëngageerde, internationaal georiënteerde en toekomstgerichte
                        hogeronderwijsinstellingen. De Universitaire Associatie Brussel ondersteunt haar partners
                        doorheen heel haar beleid en draagt hun waarden als pluraliteit, openheid en respect hoog in
                        het vaandel
                    </p>
                </div>
            </div>
            <div class="flex">
                <div class="flex lidContainer" id="assLidContainer">
                    <div class="flex lidBox">
                        <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                        <div>
                            <h3>Naam</h3>
                            <p>Functie</p>
                        </div>
                    </div>
                    <div class="flex lidBox">
                        <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                        <div>
                            <h3>Naam</h3>
                            <p>Functie</p>
                        </div>
                    </div>
                    <div class="flex lidBox">
                        <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                        <div>
                            <h3>Naam</h3>
                            <p>Functie</p>
                        </div>
                    </div>
                </div>
                <div class="flex lidBox" id="uab">
                    <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                    <div>
                        <h3>Naam</h3>
                        <p>Functie</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="photowrap">
            <img src="{{ asset('img/raden/parallax/Studiedag en voorstelling boek Cultuursensitieve Zorg.jpg') }}" class="bgimages" alt=""/>
        </div>
        <div class="contentwrap large">
            <h2>Niveau van de hogeschool</h2>
            <div class="flex" id="ho">
                <div>
                    <h3>Studentenraad</h3>
                    <p>De Studentenraad behandelt onderwijs- en studentengerichte onderwerpen. Kan op eigen initiatief
                        adviezen uitbrengen, die dan besproken worden in de andere raden van de school.
                    </p>
                </div>
                <img src="{{ asset('img/raden/logo/Logo EhB Nieuw.jpg') }}" id="hoImg">
                <div>
                    <h3>Stuvo-raad</h3>
                    <p>
                        De leden van de Stuvo-raad bepalen mee het beleid van de Studentenvoorzieningen Erasmushogeschool
                        Brussel. Je beslist mee over het gebruik van de middelen voor voeding, huisvesting, sociale,
                        medische en psychologische dienstverlening, vervoer en studentenwerking.
                    </p>
                </div>
            </div>
            <div class="flex">
                <div>
                    <button>Leden</button>
                </div>
                <div class="flex" id="hoLeden">
                    <div class="flex lidBox">
                        <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                        <div>
                            <h3>Naam</h3>
                            <p>Functie</p>
                        </div>
                    </div>
                    <div class="flex lidBox">
                        <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                        <div>
                            <h3>Naam</h3>
                            <p>Functie</p>
                        </div>
                    </div>
                    <div class="flex lidBox">
                        <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                        <div>
                            <h3>Naam</h3>
                            <p>Functie</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex" id="hoLeden2">
                <div class="flex lidBox">
                    <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                    <div>
                        <h3>Naam</h3>
                        <p>Functie</p>
                    </div>
                </div>
                <div class="flex lidBox">
                    <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                    <div>
                        <h3>Naam</h3>
                        <p>Functie</p>
                    </div>
                </div>
                <div class="flex lidBox">
                    <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                    <div>
                        <h3>Naam</h3>
                        <p>Functie</p>
                    </div>
                </div>
            </div>
            <h3 id="rvt">Raad van Toezicht</h3>
            <p>Keurt onder meer de missie, de strategische doelstellingen, het strategisch meerjarenplan en de
                begroting goed. Bepaalt ook mee het pedagogisch project van de student
            </p>
            <div class="flex" id="rvtLeden">
                <div class="flex lidBox">
                    <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                    <div>
                        <h3>Naam</h3>
                        <p>Functie</p>
                    </div>
                </div>
                <div class="flex lidBox">
                    <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                    <div>
                        <h3>Naam</h3>
                        <p>Functie</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="photowrap">
            <img src="{{ asset('img/raden/parallax/Studiedag en voorstelling boek Cultuursensitieve Zorg.jpg') }}" class="bgimages" alt=""/>
        </div>
        <div class="contentwrap">
            <h2>Niveau van het departement / School of Arts</h2>
            <div class="flex dr">
                <div>
                    <h3>Departementsraad</h3>
                </div>
                <div>
                    <h3>Raad van de School of Art</h3>
                </div>
            </div>
            <p>
                Deze raad neemt ondermeer beslissingen over de interne organisatie (inclusief de aanwending van de personele en materiële middelen
            </p>
            <div class="dr">
                <h3>Niveau van de opleiding (Opleidingscommissie)</h3>
                <p>De opleidingscommissie is een groep samengesteld uit studenten en onderwijzend personeel. Zij
                    overzien de kwaliteit van de opleiding vanuit twee perspectieven: de docent en de student. De
                    docenten weten wat er bij hen intern aan de gang is en de student bij hen intern.
                </p>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/main.js') }}"></script>
<script>
    $(document).ready(function(){
        $.parallax({
            speed: .60
        });
    });
</script>
</body>
</html>