<?php
$var = "message";
$$var = "Hello world!";

echo $message;
/*
 * 1. 변수 $var에 문자열 message 할당
 * 2. $$var 변수에 문자열 hello world! 할당
 * key : $$var는 앞에서 $var에 할당한 문자열 message가 대체되므로
 * $ message랑 동일
 */