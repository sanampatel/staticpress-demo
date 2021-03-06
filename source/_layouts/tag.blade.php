@extends('_layouts.master')

@section('head')
	<title>{{ seo("tag", ucwords($page->name()), "", "", "") }} | {{ $page->siteAuthor }}</title>
	<meta name="keywords" content="Tag, {{ seo("tag", $page->name(), "", "", "") }}, {{ seo("tag", $page->name(), "", "", "") }} tag">

	<meta name="description" content="Post under tag {{ seo("tag", $page->name(), "", "", "") }}.">
@endsection

@section('content')
	<div class="uk-container uk-section">
		<div uk-grid>
			<div class="uk-width-2-3">
				<h2 class="uk-text-left uk-text-bold heading-2">Posts tagged of tag '{{ ucwords($page->name()) }}'</h2>
				<hr>
				@forelse (posts_filter($posts, $page) as $post)
					@include('_partials.components.post-preview')
	        	@empty
					<p>No posts to show.</p>
				@endforelse
		    </div>
		   
		    <div class="uk-width-1-3">
		    	@include('_partials.sidebar')
			</div>
		</div>

	</div>
@endsection