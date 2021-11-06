<?php
class Page
{
  // class Page's attributes
  public $content;
  public $title = "Jaime Montoya";
  public $metaKeywords = "Jaime Montoya's website featuring books I have read, courses I have taken, my self-discipline agenda, r&eacute;&eacute; and achievements.";
  public $metaDescription = "Scala programmer specialist in software development building ETL processes for big data applications.";
  public $buttons = array("Home" => "home.php", "Self-discipline" => "self-discipline.php", "R&eacute;sum&eacute;" => "resume.php", "Achievements" => "achievements.php");
  // class Page's operations
  public function __set($name, $value)
  {
    $this->$name = $value;
  }  
  public function Display()
  {
    echo "<html lang=\"en-CA\">\n\t<head>\n";
    $this -> DisplayTitle();
    $this -> DisplayMetaKeywords();
	$this -> DisplayMetaDescription();
    echo "\t</head>\n\t<body>\n";
    $this -> DisplayHeader();
    echo $this->content;
    echo "\t</body>\n</html>\n";
  }
  public function DisplayTitle()
  {
    echo "\t\t<title>".$this->title."</title>\n";
  }
  public function DisplayMetaKeywords()
  {
    echo "\t\t<meta name='keywords' content='".$this->metaKeywords."' />\n";
  }
  public function DisplayMetaDescription()
  {
    echo "\t\t<meta name='description' content='".$this->metaDescription."' />\n";
  }
  public function DisplayHeader()
  {
    echo "\t\t<!-- page header -->\n\t\t<header>\n\t\t\t<div class=\"container\">\n\t\t\t\t<h1>Jaime Montoya</h1>\n\t\t\t</div>\t\t</header>\n";
  }
}
?>