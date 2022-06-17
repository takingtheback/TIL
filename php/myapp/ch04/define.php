<?php
define('CONSTANT', '안녕하세요.');

function myFunction() {
    define('MESSAGE', '저는 PHP를 공부합니다.');
}

myFunction();

echo CONSTANT;
echo MESSAGE;