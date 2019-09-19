<article>
	<div class="uk-padding uk-padding-remove-horizontal uk-padding-remove-top">
		@if ($post->image)
    		<div class="img-wrapper">
                <img src="{{ $post->mainUrl }}/images/{{ basename($post->image) }}">
                <div class="date-wrapper">
                    <span class="post-date">{{ date('M j, Y', $post->date) }}</span> 
                </div>
            </div>
    	@endif
    	<h3 class="article-title uk-margin-remove-bottom">
	    	<a
			href="{{ $post->getUrl() }}"
			title="Read more - {{ $post->title }}"
			class="text-black font-extrabold">{{ ucwords($post->title) }}</a>
	    </h3>
	    <p>
			@if ($post->author)
				<div class="uk-inline meta">
					<span class="user-img">
						<img class="uk-box-shadow-small" src="{{ $post->mainUrl }}/images/{{ basename($post->authorimage) }}">
					</span> {{ $post->author }}
				</div>
			@endif

			<div class="uk-inline meta">
                <img class="tag-img" src="{{ $post->mainUrl }}/assets/images/tag.png">
                @if ($post->tags)
                    @foreach ($post->tags as $i => $tag)
                        <a class="taglist" 
                            href="{{ '/tags/' . $tag }}"
                            title="View posts in {{ $tag }}"
                        >{{ ucwords($tag) }}
                        </a>
                        @if (! $loop->last)
							,
						@endif
                    @endforeach
                @endif
            </div>
            <div class="uk-inline meta">
                <img class="tag-img" src="{{ $post->mainUrl }}/assets/images/category.png">
                @if ($post->categories)
                    <a href="/categories/{{ $post->categories }}" title="View posts in - {{ $post->categories }}" class="categorylist">
						{{ ucwords($post->categories) }}	
					</a>
                @endif
            </div>
		</p>
		<p>{!! $post->excerpt(250) !!}</p>
		<a href="{{ $post->getUrl() }}" class="uk-padding-remove-horizontal uk-button read-more"><span class="uk-button-text">Read more</span></a>
		
	</div>
</article>
