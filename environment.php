<?php

define('WP_ENV', 'local');

//prod
define('PRODUCTION_DB', '');
define('PRODUCTION_USER', '');
define('PRODUCTION_PASSWORD', '');

//local
define('LOCAL_DB', 'elle_kustora_db');
define('LOCAL_USER', 'root');
define('LOCAL_PASSWORD', '');


define('WP_DB_NAME', (WP_ENV === "production") ? PRODUCTION_DB : LOCAL_DB );
define('WP_DB_USER', (WP_ENV === "production") ? PRODUCTION_USER : LOCAL_USER );
define('WP_DB_PASSWORD', (WP_ENV === "production") ? PRODUCTION_PASSWORD : LOCAL_PASSWORD );