<html>

<body>
  <?php
  //  Create a function that takes a list of numbers as parameter
  //  Returns a list where the elements are sorted in ascending numerical order
  //  Make a second boolean parameter, if it's `true` sort that list descending

  function bubble($arr)
  {
    for ($i = 0; $i < sizeof($arr); $i++) {
      for ($j = 0; $j < sizeof($arr) - 1; $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
          $temp = $arr[$j];
          $arr[$j] = $arr[$j + 1];
          $arr[$j + 1] = $temp;
        }
      }
    }
    return $arr;
  }

  $array = [9, 1, 8, 2, 7, 3, 6, 4, 5];

  print_r(bubble($array));

  function advancedBubble($arr, $isDescending)
  {
    for ($i = 0; $i < sizeof($arr); $i++) {
      for ($j = 0; $j < sizeof($arr) - 1; $j++) {
        if ($isDescending) {
          if ($arr[$j] < $arr[$j + 1]) {
            switchElements($arr, $j);
          }
        }
        else {
          if ($arr[$j] > $arr[$j + 1]) {
           switchElements($arr, $j);
          }
        }
      }
    }
    return $arr;
  }

  function switchElements($arr, $j){
    $temp = $arr[$j];
    $arr[$j] = $arr[$j + 1];
    $arr[$j + 1] = $temp;
  }

  print_r(advancedBubble($array, true));
  ?>
</body>

</html>