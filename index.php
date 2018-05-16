<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png">

    <title>WhatToCook</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  <!--  <link href="floating-labels.css" rel="stylesheet"> -->
  </head>

  <body>

      <div class="text-center mb-4">
        <img class="mb-4" src="logo.png">
         <p>Генератор случайных блюд</p>
      </div>
   <center>  <B> <?php
    # Если кнопка нажата
    if( isset( $_POST['nazvanie_knopki'] ) )
    {
        $array = explode("\n", file_get_contents('FoodDB.txt'));
        $chislo = rand(0, count ($array));
        print_r($array[$chislo]);
    }
?></b>
<form method="POST"><br>
<center>   
        <button type="submit" class="btn btn-warning" name="nazvanie_knopki" value="Сварганить" >Сварганить</button></center> 

</form>
<p class="mt-5 mb-3 text-muted text-center">&copy; 2018</p>
  </body>
</html>
