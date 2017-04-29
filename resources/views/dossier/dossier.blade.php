<div class="flex box">
    <div class="flex-kol topic-box">
        <h2 class="title-topic">{{ $dossier->title }}</h2>
        <h4 class="topic">{{ $dossier->topic }}</h4>
    </div>
    <div class="flex-kol">
        <a class="pdf" href="/download/{{ $dossier->pdf }}">PDF</a>
        <div class="flex-kol">
            <h4 class="title-einde">Einde</h4>
            <p class="timestamp-einde">{{ $dossier->endDate }}</p>
        </div>
    </div>
</div>
