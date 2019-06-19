<html>

<body>
  <?php

  /* class telephoneBook
  { }

  $telephoneBook = new telephoneBook();

  $telephoneBook->WilliamALathan = "405-709-1865";

  print_r($telephoneBook);
  */

  //de mivel így nem lehet szóközös kulcsokat létrehozni, a másik megoldás:

  $telephoneBook = array(
    "William A. Lathan" => "405-709-1865",
    "John K. Miller" => "402-247-8568",
    "Hortensia E. Foster" => "606-481-6467",
    "Amanda D. Newland" => "319-243-5613",
    "Brooke P. Askew" => "307-687-2982"
  );

  print_r($telephoneBook);

  function findPhoneNumber($name, $array)
  {
    foreach ($array as $key => $value) {
      if ($key === $name) {
        return $value;
      } else {
        return "We don't know this person's phone number.";
      }
    }
  }

  function findName($number, $array)
  {
    foreach ($array as $key => $value) {
      if ($value === $number) {
        return $key;
      }
    }
  }

  echo findPhoneNumber("Chris E. Myers", $telephoneBook);
  echo findName("307-687-2982", $telephoneBook);

  ?>
</body>

</html>