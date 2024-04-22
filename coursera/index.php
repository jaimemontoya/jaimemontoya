<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Coursera";
  $index->metaDescription = "Coursera courses successfully completed by Jaime Montoya.";
  $index->content .= "<h1>Coursera</h1>";
  require("explore-core-data-concepts-microsoft-azure/explore-core-data-concepts-microsoft-azure-book-info.php");
  require("ielts-writing/ielts-writing-book-info.php");
  require("introduction-to-marketing/introduction-to-marketing-book-info.php");
  $index->Display();
?>
