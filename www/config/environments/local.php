<?php

/*----------------------------------------------------*/
// Local config
/*----------------------------------------------------*/
// Database
define('DB_NAME', 'blog');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', getenv('DB_HOST') ? getenv('DB_HOST') : 'blog-mysql');

// WordPress URLs
define('WP_HOME', 'http://blog');
define('WP_SITEURL', 'http://blog/cms');

// Development
define('SAVEQUERIES', true);
define('WP_DEBUG', true);
define('SCRIPT_DEBUG', true);

// Themosis framework
define('THEMOSIS_ERROR_DISPLAY', true);
define('THEMOSIS_ERROR_SHUTDOWN', true);
define('THEMOSIS_ERROR_REPORT', -1);

define('THEMOSIS_THEME_TEXTDOMAIN', 'blog');