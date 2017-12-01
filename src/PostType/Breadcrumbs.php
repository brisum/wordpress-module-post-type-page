<?php

namespace Brisum\Wordpress\PostType\Page\PostType;

use Brisum\Wordpress\Breadcrumbs\BreadcrumbsInterface;
use Brisum\Wordpress\Breadcrumbs\CrumbsInterface;

class Breadcrumbs implements CrumbsInterface
{
	public function __construct(BreadcrumbsInterface $breadcrumbs)
	{
		$breadcrumbs->registerPostType(Page::POST_TYPE, $this);
	}

	public function generate() {
		return [
			[
				'name' => "Page",
				'link' => null
			]
		];
	}
}
