<?php

require( FRAMEWORK_DIR . "/page_files/functions.php" );

$path = FRAMEWORK_DIR . '/page_files/css/style.css';
$path_header = FRAMEWORK_DIR . '/page_files/css/header.css';
$path_body = FRAMEWORK_DIR . '/page_files/css/body.css';
$path_footer = FRAMEWORK_DIR . '/page_files/css/footer.css';

echo "<link rel='stylesheet' href='$path' >";
echo "<link rel='stylesheet' href='$path_header' >";
echo "<link rel='stylesheet' href='$path_body' >";
echo "<link rel='stylesheet' href='$path_footer' >";
