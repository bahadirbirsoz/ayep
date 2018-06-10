<?php

class CSV implements Countable
{

    protected $lines;

    public function __construct($path)
    {
        echo __METHOD__;
        if (file_exists($path)) {
            $this->lines = explode("\n", file_get_contents($path));
        }
    }

    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
        return count($this->lines);
    }
}


$myCsvFile = new CSV("../../upload/ornek_metin.txt");
//echo get_class($myCsvFile);


