---
pagination:
    collection: posts
    perPage: 4
---
@extends('_layouts.master')


@section('content')
	<div class="uk-container uk-section">
		<div class="uk-margin uk-text-left">
			<h2 class="uk-text-left heading">Slider</h2>
        </div>
	    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
		    <ul class="uk-slider-items uk-child-width-1-1" style="height: 500px">
		    @foreach($sliders as $slider)
		    	<li>
		    		<img src="{{ $page->mainUrl }}/images/{{ basename($slider->image) }}" style="height: 500px;width: 100%">
		    		<div class="uk-position-center uk-panel"><h1>{{ $slider->title }}</h1></div>
		    	</li>
		    @endforeach
			</ul>
			<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
		    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
		</div>
	</div>
@endsection