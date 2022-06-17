<?php
$str = "PHP";

function myFunction() {
    static $x = 0;
    echo "<p>정적 변수 x의 값은 : {$x}</p>";
    $x++;
}

myFunction();
myFunction();
myFunction();

