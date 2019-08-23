---
pagination:
    collection: posts
    perPage: 2
---
@extends('_layouts.master')

@section('content')
    <div class="uk-container uk-section">
        <div class="uk-margin uk-text-left">
			<h2 class="uk-text-left heading">Posts</h2>
        </div>
        
        <div uk-grid>
			<div class="uk-width-2-3"> 
				<div class="article-list">
					@foreach ($pagination->items as $post)
						<div class="uk-padding uk-padding-remove-horizontal uk-padding-remove-top">
							@if ($post->image)
					    		<div class="img-wrapper">
					                <img class="uk-box-shadow-small" src="{{ $post->mainUrl }}/images/{{ basename($post->image) }}">
					                <div class="date-wrapper">
					                    <span class="post-date">{{ date('M j, Y', $post->date) }}</span> 
					                </div>
					            </div>
					    	@endif
							<h3 class="article-title uk-text-bold">
								<a
									href="{{ $post->getUrl() }}"
									title="Read more - {{ $post->title }}"
									class="text-black font-extrabold"
								>{{ ucwords($post->title) }}</a>
							</h3>
							<p>
								<div class="uk-inline meta">
									<span class="user-img">
										<img class="uk-box-shadow-small" src="{{ $post->mainUrl }}/images/{{ basename($post->authorimage) }}">
									</span> {{ $post->author }}</div>

								<div class="uk-inline meta">
					                <img class="tag-img" src="{{ $post->mainUrl }}/assets/images/tag.png">
					                @if ($post->tags)
					                    @foreach ($post->tags as $i => $tag)
					                        <a class="taglist" 
					                            href="{{ '/tags/' . $tag }}"
					                            title="View posts in {{ $tag }}"
					                        >{{ ucwords($tag) }},
					                        </a>
					                    @endforeach
					                @endif
					            </div>
					            <div class="uk-inline meta">
					                <img class="tag-img" src="{{ $post->mainUrl }}/assets/images/category.png">
					                @if ($post->categories)
					                    @foreach ($post->categories as $i => $category)
					                        <a class="categorylist" 
					                            href="{{ '/categories/' . $category }}"
					                            title="View posts in {{ $category }}"
					                        >{{ ucwords($category) }}
					                        </a>
					                    @endforeach
					                @endif
					            </div>
							</p>
							<p>{!! $post->excerpt(250) !!}</p>
							<div class="icons">
								<a href="" class="uk-icon social-icon uk-margin-small-right" uk-icon="icon: facebook; ratio: 0.8"></a>
								<a href="" class="uk-icon social-icon uk-margin-small-right" uk-icon="icon: twitter; ratio: 0.8"></a>
								<a href="" class="uk-icon social-icon" uk-icon="icon: instagram; ratio: 0.8"></a>
							</div>
						</div>
						@if ($post != $pagination->items->last())
				            <div class="new-article"></div>
				        @endif
					@endforeach
				</div>
			</div>

			<div class="uk-width-1-3">
				<div class="uk-margin">
					<h3 class="heading-title"><span class="heading-title-span">Category</span><span class="heading-title-divider"></span></h3>
					<ul class="uk-list">
						@if ($post->categories)
							@foreach ($categories as $category)
							<li class="uk-padding-small" style="background: url({{ $page->mainUrl }}/images/{{ basename($category->image) }});">
								<a class="catlists" href="/categories/{{ $category->title }}" title="View posts in {{ $category->title }}">{{ ucwords($category->title) }}</a>      
							</li>
							@endforeach
						@endif
					</ul>
				</div>

				<div class="uk-margin-medium-top">
					<h3 class="heading-title"><span class="heading-title-span">Tag</span><span class="heading-title-divider"></span></h3>
					<ul class="uk-list uk-padding-remove-horizontal">
						@if ($post->tags)
							@foreach ($tags as $tag)
							<li class="uk-padding-xsmall uk-list uk-padding-remove-horizontal">
								<a class="cat-title" href="/tags/{{ $tag->title }}" title="View posts in {{ $tag->title }}">{{ ucwords($tag->title) }}</a>      
							</li>
							@endforeach
						@endif
					</ul>
				</div>
			</div>
        </div>

        <div style="padding-top: 40px"> 
			@if ($pagination->pages->count() > 1)
				<div>
					@if ($previous = $pagination->previous)
						<a
							href="{{ $previous }}"
							title="Previous Page"
							class="paginator alter-clr"
						>&LeftArrow;</a>
					@endif
					@foreach ($pagination->pages as $pageNumber => $path)
						<a
							href="{{ $path }}"
							title="Go to Page {{ $pageNumber }}"
							class="paginator alter-clr"
						>{{ $pageNumber }}</a>
					@endforeach
					@if ($next = $pagination->next)
						<a
							href="{{ $next }}"
							title="Next Page"
							class="paginator alter-clr"
						>&RightArrow;</a>
					@endif
				</div>
			@endif
        </div>
    </div>
@endsection
