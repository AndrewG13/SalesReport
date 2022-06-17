<?php
/*
** Record.php
**    Class to describe DAILY sales data & information
**    Records are used to compute sales statistics
*/

//echo "Record file";

  class Record {

    static $lifetimeRecords = 0;
    static $notesCharLimit = 50;

    public $date;
    private $year;
    private $profits;
    private $deductions;
    private $ytdNetEarnings;
    private $notes;
    private $author;

    public function __construct($newDate, $newY, $newProfits, $newDed, $newYTD, $newNotes, $newAuthor="Unknown") {
      $this->date           = $newDate;
      $this->year           = $newY;
      $this->profits        = $newProfits;
      $this->deductions     = $newDed;
      $this->ytdNetEarnings = $newYTD;
      $this->notes          = $newNotes;
      $this->author         = $newAuthor;

      static::$lifetimeRecords++;
    }

    public function printInfo() {
      echo "\nDate: {$this->date}, Author: {$this->author}\n";
      echo "Profits: $" . number_format($this->profits, 2) . ", " .
           "Deductions: $" . number_format($this->deductions, 2) . ", " .
           "YTD Net: $" . number_format($this->ytdNetEarnings, 2) . "\n";
      if ($this->notes != "None.") {
        echo "Notes: {$this->notes}.\n";
      }
    }

/*
    public function calculateProfitability() {
      // relative percentage formula:
      //    (daily - total) / total
      $profPercentage = $this->profits -
      return
    }
*/
  }

 ?>
