<?php

require_once 'database.php';
$mysearch = trim($_POST['search']);
$connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

$query = 'SELECT * FROM movies WHERE title LIKE "'.'%'.$mysearch.'%'.'"';

$result_query = mysqli_query($connect, $query);


$movies = mysqli_fetch_all($result_query,MYSQLI_ASSOC);
foreach ($movies as $movie ) {
  echo $movie['title'];
  echo "<br>";
}



  
/*
  echo '<h2> title : '. $row['title'].'</h2><br>';
  echo 'release date : '. $row['realease_date'].'<br>';
  echo 'synposis : '. $row['description'].'<br>';
  echo '<hr>';*/
