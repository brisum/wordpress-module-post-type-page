<?php

namespace Brisum\Wordpress\PostType\Page\PostType;

use \Brisum\Wordpress\PostType\PostTypeRegistrator as ParentPostTypeRegistator;

class PostTypeRegistrator extends ParentPostTypeRegistator
{
	protected $postType = Page::POST_TYPE;
}
