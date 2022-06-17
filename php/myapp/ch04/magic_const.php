<?php
class Ace {
    public function _construct() {
        echo __CLASS__;
    }

    public function _sayHello() {
        return __METHOD__;
    }
}
$say = new Ace();
echo $say->_sayHello();