<?php
include( 'config.php' );

$template = new Template(TEMPLATE_ROOT . 'index.php');

$template->set('page_title', 'Home Page');
$template->set('content', 'Hello, Jesse!');
echo $template->fetch();