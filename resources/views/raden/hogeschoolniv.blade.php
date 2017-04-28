
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
            <button id="buttonLeden">Leden</button>
        </div>
        <div class="flex-kol" id="stuvoBox">
        <div class="flex" id="hoLeden">
            @foreach($leden->raden->stuvo as $lid)
                    <div class="flex lidBox">
                        <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                        <div>
                            <h3>{{ $lid->name }}</h3>
                            <p>{{ $lid->statuut }}</p>
                        </div>
                    </div>
            @endforeach
        </div>
        <div class="flex" id="hoLeden2">
            @foreach($leden->raden->stuvo2 as $lid)
                    <div class="flex lidBox">
                        <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                        <div>
                            <h3>{{ $lid->name }}</h3>
                            <p>{{ $lid->statuut }}</p>
                        </div>
                    </div>
            @endforeach
        </div>
        </div>
    </div>
    <h3 id="rvt">Raad van Toezicht</h3>
    <p>Keurt onder meer de missie, de strategische doelstellingen, het strategisch meerjarenplan en de
        begroting goed. Bepaalt ook mee het pedagogisch project van de student
    </p>
    <div class="flex" id="rvtLeden">
        @foreach($leden->raden->rvt as $lid)
            <div class="flex lidBox">
                <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                <div>
                    <h3>{{ $lid->name }}</h3>
                    <p>{{ $lid->statuut }}</p>
                </div>
            </div>
        @endforeach
    </div>