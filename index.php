<?php
  require("page.php");
  $index = new Page();
  $index->content ="\t\t<!-- page content -->\n\t\t
  <div class=\"book\">
    <a href=\"scala-programming-projects/\">
	  <div class=\"book-cover\" id=\"scala-programming-projects-img\" style=\"background-image: url(&quot;scala-programming-projects/img/scala-programming-projects-thumb.jpg&quot;); background-position: left top;\"></div>
    </a>
    <div class=\"book-title-authors-read-by\">
	  <a href=\"scala-programming-projects/\">
		<h3>Scala Programming Projects</h3>
	  </a>
	  <a href=\"scala-programming-projects/\">
		<p>By Mikael Valot, Nicolas Jorand. Read by Jaime Montoya from 1:23 PM July 6, 2021 to 8:21 AM September 10, 2021 GMT.</p>
	  </a>
    </div>
  </div>
  \n";
  $index->Display();
?>

