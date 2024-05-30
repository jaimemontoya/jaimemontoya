<?php
  require("../page.php");
  $index = new Page();
  $index->title = "Blog";
  $index->metaDescription = "Jaime Montoya's blog featuring software technical documentation related to web hosting, web development, data analysis, and data migration.";
  $index->content .= "<h1>Blog</h1><p>Software technical documentation blog for myself and the world</p>";
  require("2024/05/03/16/18/20240503-1618-book-info.php");
  require("2024/04/22/20/51/20240422-2051-book-info.php");
  require("2024/03/15/11/53/20240315-1153-book-info.php");
  require("2024/01/17/02/52/20240117-0252-book-info.php");
  require("2024/01/16/02/10/20240116-0210-book-info.php");
  require("2024/01/16/01/50/20240116-0150-book-info.php");
  require("2024/01/12/06/49/20240112-0649-book-info.php");
  require("2024/01/11/06/15/20240111-0615-book-info.php");
  require("2023/12/31/06/14/20231231-0614-book-info.php");
  require("2023/12/17/11/41/20231217-1141-book-info.php");
  require("2023/12/12/05/59/20231212-0559-book-info.php");
  require("2023/12/10/05/59/20231210-0559-book-info.php");
  require("2023/11/29/02/48/20231129-0248-book-info.php");
  require("2023/11/25/17/00/20231125-1700-book-info.php");
  require("2023/11/25/03/19/20231125-0319-book-info.php");
  require("2023/11/21/02/20/20231121-0220-book-info.php");
  require("2023/11/17/13/08/20231117-1308-book-info.php");
  require("2023/10/30/21/58/20231030-2158-book-info.php");
  require("2023/10/17/23/21/20231017-2321-book-info.php");
  require("2023/09/24/22/57/20230924-2257-book-info.php");
  require("2023/09/21/20/04/20230921-2004-book-info.php");
  require("2023/09/21/18/09/20230921-1809-book-info.php");
  $index->Display();
?>
