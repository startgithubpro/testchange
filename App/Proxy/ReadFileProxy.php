<?php

namespace App\Proxy;

use App\Interfaces\ReadFileAbstract;
use Controller\ReadFile;

class ReadFileProxy extends ReadFileAbstract
{
    private $file;
    public function __construct($filename)
    {
        $this->setFileName($filename);
    }
    public function lazyload()
    {
        if ($this->file === null) {
            $this->file = new ReadFile($this->getFileName());
        }
        return $this->file;
    }
}
