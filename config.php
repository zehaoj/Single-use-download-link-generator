<?php
// Array of the files with an unique ID
$files = array(
    'UID67891' => array(
        'content_type' => 'application/zip', 
        'suggested_name' => 'test.zip', 
        'file_path' => 'https://testdatasetdownload.s3.us-east-2.amazonaws.com/testFile.zip',
        'type' => 'remote_file'
    )
);

// Base URL of the application
define('BASE_URL','http://'. $_SERVER['HTTP_HOST'].'/');

// Path of the download.php file
define('DOWNLOAD_PATH', BASE_URL.'download.php');

// Path of the token directory to store keys
define('TOKEN_DIR', 'tokens');

// Authentication password to generate download links
define('OAUTH_PASSWORD','interaction_dataset');

// Expiration time of the link (examples: +1 year, +1 month, +5 days, +10 hours)
define('EXPIRATION_TIME', '+2 hours');