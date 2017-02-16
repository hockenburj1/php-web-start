<?php
include( 'config.php' );

$template = new Template(TEMPLATE_ROOT . 'index.php');

$template->set('page_title', 'Home Page');

$users_list_sql = get_sql('getListOfUsers');
$users = $database->query($users_list_sql);

ob_start();
include('views/home/home.php');
$content = ob_get_clean();
$template->set('content', $content);

echo $template->fetch();