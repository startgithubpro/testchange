<?php

require __DIR__ . '/../vendor/autoload.php';

use Controller\ReadFile;

class index
{
    public function __construct()
    {
        $FileOne = new ReadFile('/../Documents/fileOne.txt');
        $FileTwo = new ReadFile('/../Documents/fileTwo.txt');
        echo $FileOne->getContents();
    }
}

$start = new index();
