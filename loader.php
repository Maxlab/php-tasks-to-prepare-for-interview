<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

spl_autoload_register(function ($class) {

    $parts = explode('\\', $class);

    $yourStartingPath = dirname(__FILE__).DIRECTORY_SEPARATOR.'src';
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($yourStartingPath),
        RecursiveIteratorIterator::SELF_FIRST
    );
    foreach($iterator as $file) {
        if($file->isDir()) {
            $file_path = $file->getRealpath().DIRECTORY_SEPARATOR.end($parts).'.php';

            if(file_exists($file_path)) {
                $file_path = str_replace(dirname(__FILE__).DIRECTORY_SEPARATOR, '', $file_path);
                require_once($file_path);
            }
        }
    }

});
