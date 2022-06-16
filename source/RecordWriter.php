<?php

class RecordWriter extends RecordHandler {

  // run through the sequence of adding a new Record
  // Note: Currently, there is no input mismatch handling
  public write($org) {
    // will be used to handle user input
    $input;

    echo "\n\nType in Date of Record, or Skip for Today:\n";
    echo "(Date Format -> 12-25-1998)\n"
    $input = trim(readline($_Prompt));
    // handle blank option for today's date
    $rDate = ($input == "") ? date("m-j-Y") : $input;

    echo "\n\nType in Daily Profits:\n";
    $input = trim(readline($_Prompt));
    $rProfits = $input;

    // add the rest

  }

}

 ?>
