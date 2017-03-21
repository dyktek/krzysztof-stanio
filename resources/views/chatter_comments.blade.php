@foreach($chatterPosts as $post)
        <li data-id="{{ $post->id }}" data-markdown="{{ $post->markdown }}">
            <b>Komentarz dodany przez {{ ucfirst($post->user->{Config::get('chatter.user.database_field_with_user_name')}) }}</b></a>
            {{ \Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}
            <div class="chatter_clear"><?= strip_tags($post->body); ?></div>
        </li>
    <hr>
        @endforeach
<br>
<h2 class="center indent">
    <a href="/{{ Config::get('chatter.routes.home') }}/{{ Config::get('chatter.routes.discussion') }}/
{{ $discussion->category->slug }}/{{ $discussion->slug }}">Podyskutuj na forum</a>
</h2>


