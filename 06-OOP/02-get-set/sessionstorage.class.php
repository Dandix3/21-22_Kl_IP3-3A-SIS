<?php

class SessionStorage extends ArrayStorage
{
    const APPKEY = "myUniqueApp";

    public function __construct(){
        if (!array_key_exists(self::APPKEY, $_SESSION)) {
            $_SESSION[self::APPKEY] = [];
        }
        $this->storage = &$_SESSION[self::APPKEY];
    }
}