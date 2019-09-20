<div class="uk-margin">
	<h3 class="heading-title"><span class="heading-title-span uk-text-bold">About Author</span><span class="heading-title-divider"></span></h3>
	<p>{{ $settings->setting->aboutauthor }}</p>
</div>

@if ($categories)
	<div class="uk-margin-medium-top">
		<h3 class="heading-title"><span class="heading-title-span uk-text-bold">Category</span><span class="heading-title-divider"></span></h3>
		<ul class="uk-list">
			@foreach ($categories as $category)
			<li class="uk-padding-small list-cat" style="background: url({{ $page->mainUrl }}/images/{{ basename($category->image) }});">
				<a class="cat light" href="/categories/{{ $category->title }}" title="View posts in {{ $category->title }}">{{ ucwords($category->title) }}</a>
			</li>
			@endforeach	
		</ul>
	</div>
@endif

@if ($tags)
	<div class="uk-margin-medium-top">
		<h3 class="heading-title"><span class="heading-title-span uk-text-bold">Tag</span><span class="heading-title-divider"></span></h3>
		@foreach ($tags as $tag)
			<span class="uk-label">
				<a class="tag light uk-padding-small" href="/tags/{{ $tag->title }}" title="View posts in {{ $tag->title }}">{{ ucwords($tag->title) }}</a>
			</span>
		@endforeach
	</div>
@endif