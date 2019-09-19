		<nav uk-navbar>
			<div class="uk-navbar-left">
				<ul class="uk-navbar-nav">
					<li>
						<a href="/" class="uk-padding-remove-left">
							<img src="{{ $page->mainUrl }}/assets/images/logo.png">
						</a>
					</li>
				</ul>
			</div>
			<div class="uk-navbar-right">
				<ul class="uk-navbar-nav">
					
					<li>						
						@php
							$nav_json_content = file_get_contents('./source/navigation.json');
							$arr =json_decode($nav_json_content, true);							 
						@endphp
						<ul class="uk-navbar-nav">
							@foreach ($arr['items'] as $arrss) 
								<li>
									<a href="{{ $arrss['url'] }}">
										<span class="uk-button-text">
											{{ $arrss['text'] }}
										</span>
									</a>
									@if ($arrss['metaitems'])
									<div class="uk-navbar-dropdown">
										<ul class="uk-nav uk-navbar-dropdown-nav">
											@foreach($arrss['metaitems'] as $arrssss)
												<li>
													<a href="{{ $arrssss['url'] }}" style="color: #232323">
														<span>{{ $arrssss['text'] }}</span>
													</a>
												</li>
											@endforeach
										</ul>
									</div>
									@endif
								</li>
							@endforeach
						</ul>
					</li>
					<li>
						<a class="uk-padding-remove-right">
							<div id="vue-search">
								<search></search>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</nav>