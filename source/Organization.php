<?php
/*
** Organization.php
**    Represents the unique business that will track their data.
*/

class Organization {
  static $lifetimeOrgs = 0;

  public $orgName;
  public $orgID;
  public $dateCreated;
  private $recordsList;

  public function __construct($newOName, $newOID="N/A") {
    $this->orgName = $newOName;
    $this->orgID = $newOID;
    $this->dateCreated = date("m-j-Y"); // today's date
    $this->recordList = array();

    static::$lifetimeOrgs++;
  }

  public function logRecord() {
    $record = new Record();
    
  }

}

 ?>
