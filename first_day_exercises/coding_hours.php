<html>
  <body> 
    <?php
    
      // An average Green Fox attendee codes 6 hours daily
      // The semester is 17 weeks long
      //
      // Print how many hours is spent with coding in a semester by an attendee,
      // if the attendee only codes on workdays.
      //
      // Print the percentage of the coding hours in the semester if the average
      // working hours weekly is 52
  
      function codingHours(){
        $codingPerDay = 6;
        $workingDays = 17 * 5;
        $percentageOfCodingHours = ($workingDays * $codingPerDay) / (52 * 17) * 100;
        $percentageOfCodingHours = number_format((float)$percentageOfCodingHours, 2, '.', '');
        return $workingDays * $codingPerDay . " hours are spent with coding in a semester by an attendee " . "and the percentage of coding hours is: $percentageOfCodingHours %";
      }

      echo codingHours();

    ?>
  </body>

  </html>