<?php
  require("../page.php");
  $running = new Page();
  $running->title = "Running";
  $running->metaDescription = "Jaime Montoya's running history since August 2, 2020.";
  $running->content .= "<h1>Running</h1>";
  require("all/all-book-info.php");
  require("2024/2024-book-info.php");
  $running->Display();
?>