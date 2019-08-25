<?php

return [
	'production' => false,
	'google_analytic_code' => 'UA-23560239-19',
	'disqus_code' => 'static-press',
	'title' => 'Netlify CMS jigsaw',
	'mainUrl' => 'https://demo.staticpress.io',
	'baseUrl' => 'https://demo.staticpress.io',
	'siteAuthor' => 'Hence Media Pvt. Ltd.',
	'site' => [
		'title' => 'Netlify CMS Blog Template',
	],
	'collections' => [
		'posts' => [
			'path' => 'posts/{filename}',
			'sort' => '-date',
			'extends' => '_layouts.post',
			'section' => 'postContent',
			'isPost' => true,
			'comments' => false,
			'isFeatured' => true,
			'tags' => [],
			'categories' => [],
		],
		'tags' => [
			'path' => 'tags/{filename}',
			'extends' => '_layouts.tag',
			'section' => '',
			'name' => function ($page) {
				return $page->getFilename();
			},
		],
		'categories' => [
			'path' => 'categories/{filename}',
			'extends' => '_layouts.category',
			'section' => '',
			'name' => function ($page) {
				return $page->getFilename();
			},
		],
	],
	'excerpt' => function ($page, $limit = 250, $end = '...') {
		return $page->isPost
			? str_limit_soft(content_sanitize($page->getContent()), $limit, $end)
			: null;
	},
	'name' => function () {},
	'getPrevious' => function () {},
	'getNext' => function () {},
	'getUrl' => function () {},
	'count' => function () {},
    'url' => function ($page, $path) {
        return starts_with($path, 'http') ? $path : '/' . trimPath($path);
    },
];
