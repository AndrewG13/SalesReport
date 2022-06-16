<?php
/*
** Init.php
**    Startup Routines for initializing settings, variables, etc.
**    Contains global variables and routine functions
*/

require("source/Record.php");
require("source/AppKey.php");
//require("source/Record.php");
//require("source/Record.php");

define("NoUsername", "UNSPECIFIED");
$_Username = NoUsername;
$_Prompt = ">";
$_DebugMode = false;
$_Organizations;


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
  "I"=>array("3","keys","k","list","l"),
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
  "I"=>array("6","exit","e", "quit", "q"),
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

  for($i = 0; $i < count($_Keys); $i++) {
    if (!$_Keys[$i]->hide) {
      $_Keys[$i]->printInfo();
    }
  }
}

function _UsernameSet() {
  global $_Username;
  return $_Username != NoUsername;
}

function _DisplayGuide() {
  echo "\n<| Reports |>\n";
  echo "\n";
  echo "\n<| Input Data |>\n";
  echo "";
}


 ?>
