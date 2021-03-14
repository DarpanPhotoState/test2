<?php
// Array of the files with an unique ID
$files = array(
    'UID12345' => array(
        'content_type' => 'image/png', 
        'suggested_name' => '1200px-Logo_of_YouTube_(2015-2017).svg.png', 
        'file_path' => 'https://raw.githubusercontent.com/DarpanPhotoState/test2/main/1200px-Logo_of_YouTube_(2015-2017).svg.png',
        'type' => 'local_file'
    ),
    
);

// Base URL of the application
define('BASE_URL','https://raw.githubusercontent.com/DarpanPhotoState/test2/main/1200px-Logo_of_YouTube_(2015-2017).svg.png'. $_SERVER['HTTP_HOST'].'/');

// Path of the download.php file
define('DOWNLOAD_PATH', BASE_URL.'download.php');

// Path of the token directory to store keys
define('TOKEN_DIR', 'tokens');

// Authentication password to generate download links
define('OAUTH_PASSWORD','ALLSWEB');

// Expiration time of the link (examples: +1 year, +1 month, +5 days, +10 hours)
define('EXPIRATION_TIME', '+5 minutes');