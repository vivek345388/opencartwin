<?php
// HTTP
define('HTTP_SERVER', 'https://myopencartphp.azurewebsites.net/admin/');
define('HTTP_CATALOG', 'https://myopencartphp.azurewebsites.net/');


// HTTPS
define('HTTPS_SERVER', 'https://myopencartphp.azurewebsites.net/admin/');
define('HTTPS_CATALOG', 'https://myopencartphp.azurewebsites.net/');

// DIR
define('DIR_APPLICATION', '/home/site/wwwroot/admin/');
define('DIR_SYSTEM', '/home/site/wwwroot/system/');
define('DIR_IMAGE', '/home/site/wwwroot/image/');
define('DIR_STORAGE', '/home/site/wwwroot/storage/');
define('DIR_CATALOG', '/home/site/wwwroot/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'opencartphp.mysql.database.azure.com');
define('DB_USERNAME', 'opencartadmin@opencartphp');
define('DB_PASSWORD', 'admin.123456');
define('DB_DATABASE', 'opencart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');