<div class="flex box">
    <div class="flex-kol topic-box">
        <h2 class="title-topic">{{ $dossier->titel }}</h2>
        <h4 class="topic">{{ $dossier->topic }}</h4>
    </div>
    <div class="flex-kol">
        <button class="pdf">PDF</button>
        <div class="flex-kol">
            <h4 class="title-einde">Einde</h4>
            <p class="timestamp-einde">{{ $dossier->einde }}p</p>
        </div>
    </div>
</div>
