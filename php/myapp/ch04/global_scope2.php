<?php
$str = "PHP";

function myFunction() {
    echo "<p>지역변수 str의 값은 : {$GLOBALS['str']}</p>";
}

myFunction();
echo "<p>전역변수 str의 값은 : {$str}</p>";