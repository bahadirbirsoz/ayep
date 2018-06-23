<?php

namespace Structure;

class Controller
{


    public final function __construct()
    {
        App::getInstance()->getLogger()->info(get_class($this) . " nesnesi oluşturuldu");

    }

}