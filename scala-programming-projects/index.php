<?php
  require("../page.php");
  $scala_programming_projects = new Page();
  /*$scala_programming_projects->content ="\t\t<!-- page content -->
            <div class=\"book\">
                <a href=\"scala-programming-projects/\">
	                <div class=\"book-cover\" id=\"scala-programming-projects-img\"></div>
                </a>
                <div class=\"book-title-authors-read-by\">
	                <a href=\"scala-programming-projects/\">
		                <span>Scala Programming Projects</span>
	                </a>
	                <a href=\"scala-programming-projects/\">
		                <p>By Mikael Valot, Nicolas Jorand. Read by Jaime Montoya from 1:23 PM July 6, 2021 to 8:21 AM September 10, 2021 GMT.</p>
	                </a>
                </div>
            </div>\n";*/
  require("scala-programming-projects-book-info.php");
  $scala_programming_projects->Display();
?>

