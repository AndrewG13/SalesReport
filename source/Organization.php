<?php
/*
** Organization.php
**    Represents the unique business that will track their data.
*/

//require("Init.php");
//require("Record.php");


class Organization {
  static $lifetimeOrgs = 0;

  public $orgName;
  public $orgID;
  public $dateCreated;
  private $recordsList;
  private $YTDMap;

  public function __construct($newOName, $newOID="N/A") {
    $this->orgName = $newOName;
    $this->orgID = $newOID;
    $this->dateCreated = date("m-j-Y"); // today's date
    $this->recordList = array();
    $this->YTDMap = array();

    static::$lifetimeOrgs++;
  }

  // future plan to automatically sort records (by date) as they come in
  // for now, just add them to the last position of Records List
  public function logRecord($newRecord) {
    // future plan, detect duplicate records based on date.
    // if dup, replace and log replacement message,
    // if no dup, add like normal.
    $recordList[] = $newRecord;
  }

  public function updateYTD($year, $profits, $deductions) {
    // Check if Year has logged information (if it exists)
    if ($this->YTDMap[$year] != null) {
      // add to existing year's YTD
      $this->YTDMap[$year] += $profits;
      $this->YTDMap[$year] -= $deductions;

    } else {
      // create new year (with current record as starting value)
      $this->YTDMap[$year] = $profits - $deductions;

    }

    // send back updated YTD value for year
    return $this->YTDMap[$year];
  }

  public function displayOneRecords($date) {

  }

  public function displayAllRecords() {
    echo "---";
    foreach($this->recordsList as $record) {
      $record->printInfo();
      echo "---\n";
    }
  }

}

 ?>
