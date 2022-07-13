<?php

require_once "class/class.php";

$movie1 = new Movie("Matrix", "Fantasy/Action", 1999);
$movie2 = new Movie("The chocolate factory", "Fantasy", 2005);

$movie1->printMovie();
$movie2->printMovie();

