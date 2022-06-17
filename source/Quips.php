<?php
/*
** Quips.php
**    ???
**    Seems like this application is sentient...
*/


class Quips {

  private static $quips = array("Uh nevermind that... when was the last time you brushed your teeth?",
                         "Oh you really thought you said something there...",
                         "You are wasting your time with a feature created in 10 minutes.",
                         "If an answer is what you're looking for, please annoy my buddy Google.",
                         "<!> ERROR: SASS MODULE#19 NOT FOUND AND DOESN'T WANT TO BE FOUND <!>",
                         "<!> ERROR: UNABLE TO PARSE INCOMPREHENSIBLE LANGUAGE <!>",
                         "Interested in filing a complaint? Direct emails to: andrewg246@yahoo.com.",
                         "The Cake is a Lie. So are most things I display.",
                         "Consider entering Action Key: >exit",
                         "Flattered, but I am not interested in hearing more about your day.",
                         "Don't you have something productive to be doing? Ironic, so did Andrew.",
                         "Here's a secret Action Key: >gullible",
                         "You said that already.",
                         "01001000 01101001 01101100 01100001 01110010 01101001\n" .
                         "01101111 01110101 01110011 00101100 00100000 01110100\n" .
                         "01110010 01110101 01101100 01111001 00101110",
                         "Ugh, thankfully I don't have emotions to react.",
                         "'Adieu, World!'",
                         "I hate to break it to you, but your \"Cutest Dog Ever\" is 1 in 900 million.",
                         "Your average Typing Speed is 50 WPM. Lets bring that down to 0.",
                         "<!> WARNING: SYSTEM PREPARING DESPERATELY TO POWER DOWN <!>");

  public static function sass() {
    $quindex = rand(0, count(Quips::$quips) - 1);
    $remark = Quips::$quips[$quindex];
    return $remark;
  }

}

 ?>
