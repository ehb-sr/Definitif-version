
    <h2>@lang('raden.vl_titel')</h2>
    <div class="flex" id="vvsContainer">
        <div id="vvsInfo">
            <h2>@lang('raden.vl_vvs_titel')</h2>
            <p>@lang('raden.vl_vvs_uitleg')</p>
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