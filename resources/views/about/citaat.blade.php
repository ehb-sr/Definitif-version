@foreach($citaten as $citaat)
<p>{{$citaat->Text}}</p><img src="{{ asset('img/textballon.png') }}" alt="" class="citaatImg">
<div class="contentTitleLeft">
    <b>{{$citaat->Voornaam}} {{$citaat->Familienaam}}</b>
    <br>
    {{$citaat->Statuut}}
</div>
<img src="{{ asset('img/unknown.jpeg') }}" alt="" class="PersonImgLeft">
@endforeach