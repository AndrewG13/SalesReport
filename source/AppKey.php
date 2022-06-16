<?php

class AppKey {

  private $name;
  public  $keys;
  private $desc;
  private $redirectToAction; // used to startup the process this key is affliated with (Ex: go to Reports)
  public $hide;

  public function __construct($arr) {
    $this->name = $arr["N"];
    $this->keys = $arr["I"];
    $this->desc = $arr["D"];
    $this->redirectToAction = $arr["R"];
    $this->hide = $arr["H"];
  }

  public function printInfo() {
    echo "\nAction Name: {$this->name}";
    echo "\nDescription: {$this->desc}";
    echo "\nKeys: [ ";
    foreach ($this->keys as $key) {
      echo $key . " ";
    }
    echo "]\n";

  }

}

 ?>
