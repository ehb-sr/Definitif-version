
    <h2>@lang('raden.hn_titel')</h2>
    <div class="flex" id="ho">
        <div>
            <h3>@lang('raden.hn_sr_titel')</h3>
            <p>@lang('raden.hn_sr_uitleg')</p>
        </div>
        <img src="{{ asset('img/raden/logo/Logo EhB Nieuw.jpg') }}" id="hoImg">
        <div>
            <h3>@lang('raden.hn_stuvo_titel')</h3>
            <p>@lang('raden.hn_stuvo_uitleg')</p>
        </div>
    </div>
    <div class="flex">
        <div id="ledenBox">
            <button id="buttonLeden">@lang('raden.hn_sr_button')</button>
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
    <h3 id="rvt">@lang('raden.hn_rvt_titel')</h3>
    <p>@lang('raden.hn_rvt_uitleg')</p>
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