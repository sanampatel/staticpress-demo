---
pagination:
    collection: posts
    perPage: 4
---
@extends('_layouts.master')

@section('head')
    <title>{{ $page->seotitle }}</title>
	
	<meta name="keywords" content="{{ $page->seokeywords ? $page->seokeywords : $settings->setting->seokeywords }}">
	<meta name="description" content="{{ $page->seodescription ? $page->seodescription : $settings->setting->seodescription }}">
@endsection

@section('content')
	<div class="uk-container uk-section">
		<div class="uk-margin uk-text-left">
			<h2 class="uk-text-left heading">Pages</h2>
		</div>
	    <ul class="uk-list">
		    @foreach($customPages as $customPage)
		    	<li>
		    		<a href="{{ $customPage->link }}" style="color: #232323">
		    			<img class="uk-margin-small-right" src="{{ $page->mainUrl }}/asset/images/menu.png" style="height: 20px"> <span>{{ $customPage->title }}</span>
		    		</a>
		    	</li>
		    @endforeach
		</ul>
	</div>
@endsection