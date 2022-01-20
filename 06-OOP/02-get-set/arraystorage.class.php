<?php

class ArrayStorage {
    protected array $storage = [];

    public function __get($propName) {
        if (array_key_exists($propName, $this->storage)) {
            return $this->storage[$propName];
        }
    }

    public function __set($propName, $value)
    {
       $this->storage[$propName] = $value;
    }
}
