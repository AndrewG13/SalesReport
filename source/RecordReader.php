<?php

//require("RecordHandler.php");
//require("Organization.php");
//require("Init.php");

class RecordReader extends RecordHandler {

  public static function read($org, $date) {
    // determine whether to read one record or all records
    if ($date == "ALL") {
      self::readAll($org);
    } else {
      //self::readYearly($org, $date);
    }
  }

  private static function readOne($org, $date) {

  }

  private static function readYearly($org, $year) {

  }

  private static function readAll($org) {
    global $_Organizations;

    $_Organizations[$org->name]->displayAllRecords();
    echo "\nEnd of File";
  }

}

 ?>
