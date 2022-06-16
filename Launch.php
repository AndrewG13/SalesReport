<?php

require("source/Init.php");
//require("source/AppKey.php");



$prompt = ">";
$debugMode = false;


launchApp();

function launchApp() {
  global $prompt;
  global $debugMode;

  // Initialize startup greeting
  greeting();
  // Navigate to user selected operation
  promptActionKey();
}

function greeting() {
  echo "\nSales Application Initialized\n";
  echo "Enter \"keys\" for list of keys, or \"help\" for application guide.";
}

function promptActionKey() {
  global $prompt;

  echo "\nEnter Action Key:\n";
  $input = readline($prompt);

  readKey($input);

}

// read & validate the inputted action key
function readKey($key) {
  global $_Keys;
  // iterate through each available action
  for($i = 0; $i < count($_Keys); $i++) {
    // compare to each key variation
    foreach($_Keys[$i]->keys as $ActionKey) {
      if ($key == $ActionKey) {
        //$_Keys[$i]->printInfo();
        processKey($i);
        return true;
      }
    }
  }
  echo "Invalid Action Key: {$key}.";
  return false;
}

// handle the validated action key
function processKey($keyIndex) {
  global $_Keys;

  switch ($keyIndex) {
    // Reports
    case (1) - 1 :

      break;
    // Input
    case (2) - 1 :

      break;
    // List Action Keys
    case (3) - 1 :
      _ListKeys();
      break;
    // Username
    case (4) - 1 :

      break;
    // Help
    case (5) - 1 :

      break;
    // Exit
    case (6) - 1 :

      break;
    // Tell a Joke
    case (7) - 1 :

      break;
  }
  //$_Keys[$keyIndex]->printInfo();

}

// functions of Reports:
// create a new report, view existing report, export report to file, delete report
 ?>
