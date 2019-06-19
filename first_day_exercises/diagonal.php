<html>

<body>
  <?php
  // - Create (dynamically*) a two dimensional list
  //   with the following matrix**. Use a loop!
  //
  //   0 0 0 1
  //   0 0 1 0
  //   0 1 0 0
  //   1 0 0 0
  //
  // - Print this two dimensional list to the console
  //
  // * size should depend on a variable
  // ** Relax, a matrix is just like an array

  function createMultiArray($size) //hogyha a multiarray[i]-be pusholnék, akkor nem kellene előre feltölteni az egészet, mert ha a j-be pusholok, akkor nem fogja a 0. iterációnál látni az 1.elemet, stb
  {
    $multiArray = array_fill(0, $size, []);

    for ($i = $size-1; $i >= 0; $i--) {
      for ($j = 0; $j < $size; $j++) {
        if ($j === $i) {
          array_push($multiArray[$j], 1);
        } else {
          array_push($multiArray[$j], 0);
        }
      }
    }
    return $multiArray;
  }

  print_r(createMultiArray(3));

  ?>
</body>

</html>