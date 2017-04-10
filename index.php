<?php
error_reporting(E_ALL);

spl_autoload_register(function($className) {
    $filePath = "classes/{$className}.php";
    
    if (!file_exists($filePath)) {
        die("file {$filePath} not found");
    }
    
    require_once($filePath);
});


$remote1 = new TVRemote();

function useRemote(RemoteInterface $remote)
{
    
}
