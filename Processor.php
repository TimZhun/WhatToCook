 <?php
          $array = explode("\n", file_get_contents('FoodDB.txt'));
          $chislo = rand(0, count ($array));
          print_r($array[$chislo]);
?>