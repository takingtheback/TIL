<?php
const CONSTANT = '안녕하세요.';

function myFunction() {
//    const MESSAGE = ' 저는 PHP 공부 중 입니다.';
}

myFunction();

class MyClass {
    public const MESSAGE = ' 저는 PHP 공부를 하고 있습니다.';

    public static function foo() {
//        const BYE = '안녕히 가세요.';
    }
}

echo CONSTANT;
echo MyClass::MESSAGE;