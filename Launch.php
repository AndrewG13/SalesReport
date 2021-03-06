<?php

require("source/Init.php");
require("source/Quips.php");
//require("source/RecordReader.php");
//require("source/RecordWriter.php");
//require("source/AppKey.php");

// flag to determine if the application is running.
// setting to false will comense the termination of the app.
$systemRunning = true;

//echo "Today is: " . date("m-j-Y");
//echo "Time is " . gettype(date('h:ia'));

launchApp();

function launchApp() {
  global $_Prompt;
  global $_DebugMode;
  global $systemRunning;

  // Initialize startup greeting
  greeting();
  // Navigate to user selected operation
  while ($systemRunning) {
    $systemRunning = promptActionKey();
  }
  // Close the application
  terminate();

}

function greeting() {
  echo "\n\n(') Sales Application Initialized\n";
  echo "Enter \"keys\" for list of keys, or \"help\" for application guide.";
}

function promptActionKey() {
  global $_Prompt;

  // read action key
  echo "\n\nEnter Action Key:\n";
  $input = readline($_Prompt);
  // read key and determine if system should continue
  return readKey($input);
}

// read & validate the inputted action key
function readKey($key) {
  global $_Keys;
  $key = trim($key);

  // iterate through each available action
  for($i = 0; $i < count($_Keys); $i++) {
    // compare to each key variation
    foreach($_Keys[$i]->keys as $ActionKey) {
      if ($key == $ActionKey) {
        //$_Keys[$i]->printInfo();
        return processKey($i);
      }
    }
  }
  echo "\n<!> Invalid Action Key [{$key}] <!>";

  if ($key == "gullible" || $key == "Gullible") {
    echo "\nLOL!";
  }
  return true;
}

// handle the validated action key
function processKey($keyIndex) {
  global $_Keys;
  global $_Username;
  global $NoUsername;
  global $_Prompt;
  global $_Organizations;

  switch ($keyIndex) {
    // Reports
    case (1) - 1 :
      echo "\n<| Reports |>";
      // add logic to:
      // enter Organization name (if not found, abort),
      // choose to display either year or ALL,
      // show appropriate reports.

      $orgName = "Wendy's";
      $year = "ALL";
      RecordReader::read($_Organizations[$orgName], $year);

      break;
    // Input
    case (2) - 1 :
      echo "\n<| Input |>";
      // add logic to:
      // enter Organization name (if not found, prompt to create),
      // go through input process.

      $orgName = "Wendy's";
      RecordWriter::write($_Organizations[$orgName]);

      break;
    // List Action Keys
    case (3) - 1 :
      echo "\n<| List of Action Keys |>";
      _ListKeys();
      break;
    // Username
    case (4) - 1 :
      // read in name
      echo "\nEnter Your name:\n";
      $input = readline($_Prompt);
      $input = trim($input);

      // Set or Clear name
      if ($input == "") {
        $_Username = NoUsername;
        echo "\nUsername Cleared.";
      } else {
        $_Username = $input;
        echo "\nUsername Updated, Greetings {$_Username}";
      }
      break;
    // Help
    case (5) - 1 :
      echo "\n<| Application Guide |>";
      // helpfull stuff
      break;
    // Exit
    case (6) - 1 :
      return false;
      break;
    // Ask the System
    case (7) - 1 :
      echo "\n<| Ask the System |>";
      echo "\nEnter a Question:\n";
      $input = readline($_Prompt);
      echo Quips::sass();
      break;
  }
  //$_Keys[$keyIndex]->printInfo();

  // keep running the system
  return true;
}

function terminate() {
  global $_Username;
  // display shutdown message
  echo "\n(') Application Shutting Down.";
  // greet if username is set
  if (_UsernameSet()) {
    echo " Goodbye {$_Username}.";
  }
  echo "\n\n";
}

/*
** Notes:
*/

// functions of Reports:
// create a new report, view existing report, export report to file, delete report

// Reports will involve file reading (read reports within /Reports)
// Input will involve file writing   (write reports either directly in CLI or manual file in /InputData)
// https://www.afterhoursprogramming.com/tutorial/php/read-and-write-to-file/
// https://www.w3schools.com/PHP/php_file_open.asp
// https://www.w3schools.com/PHP/php_file_create.asp

 ?>
