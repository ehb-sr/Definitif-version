<div class="container2">
    <div class="leftcontainer">
        <div class="citaatLeft2">
            <img src="/img/textballon-ConvertImage-ConvertImage.png"/>
            <div class="text2">
                {{ $departement->underLeft->text }}
            </div>
            <div class="itemleft2">
                <div class="contentTitleLeft2Stuvers">
                    <a href="mailto:{{ $departement->underLeft->mail }}" target="_blank"><b>{{ $departement->underLeft->name }}</b></a>
                    <br>
                    {{ $departement->underLeft->statuut }}
                </div>
            </div>
        </div>
        <img src="/img/stuvers/test-ConvertImage.jpg" width="500" height="250px"/>
    </div>
    <div class="rightcontainer">
        <div class="citaatRight2">
            <img src="/img/textballon-ConvertImage.png"/>
            <div class="text2">
                {{ $departement->underRight->text }}
            </div>
            <div class="itemright2">
                <div class="contentTitleRight2Stuvers">
                    <a href="mailto:{{ $departement->underRight->mail }}" target="_blank"><b>{{ $departement->underRight->name }}</b></a>
                    <br>
                    {{ $departement->underRight->statuut }}
                </div>
            </div>
        </div>
        <img src="/img/stuvers/test.jpg" width="500" height="250px"/>
    </div>
</div>