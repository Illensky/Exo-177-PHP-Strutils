<?php

class StrUtils
{
    private string $str = '';

    public function __construct(string $str)
    {
        $this->str = $str;
    }

    public function bold():void
    {
        $this -> str = "<b>".$this -> str."</b>";
    }

    public function italic():void
    {
        $this -> str = "<i>".$this -> str."</i>";
    }

    public function underline():void
    {
        $this -> str = "<span style='text-decoration: underline'>".$this -> str."</span>";
    }

    public function capitalize():void
    {
        $this -> str = "<span style='text-transform: capitalize'>".$this -> str."</span>";
    }

    public function uglify():void
    {
        $this->bold();
        $this->capitalize();
        $this->underline();
        $this->italic();
    }
    /**
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }

    /**
     * @param string $str
     */
    public function setStr(string $str): void
    {
        $this->str = $str;
    }

}