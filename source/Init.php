<?php
/*
** Startup Routines for initializing settings, variables, etc.
**
*/

require("source/Record.php");
require("source/AppKey.php");
//require("source/Record.php");
//require("source/Record.php");



// Create keys
$_Keys = array(
new AppKey(array(
  "N"=>"Reports",
  "I"=>array("1","reports","r"),
  "D"=>"View, Manage, or Delete Processed Reports.",
  "R"=>"_",
  "H"=>false)),
new AppKey(array(
  "N"=>"Input",
  "I"=>array("2","input","i"),
  "D"=>"Input New of Modified Data to a Record.",
  "R"=>"_",
  "H"=>false)),
new AppKey(array(
  "N"=>"List Action Keys",
  "I"=>array("3","keys","k"),
  "D"=>"Display List of Action Keys.",
  "R"=>"_",
  "H"=>false)),
new AppKey(array(
  "N"=>"Username",
  "I"=>array("4","name","n"),
  "D"=>"Save Your Name for Custom Greetings.",
  "R"=>"_",
  "H"=>false)),
new AppKey(array(
  "N"=>"Help",
  "I"=>array("5","help","h"),
  "D"=>"Access the Application Guide.",
  "R"=>"_",
  "H"=>false)),
new AppKey(array(
  "N"=>"Exit",
  "I"=>array("6","exit","e"),
  "D"=>"Terminate the Application CLI.",
  "R"=>"_",
  "H"=>false)),
new AppKey(array(
  "N"=>"Tell a Joke",
  "I"=>array("joke"),
  "D"=>"Receive a Joke or Offer One for Judgement. User Feelings May Be Negatively Impacted.",
  "R"=>"_",
  "H"=>true)));

//echo "Amount of Action Keys: " . count($_Keys);
function _ListKeys() {
  global $_Keys;
  echo "Reached List Keys";
  for($i = 0; $i < count($_Keys); $i++) {
    if (!$_Keys[$i]->hide) {
      $_Keys[$i]->printInfo();
    }
  }
}


 ?>