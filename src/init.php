<?php

use Brisum\Lib\ObjectManager;
use Brisum\Wordpress\PostType\FAQ\PostType\Breadcrumbs;
use Brisum\Wordpress\PostType\FAQ\PostType\PostTypeRegistrator;

$objectManager = ObjectManager::getInstance();

/** @var PostTypeRegistrator */
$objectManager->create('Brisum\Wordpress\PostType\Page\PostType\PostTypeRegistrator');

/** @var Breadcrumbs */
$objectManager->create('Brisum\Wordpress\PostType\Page\PostType\Breadcrumbs');
