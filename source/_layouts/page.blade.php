@extends('_layouts.master')

@section('head')
	<title>{{ $page->title ? $page->title : $settings->setting->seotitle}} | {{ $page->siteAuthor }}</title>

	<meta name="keywords" content="{{ seo("post", $page->tags, $page->categories, $page->title, "keywords") }}">

	<meta name="description" content="{{ seo("post", "", "", $page->description, "description") }}">
@endsection

@section('content')
	<div class="uk-container uk-container-xsmall uk-section">
		<h2 class="article-title-main uk-text-bold">
			You are on Page '{{ ucwords($page->title) }}'
		</h2>
		 <p>
		 	{{ $page->description }}
		 </p>
	</div>
@endsection
