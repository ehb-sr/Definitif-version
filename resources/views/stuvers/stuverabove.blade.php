<div class="container">
    <div class="leftcontainer">
        <div class="citaatLeft">
            <img src="/img/textballon-ConvertImage.png"/>
            <div class="text">
                {{$departement->leftAbove->text}}
            </div>
            <div class="itemleft">
                <div class="contentTitleLeftStuvers">
                   <a href="mailto:{{ $departement->leftAbove->mail }}" target="_blank"><b>{{ $departement->leftAbove->name }}</b></a>
                    <br>
                    {{ $departement->leftAbove->statuut }}
                </div>
            </div>
        </div>
        <img src="/img/stuvers/test-ConvertImage.jpg" width="500" height="250px"/>
    </div>
    <div class="rightcontainer">
        <div class="citaatRight">
            <img src="/img/textballon.png"/>
            <div class="text">
                {{$departement->rightAbove->text}}
            </div>
            <div class="itemright">
                <div class="content">
                    <div class="contentTitleRightStuvers">
                        <a href="mailto:{{ $departement->rightAbove->mail }}" target="_blank"><b>{{ $departement->rightAbove->name }}</b></a>
                        <br>
                        {{ $departement->rightAbove->statuut }}
                    </div>
                </div>
            </div>
        </div>
        <img src="/img/stuvers/test.jpg" width="500" height="250px"/>
    </div>
</div>