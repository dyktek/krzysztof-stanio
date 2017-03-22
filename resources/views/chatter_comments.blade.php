@foreach($chatterPosts as $post)
    <li data-id="{{ $post->id }}" data-markdown="{{ $post->markdown }}">
        <b>Komentarz dodany przez {{ ucfirst($post->user->{Config::get('chatter.user.database_field_with_user_name')}) }}</b></a>
        {{ \Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}
        <?php if (mb_strlen($discussion_body = $post->body) > 90) {
            echo '<pre>' . substr(strip_tags($discussion_body), 0, 90.) . '......' . '</pre>';
        } else {
            echo '<pre>' . substr(strip_tags($discussion_body), 0, 90) . '</pre>';
        } ?>
    </li>
@endforeach
<h2 class="center indent">
    <a href="/{{ Config::get('chatter.routes.home') }}/{{ Config::get('chatter.routes.discussion') }}/
{{ $discussion->category->slug }}/{{ $discussion->slug }}">Zobacz więcej na forum</a>
</h2>