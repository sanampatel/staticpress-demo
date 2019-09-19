@if ($pagination->pages->count() > 1)
	<div>
		@if ($previous = $pagination->previous)
			<a
				href="{{ $previous }}"
				title="Previous Page"
				class="uk-background-muted uk-text-black uk-padding-small"
			>&LeftArrow;</a>
		@endif
		@foreach ($pagination->pages as $pageNumber => $path)
			<a
				href="{{ $path }}"
				title="Go to Page {{ $pageNumber }}"
				class="uk-background-muted uk-text-black uk-padding-small"
			>{{ $pageNumber }}</a>
		@endforeach
		@if ($next = $pagination->next)
			<a
				href="{{ $next }}"
				title="Next Page"
				class="uk-background-muted uk-text-black uk-padding-small"
			>&RightArrow;</a>
		@endif
	</div>
@endif