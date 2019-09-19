<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ $page->title }}</title>
	
	<meta name="keywords" content="{{ $page->seokeywords ?? $page->seokeywords }}">
	<meta name="description" content="{{ $page->seodescription ?? $page->seodescription }}">
	<meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="{{ $page->getUrl() }}"/>
	<meta property="og:keywords" content="{{ $page->seokeywords }}" />
	<meta property="og:description" content="{{ $page->seodescription }}" />

	<link rel="home" href="{{ $page->baseUrl }}">
	<link rel="icon" href="/favicon.ico">
	<link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

	{{-- UIKIT --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/css/uikit.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/js/uikit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/js/uikit-icons.min.js"></script>

	{{-- Font awesome --}}
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/fontawesome.css">

	<style>
		.brand_logo {
			width: 210px; 
			background: url(/images/{{ basename($settings->setting->sitelogo) }}) no-repeat; 
			background-size: 210px;
			text-indent: -9999px;
			margin: 10px 0 0 0;
			vertical-align: middle;
			height: 60px;
			margin-left: 0px;
		}
		.bg-grey-lightest {
			background-color: rgb(249, 249, 249);
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

	@include('_custom.header')

	{{-- Custom CSS --}}
	<link rel="stylesheet" href="{{ $page->mainUrl }}/assets/build/css/main.css">
</head>
<body>
	
	<header class="uk-box-shadow-small uk-background-default">
		<div class="uk-container">
			@include('_partials.nav')
		</div>
	</header>