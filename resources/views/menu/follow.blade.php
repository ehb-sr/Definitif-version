<div id="followMenuWrap">
    <div id="followMenu">
        <h3>Academiejaar</h3>
        @foreach($dossiers[1]->others as $time)
        <a href="/getDossier/{{ $time->jaar }}">
            <h4>{{ $time->text }}</h4>
        </a>
        @endforeach
    </div>
</div>