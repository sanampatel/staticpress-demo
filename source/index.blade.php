---
pagination:
    collection: posts
    perPage: 2
---
@extends('_layouts.master')

@section('content')
    <div class="uk-container uk-section">
        <div class="uk-margin uk-text-left">
			<h2 class="uk-text-left heading">{{ $settings->setting->postpagetitle }}</h2>
        </div>
        <div uk-grid>
			<div class="uk-width-2-3"> 
	        	@foreach ($pagination->items as $post)
	        		@include('_partials.components.post-preview')
	        	@endforeach
		    </div>
		   
		    <div class="uk-width-1-3">
		    	@include('_partials.sidebar')
			</div>
		</div>

        <div class="uk-padding uk-padding-remove-horizontal"> 
			@include('_partials.components.pagination')
        </div>
    </div>
@endsection