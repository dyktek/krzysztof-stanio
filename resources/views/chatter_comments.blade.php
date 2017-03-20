@foreach($chatterPosts as $post)
        <li data-id="{{ $post->id }}" data-markdown="{{ $post->markdown }}">
            <b>Komentarz dodany przez {{ ucfirst($post->user->{Config::get('chatter.user.database_field_with_user_name')}) }}</b></a>
            {{ \Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}
            @if($post->markdown)
                <pre class="chatter_body_md">{{ $post->body }}</pre>
                <?= \DevDojo\Chatter\Helpers\ChatterHelper::demoteHtmlHeaderTags(GrahamCampbell\Markdown\Facades\Markdown::convertToHtml($post->body)); ?>
            <!--?= GrahamCampbell\Markdown\Facades\Markdown::convertToHtml( $post->body ); ?-->
            @else
                <?= $post->body; ?>
            @endif
            <div class="chatter_clear"></div>
        </li>
        @endforeach
<br>
<h2 class="center indent">
    <a href="/{{ Config::get('chatter.routes.home') }}/{{ Config::get('chatter.routes.discussion') }}/
{{ $discussion->category->slug }}/{{ $discussion->slug }}">Podyskutuj na forum</a>
</h2>


