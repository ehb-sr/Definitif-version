<div class="container">
    <div class="leftcontainer">
        <div class="citaatLeft">
            <img src="/img/textballon-ConvertImage.png"/>
            <div class="text">
                {{$departement->leftAbove->text}}
            </div>
            <div class="itemleft">
                <div class="contentTitleLeftStuvers">
                    <b>{{ $departement->leftAbove->name }}</b>
                    <br>
                    {{ $departement->leftAbove->statuut }}
                </div>
            </div>
        </div>
        <img src="/img/stuvers/{{ $departement->leftAbove->img }}" width="500" height="250px"/>
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
                        <b>{{ $departement->rightAbove->name }}n</b>
                        <br>
                        {{ $departement->rightAbove->statuut }}
                    </div>
                </div>
            </div>
        </div>
        <img src="/img/stuvers/{{ $departement->rightAbove->img }}" width="500" height="250px"/>
    </div>
</div>