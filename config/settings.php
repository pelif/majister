<?php 

error_reporting(0); 
ini_set('display_errors', '0'); 

date_default_timezone_set('America/Sao_Paulo'); 

$settings = []; 

//directories settings
$settings['root'] = dirname(__DIR__);
$settings['temp'] = $settings['root'] . '/tmp';
$settings['public'] = $settings['root'] . '/public';

//Error Settings
$settings['error_handler_middleware'] = [
    'display_error_details' => true,
    'log_errors' => true,
    'log_error_details' => true,
];

return $settings;