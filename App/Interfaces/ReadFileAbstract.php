<?php

namespace App\Interfaces;

abstract class ReadFileAbstract
{
    protected $fileName;
    protected $contents;


    public function getFileName()
    {
        return $this->fileName;
    }
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    public function getContents()
    {
        return $this->contents;
    }
}
