
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
        @foreach($leden->raden->vvs as $lid)
            <div class="flex lidBox">
                <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                <div>
                    <h3>{{ $lid->name }}</h3>
                    <p>{{ $lid->statuut }}</p>
                </div>
            </div>
        @endforeach
    </div>