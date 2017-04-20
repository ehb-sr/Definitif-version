<div class="flex-kol comment-content">
    @foreach($dossier->comments as $comment)
    <div class="flex-kol comment-box">
        <p class="timestamp-message">{{ $comment->timestamp }}</p>
        <p class="comment-user">{{ $comment->message }}</p>
    </div>
    @endforeach
    <div class="flex">
        <textarea></textarea>
        <img src="#" class="add-btn">
    </div>
</div>
<p class="s-more">See More</p>