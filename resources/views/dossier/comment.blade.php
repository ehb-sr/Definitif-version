<div class="flex-kol comment-content">
    @foreach($dossier->comments as $comment)
        @if($comment != null)
            <div class="flex-kol comment-box">
                <p class="timestamp-message">{{ $comment->time }}</p>
                <p class="comment-user">{{ $comment->message }}</p>
            </div>
        @endif
    @endforeach
    <div class="flex">
        <textarea></textarea>
        <img src="{{ asset('img/dossier/add_box_black.png') }}" class="add-btn">
    </div>
</div>
<!--<p class="s-more">See More</p> -->