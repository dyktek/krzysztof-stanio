<div id="chatter_header">
    <div class="container">
        <a class="back_btn" href="/{{ Config::get('chatter.routes.home') }}"><i class="chatter-back"></i></a>
    </div>
</div>
<div class="container margin-top">
    <div class="row">
        <div class="col-md-12">
            <div class="conversation">
                <ul class="discussions no-bg" style="display:block;">
                        @foreach($chatterPosts as $post)
                            <li data-id="{{ $post->id }}" data-markdown="{{ $post->markdown }}">
		                		<span class="chatter_posts">
					        		<div class="chatter_middle">
                                        <span class="chatter_middle_details"><b>Komentarz dodany przez {{ ucfirst($post->user->{Config::get('chatter.user.database_field_with_user_name')}) }}</b></a>
                                            <span
                                                    class="ago chatter_middle_details">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}</span></span>
					        			<div class="chatter_body">
					        				@if($post->markdown)
                                                <pre class="chatter_body_md">{{ $post->body }}</pre>
                                                <?= \DevDojo\Chatter\Helpers\ChatterHelper::demoteHtmlHeaderTags(GrahamCampbell\Markdown\Facades\Markdown::convertToHtml($post->body)); ?>
                                            <!--?= GrahamCampbell\Markdown\Facades\Markdown::convertToHtml( $post->body ); ?-->
                                            @else
                                                <?= $post->body; ?>
                                            @endif
					        			</div>
					        		</div>
					        		<div class="chatter_clear"></div>
				        		</span>
                            </li>
                        @endforeach
                </ul>
                <a href="/{{ Config::get('chatter.routes.home') }}/{{ Config::get('chatter.routes.discussion') }}/{{ $discussion->category->slug }}/{{ $discussion->slug }}" data-type="submit" class="btn-default btn1">podyskutuj na forum</a>

            </div>
        </div>
    </div>
</div>
</div>
