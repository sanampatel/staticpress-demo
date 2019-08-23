@extends('_layouts.master')

@section('content')
	<div class="uk-container uk-container-small uk-section">
		<h2 class="uk-text-left uk-text-bold heading-2">Posts tagged of tag '{{ ucwords($page->name()) }}'</h2>
		<hr>
		@forelse (posts_filter($posts, $page) as $post)
			<div class="uk-padding uk-padding-remove-horizontal uk-padding-remove-top uk-margin-bottom"> 
				@if ($post->image)
					<div class="img-wrapper">
						<img src="{{ $post->mainUrl }}/images/{{ basename($post->image) }}">
						<div class="date-wrapper">
							<span class="post-date">{{ date('M j, Y', $post->date) }}</span> 
						</div>
					</div>
				@endif
				<h3 class="article-title uk-text-bold">
					<a
						href="{{ $post->getUrl() }}"
						title="Read more - {{ $post->title }}"
						class="text-black font-extrabold"
					>{{ ucwords($post->title) }}</a>
				</h3>
				<p>
					<div class="uk-inline meta">
						<span class="user-img">
							<img src="{{ $post->mainUrl }}/images/{{ basename($post->authorimage) }}">
						</span> {{ $post->author }}
					</div>

					<div class="uk-inline meta">
						<img class="tag-img" src="{{ $post->mainUrl }}/assets/images/tag.png">
						@if ($post->tags)
							@foreach ($post->tags as $i => $tag)
								<a class="taglist" 
									href="{{ '/tags/' . $tag }}"
									title="View posts in {{ $tag }}"
								>{{ ucwords($tag) }},
								</a>
							@endforeach
						@endif
					</div>
					<div class="uk-inline meta">
						<img class="tag-img" src="{{ $post->mainUrl }}/assets/images/tag.png">
						@if ($post->tags)
							@foreach ($post->tags as $i => $tag)
								<a class="taglist" 
									href="{{ '/tags/' . $tag }}"
									title="View posts in {{ $tag }}"
								>{{ ucwords($tag) }}
								</a>
							@endforeach
						@endif
					</div>
				</p>
				<p>{!! $post->excerpt(250) !!}</p>
				<div class="icons">
					<a href="" class="uk-icon social-icon uk-margin-small-right" uk-icon="icon: facebook; ratio: 0.8"></a>
					<a href="" class="uk-icon social-icon uk-margin-small-right" uk-icon="icon: twitter; ratio: 0.8"></a>
					<a href="" class="uk-icon social-icon" uk-icon="icon: instagram; ratio: 0.8"></a>
				</div>
			</div>
		@empty
			<p>No posts to show.</p>
		@endforelse
	</div>
@endsection