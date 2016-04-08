<?php
if(!defined('SITE_URL')){
    define("SITE_URL", '/mvc-light');
}

/** the base configurations for the system */
define('DB_NAME', 'mvc_light');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** DB type */
define('DB_TYPE', 'mysql');

define("THEME_URL", SITE_URL.'/view/');