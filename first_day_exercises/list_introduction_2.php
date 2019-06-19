  <?php

  $listA = ["Durian", "Avocado", "Blueberries", "Apple", "Lychee"];
  $listB = $listA;

  echo array_search("Durian", $listA) !== false ? "yes" : "no";

  //le kell ellenőrizni false-ra is, mert az array_search visszatér az index-szel, és ha 0, akkor false lesz kiértékelve

  // print_r($listB);

  function removeElement($array, $elementToRemove)
  {
    if (($key = array_search($elementToRemove, $array)) !== false) {
      unset($array[$key]);
    }
    return $array;
  }

  print_r(removeElement($listB, "Durian"));

  ?>