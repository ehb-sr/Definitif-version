
    <h2>@lang('raden.an_titel')</h2>
    <p>@lang('raden.an_inleiding')</p>
    <div class="flex" id="assContent">
        <div>
            <h3>@lang('raden.bast_titel')</h3>
            <p>@lang('raden.bast_uitleg')</p>
        </div>
        <img src="{{ asset('img/raden/logo/Bruxelles.png') }}" id="assImg">
        <div>
            <h3>@lang('raden.uab_titel')</h3>
            <p>@lang('raden.uab_titel')</p>
        </div>
    </div>
    <div class="flex">
        <div class="flex lidContainer" id="assLidContainer">
            @foreach($leden->raden->bast as $lid)
                <div class="flex lidBox">
                    <img src="{{ asset('img/raden/unknown.jpeg') }}" class="lidImg">
                        <div>
                            <h3>{{ $lid->name }}</h3>
                            <p>{{ $lid->statuut }}</p>
                        </div>
                    </div>
            @endforeach

            @foreach($leden->raden->uab as $lid)
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