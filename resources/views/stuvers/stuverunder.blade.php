<div class="container2">
    <div class="leftcontainer">
        <div class="citaatLeft2">
            <img src="/img/textballon-ConvertImage-ConvertImage.png"/>
            <div class="text2">
                {{ $departement->underLeft->text }}
            </div>
            <div class="itemleft2">
                <div class="contentTitleLeft2Stuvers">
                    <b>{{ $departement->underLeft->name }}</b>
                    <br>
                    {{ $departement->underLeft->statuut }}
                </div>
            </div>
        </div>
        <img src="/img/stuvers/{{$departement->underLeft->img}}" width="500" height="250px"/>
    </div>
    <div class="rightcontainer">
        <div class="citaatRight2">
            <img src="/img/textballon-ConvertImage.png"/>
            <div class="text2">
                {{ $departement->underRight->text }}
            </div>
            <div class="itemright2">
                <div class="contentTitleRight2Stuvers">
                    <b>{{ $departement->underRight->name }}</b>
                    <br>
                    {{ $departement->underRight->statuut }}
                </div>
            </div>
        </div>
        <img src="/img/stuvers/{{ $departement->underRight->img }}" width="500" height="250px"/>
    </div>
</div>