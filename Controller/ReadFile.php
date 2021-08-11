<?php

namespace Controller;

use App\Interfaces\ReadFileAbstract;

class ReadFile extends ReadFileAbstract
{
    const DOCUMENT_PATH = __DIR__;

    public function __construct($fileName)
    {
        $this->setFileName($fileName);
        $this->contents = file_get_contents(self::DOCUMENT_PATH . "/" . $this->getFileName());
    }
}
