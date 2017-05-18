<?php
// Report all errors
error_reporting(E_ALL);

// Database Credentials
define('DATABASE_HOST', 'devimiiphone1.nku.edu');
define('DATABASE_USER', 'Boone-St-E');
define('DATABASE_PASSWORD', 'children123');
define('DATABASE_DB', 'Boone-St-E');

// Document Root
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/boone/');

// Document Root
define('BASE', 'http://localhost/boone/');

// Template
define('TEMPLATE_NAME', 'basic');
define('ADMIN_TEMPLATE_NAME', 'basic');
define('TEMPLATE_BASE', BASE . 'templates/' . TEMPLATE_NAME . '/');
define('TEMPLATE_ROOT', ROOT . 'templates/' . TEMPLATE_NAME . '/');

function my_autoloader($class) {
    include(ROOT . 'classes/class.' . $class . '.php');
}

spl_autoload_register('my_autoloader');

require(ROOT . 'functions.php');

$database = new MySQL(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_DB);