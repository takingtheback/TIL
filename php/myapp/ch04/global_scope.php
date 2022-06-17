<?php
$str = "PHP";

function myFunction() {
    global $str;
    echo "<p>지역변수 str의 값은 : {$str}</p>";
}

myFunction();
echo "<p>전역변수 str의 값은 : {$str}</p>";