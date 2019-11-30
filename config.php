<?php

return [
	'production' => false,
	'google_analytic_code' => 'UA-23560239-19',
	'disqus_code' => 'staticpress-demo',
	'sitename' => 'StaticPress',
	'title' => 'StaticPress',
	'mainUrl' => 'http://localhost:8020',
	'baseUrl' => 'https://demo.staticpress.io',
	'siteAuthor' => 'Hence Media',
	'site' => [
		'title' => 'StaticPress',
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
		'settings' => [
			'path' => 'settings/{filename}',
			'extends' => '_layouts.master',
			'section' => '',
			'name' => function ($page) {
				return $page->getFilename();
			},
		],
		'customPages' => [
			'path' => '{filename}',
			'extends' => '_layouts.page',
			'section' => '',
			'name' => function ($page) {
				return $page->getFilename();
			},
		],
		'sliders' => [
			'path' => 'sliders/{filename}',
			'extends' => '_layouts.master',
			'section' => '',
			'name' => function ($page) {
				return $page->getFilename();
			},
		],
	],
	'newnav' => file_get_contents('./source/navigation.json'),
	'excerpt' => function ($page, $limit = 250, $end = '...') {
		return $page->isPost
			? str_limit_soft(content_sanitize($page->getContent()), $limit, $end)
			: null;
	},
    'url' => function ($page, $path) {
        return starts_with($path, 'http') ? $path : '/' . trimPath($path);
    },
];