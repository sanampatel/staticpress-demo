@extends('_layouts.master')

@section('head')
	<title>{{ $page->title ? $page->title : $settings->setting->seotitle}} | {{ $page->siteAuthor }}</title>

	<meta name="keywords" content="{{ seo("post", $page->tags, $page->categories, $page->title, "keywords") }}">

	<meta name="description" content="{{ seo("post", "", "", $page->description, "description") }}">
@endsection

@section('content')

<div class="uk-container uk-section">
	<div uk-grid>
		<div class="uk-width-2-3">
			<article class="article">
				<h2 class="article-title-main uk-text-bold">
					{{ ucwords($page->title) }}
				</h2>
				<p>
					<div class="uk-inline meta">
						<img class="tag-img" src="{{ $page->mainUrl }}/asset/images/calendar.png"> {{ date('M j, Y', $page->date) }}
					</div>
					@if ($page->author)
					<div class="uk-inline meta">
						<img class="tag-img" src="{{ $page->mainUrl }}/asset/images/user.png"> {{ $page->author }}
					</div>
					@endif
					<div class="uk-inline meta">
						<img class="tag-img" src="{{ $page->mainUrl }}/asset/images/tag.png">
						@if ($page->tags)
							@foreach ($page->tags as $i => $tag)
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
						<img class="tag-img" src="{{ $page->mainUrl }}/asset/images/category.png">
						@if ($page->categories)
							<a href="/categories/{{ $page->categories }}" title="View posts in - {{ $page->categories }}" class="categorylist">
								{{ ucwords($page->categories) }}	
							</a>
						@endif
					</div>
				</p>
				@if ($page->image)
					<img class="border" src="{{ $page->mainUrl }}/images/{{ basename($page->image) }}">
				@endif
				<div class="line-height uk-margin">
					@yield('postContent')
				</div>
			</article>
		</div>
		<div class="uk-width-1-3">
			@include('_partials.sidebar')
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
