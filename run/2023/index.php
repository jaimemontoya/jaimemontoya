<?php
  require("../../running.php");
  $running = new RunningPage();
  $running->title = "Jaime Montoya's running history by year";
  $running->parentPage = "Running";
  $running->metaDescription = "Jaime Montoya's 2023 running history by month.";
  require("2023-book-info.php");
  require("chart.php");
  $running->Display();
?>