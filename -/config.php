<?php

// LOGIN
define('USERNAME',	'admin');
define('PASSWORD',	'blarg');

// DATABASE
define('DB_NAME', 		'bcurls');
define('DB_USERNAME', 	'bcurls');
define('DB_PASSWORD', 	'pass');

// STATS!!! you can turn them off
define('RECORD_URL_STATS', true);

// FINE AS IS (UNLESS YOU KNOW OTHERWISE)
define('DB_DRIVER',		'mysql'); // mysql or pgsql, sqlite could be done with maybe tweaks
define('DB_SERVER', 	'localhost');
define('DB_PREFIX', 	'bcurls_');
define('COOKIE_SALT', 	'B75sS4L7T0R3PEPp3R');
define('API_SALT',		'B75jk4K25M5U7hTAP1');

// URL to hit if someone visits your site without a short url, set to null for just a blank page
define('HOMEPAGE_URL', 'http://example.com');
