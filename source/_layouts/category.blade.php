@extends('_layouts.master')

@section('content')
	<div class="uk-container uk-section">
		<div uk-grid>
			<div class="uk-width-2-3">
				<h2 class="uk-text-left uk-text-bold heading-2">Posts tagged of category '{{ ucwords($page->name()) }}'</h2>
				<hr>
				@forelse (posts_filter_cat($posts, $page) as $post)
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