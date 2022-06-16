<?php
/*
** AppKey.php
**    Actions for functionality with application CLI
*/
class AppKey {

  private $name;
  public  $keys;             // keys available for Action
  private $desc;
  private $redirectToAction; // used to startup the process this key is affliated with (Ex: go to Reports)
  public $hide;              // flag for hidden Actions

  // constructor takes associative array
  public function __construct($arr) {
    $this->name = $arr["N"];
    $this->keys = $arr["I"];
    $this->desc = $arr["D"];
    $this->redirectToAction = $arr["R"];
    $this->hide = $arr["H"];
  }

  // basic dump of information
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
