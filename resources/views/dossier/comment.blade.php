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
        <form class="add-comment" method="post" action="addComment" id="{{ $dossier->id }}">
            <textarea name="comment"></textarea>
            <button type="submit" id="submit" name="submit">
                <img src="{{ asset('img/dossier/add_box_black.png') }}" class="add-btn">
            </button>

        </form>
    </div>
</div>
<!--<p class="s-more">See More</p> -->