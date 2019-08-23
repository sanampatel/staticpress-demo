@extends('_layouts.master')

@section('content')

<div class="uk-container uk-container-small uk-section">
	<div class="article">
		<h2 class="article-title-main uk-text-bold">
			{{ ucwords($page->title) }}
		</h2>
		<p>
			<div class="uk-inline meta">
				<span class="user-img">
					<img src="{{ $page->mainUrl }}/images/{{ basename($page->authorimage) }}">
				</span> {{ $page->author }}
			</div>
			<div class="uk-inline meta">
				<img class="tag-img" src="{{ $page->mainUrl }}/assets/images/tag.png">
				@if ($page->tags)
					@foreach ($page->tags as $i => $tag)
						<a class="taglist" 
							href="{{ '/tags/' . $tag }}"
							title="View posts in {{ $tag }}"
						>{{ ucwords($tag) }},
						</a>
					@endforeach
				@endif
			</div>
			<div class="uk-inline meta">
				<img class="tag-img" src="{{ $page->mainUrl }}/assets/images/category.png">
				@if ($page->categories)
					@foreach ($page->categories as $i => $category)
						<a class="categorylist" 
							href="{{ '/categories/' . $category }}"
							title="View posts in {{ $category }}"
						>{{ ucwords($category) }}
						</a>
					@endforeach
				@endif
			</div>
		</p>
		@if ($page->image)
			<div class="img-wrapper">
				<img src="{{ $page->mainUrl }}/images/{{ basename($page->image) }}">
				<div class="date-wrapper">
					<span class="post-date">{{ date('M j, Y', $page->date) }}</span> 
				</div>
			</div>
		@endif
		<div class="line-height">
			@yield('postContent')
		</div>
	</div>
	<nav class="uk-margin-medium-top" uk-grid>
		<div class="uk-width-1-2 uk-text-left">
			@if ($next = $page->getNext())
				<a class="alter-clr-2 uk-text-left" href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
					&LeftArrow; {{ ucwords($next->title) }}
				</a>
			@endif
		</div>
		<div class="uk-width-1-2 uk-text-right">
			@if ($previous = $page->getPrevious())
				<a class="alter-clr-2 uk-text-right" href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
					{{ ucwords($previous->title) }} &RightArrow;
				</a>
			@endif
		</div>
	</nav>
</div>
@include('_partials.comments')
@endsection
