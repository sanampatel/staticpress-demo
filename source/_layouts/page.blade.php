@extends('_layouts.master')

@section('head')
	<title>{{ $page->seotitle ? $page->seotitle : $page->title}} | {{ $page->sitename }}</title>

	<meta name="keywords" content="{{ $page->seokeywords ? $page->seokeywords : seo("post", $page->tags, $page->categories, $page->title, "keywords") }}">

	<meta name="description" content="{{ $page->seodescription ? $page->seodescription : seo("post", "", "", $page->description, "description") }}">
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
