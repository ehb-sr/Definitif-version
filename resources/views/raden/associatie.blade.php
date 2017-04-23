
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

            @foreach($leden->bast as $lid)
                <div class="flex lidBox">
                    <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                        <div>
                            <h3>{{ $lid->name }}</h3>
                            <p>{{ $lid->statuut }}</p>
                        </div>
                    </div>
            @endforeach

            @foreach($leden->uab as $lid)
                    <div class="flex lidBox" id="uab">
                        <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                        <div>
                            <h3>{{ $lid->name }}</h3>
                            <p>{{ $lid->statuut }}</p>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>