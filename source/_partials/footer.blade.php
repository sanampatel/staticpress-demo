<footer class="uk-background-secondary uk-light uk-margin-medium-top">
	<div class="uk-container uk-padding-small uk-text-center">
		<small>
			This project is maintained by <a href="https://netlify-jigsaw-template.netlify.com/">Hence Media Pvt. Ltd.</a>
		</small>
	</div>
</footer>


<script async src="https://www.googletagmanager.com/gtag/js?id={{ $page->google_analytic_code }}"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', '{{ $page->google_analytic_code }}');

	/**
	*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
	*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
	
	var disqus_config = function () {
	this.page.url = getUrl();  // Replace PAGE_URL with your page's canonical URL variable
	this.page.identifier = getUrl(); // Replace PAGE_IDENTIFIER with your page's unique identifier variable
	};
	
	(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://{{ $page->disqus_code }}.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
	})();
</script>

@yield('footer-scripts')
</body>
</html>