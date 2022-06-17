<?php

//require("Init.php");
//require("Record.php");
//require("Organization.php");
//require("RecordHandler.php");


class RecordWriter extends RecordHandler {

  // run through the sequence of adding a new Record
  // Note: Currently, there is no input mismatch handling
  public static function write($org) {
    global $_Prompt;
    // will be used to handle user input
    $input;

    echo "\n\nType in Date of Record, or Skip for Today:\n";
    echo "(Date Format -> 02-25-1998)\n";
    $input = trim(readline($_Prompt));
    // handle blank option for today's date
    $rDate = ($input == "") ? date("m-j-Y") : $input;

    echo "\n\nType in Daily Profits:\n";
    $input = trim(readline($_Prompt . "$"));
    $rProfits = (float)$input;

    echo "\n\nType in Deductions, or Skip if None:\n";
    $input = trim(readline($_Prompt . "$"));
    $rDeduct = ($input == "") ? 0.00 : (float)$input;

    $rNotes;
    $notesSize = 100;
    while (length($rNotes) > 50) {
      echo "\n\nType in Notes, if Any:\n";
      echo "(50 Char Limit)\n";
      $input = trim(readline($_Prompt));
      $notesSize = length($input);
      if ($notesSize > 50) {
        echo "\n\n<!> Notes Size Exceeds 50 Chars <!>";
      }
    }
    $rNotes = ($input == "") ? "None." : $input;

    // set additional unprompted values

    // Username will automatically default to UNSPECIFIED if not set
    $rAuthor = $_Username;
    // strip the year off of Date
    $rYear = substr($rDate, 6);
    // YTD comes from Organization (note YTD includes this record)
    $rYTD = $org->updateYTD($rYear, $rProfits, $rDeduct);

    // create a new Record & log it to the Organization
    if ($rAuthor == NoUsername) {
      $newRecord = new Record($rDate, $rYear, $rProfits, $rDeduct, $rYTD, $rNotes);
    } else {
      $newRecord = new Record($rDate, $rYear, $rProfits, $rDeduct, $rYTD, $rNotes, $rAuthor);
    }
    $org->logRecord($newRecord);

    // write to file
    // ...
  }

}

 ?>
