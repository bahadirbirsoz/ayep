<?php

abstract class Hayvan
{

    CONST DOLASIM = "herhangi bir şey";

    public $turAdi;
    protected $ortalamaOmur;
    private $soyuTukenmis = false;

    abstract public function konus();

    public function tukendi()
    {
        $this->soyuTukenmis = true;
    }

    public function __destruct()
    {
        echo "Son kez : " . $this->konus();
    }


}


class Kedi extends Hayvan
{

    protected $renk;

    protected $irk;

    static $ayakSayisi = 4;

    public static function getAyakSayisi()
    {

        return static::$ayakSayisi;
    }

    /**
     * @return mixed
     */
    public function getIrk()
    {
        return $this->irk;
    }

    /**
     * @param mixed $irk
     */
    public function setIrk($irk)
    {
        $this->irk = $irk;
    }

    public function __construct()
    {
        $this->turAdi = "Kedi";
    }

    public function __set($name, $value)
    {
        if (!isset($this->$name)) {
            $this->$name = $value;
        }
    }

    public function __get($name)
    {
        return $this->$name;
    }


    public function setRenk($renk)
    {
        $this->renk = $renk;
    }

    public function getRenk()
    {
        return $this->renk;
    }


    public function konus()
    {
        $this->tukendi();
        return "miyav";
    }


}

echo Hayvan::DOLASIM;
