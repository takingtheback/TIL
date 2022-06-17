
<?php
class Grammer {
    public $name = "J";

    public function phpStudy($year) {
      echo "변수 name은 {$this->name} 입니다. <br>";
      echo "변수 year은 {$year} 입니다. <br>";
      echo $this->name . $year .  "<br>";
    }
}
$year = 2022;
$grammer = new Grammer();
$grammer -> phpStudy($year);

//주석

# 이것도 주석

/*
 * 여러줄 주석
 * 여러줄 주석
 * 여러줄 주석
 */