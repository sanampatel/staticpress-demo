@extends('_layouts.master')

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
