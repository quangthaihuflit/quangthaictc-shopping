<?php
// APPLICATION
define('APPLICATION', 'Admin');

// HTTP
define('HTTP_SERVER', 'https://quangthaictc-shopping-afaf490781ab.herokuapp.com/quangthaictc/');
define('HTTP_CATALOG', 'https://quangthaictc-shopping-afaf490781ab.herokuapp.com');

// DIR
define('DIR_OPENCART', '/app/');
define('DIR_APPLICATION', DIR_OPENCART . 'quangthaictc/');
define('DIR_EXTENSION', DIR_OPENCART . 'extension/');
define('DIR_IMAGE', DIR_OPENCART . 'image/');
define('DIR_SYSTEM', DIR_OPENCART . 'system/');
define('DIR_CATALOG', DIR_OPENCART . 'catalog/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'pqrn89.stackhero-network.com');
define('DB_USERNAME', 'quangthaictc');
define('DB_PASSWORD', 'QuangThai732004@');
define('DB_DATABASE', 'quangthaictc-shopping');
define('DB_PORT', '5179');
define('DB_PREFIX', 'tb_');

// SSL (nếu có, còn không thì để chuỗi rỗng)
define('DB_SSL_KEY', '');
define('DB_SSL_CERT', '');
define('DB_SSL_CA', '');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
