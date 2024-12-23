<?php
require ("page.php");
class HomePage extends Page
{
  public function Display()
  {
    echo "<!doctype html>\n<html lang=\"en\">\n\t<head>\n";
	$this -> RichestCompaniesAndPeopleCharts();
    $this -> DisplayGoogleAdSense();
    $this -> DisplayGoogleAnalytics();
    $this -> DisplayFontAwesome();
    $this -> DisplayTitle();
    $this -> DisplayMetaViewPort();
    $this -> DisplayFavicon();
    $this -> DisplayMetaCharset();
    $this -> DisplayMetaKeywords();
    $this -> DisplayMetaDescription();
    $this -> DisplayStyles();
    echo "\t</head>\n\t<body>\n";
    $this -> DisplayHeader();
    echo "\t\t<div class=\"container-home\">\n";
	echo $this -> DisplayBreadcrumb($this->title, $this->parentPage, $this->parentPages);
    echo $this->content;
    echo "\t\t</div>\n";
	$this -> DisplayFooter();
    echo "\t</body>\n</html>\n";
  }
  public function DisplayStyles()
  {
    echo "\t\t<link href=\"/styles.css\" type=\"text/css\" rel=\"stylesheet\">\n";
    echo "\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Carter+One\">\n";
  }
  public function RichestCompaniesAndPeopleCharts()
  {
    echo "\t\t<!--Load the AJAX API-->\n";
    echo "\t\t<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>\n";
	echo "\t\t<script type=\"text/javascript\">\n";
	echo "\t\t\t// Load the Visualization API and the corechart package.\n";
	echo "\t\t\tgoogle.charts.load('current', {'packages':['corechart']});\n";
	echo "\t\t\t// Set a callback to run when the Google Visualization API is loaded.\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawRichestCompaniesChart);\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawRichestPeopleChart);\n";
	echo "\t\t\t// Callback that creates and populates a data table, instantiates the bar chart, passes in the data and draws it.\n";
	echo "\t\t\tfunction drawRichestCompaniesChart() {\n";	
    echo "\t\t\t\t// Create the data table.\n";
    echo "\t\t\t\tconst data = google.visualization.arrayToDataTable([\n";
    echo "\t\t\t\t\t['Company', 'Trillions'],\n";
    echo "\t\t\t\t\t['AAPL',3.84],\n";
    echo "\t\t\t\t\t['NVDA',3.4],\n";
    echo "\t\t\t\t\t['MSFT',3.24],\n";
    echo "\t\t\t\t\t['GOOG',2.39],\n";
    echo "\t\t\t\t\t['AMZN',2.37],\n";
    echo "\t\t\t\t\t['2222',1.86],\n";
    echo "\t\t\t\t\t['META',1.51],\n";
    echo "\t\t\t\t\t['TSLA',1.39],\n";
    echo "\t\t\t\t\t['AVGO',1.08],\n";
    echo "\t\t\t\t\t['BRK.A',0.97]\n";
    echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {'title':'Top ten richest companies'};\n";
    echo "\t\t\t\t// Draw\n";
	echo "\t\t\t\tconst chart = new google.visualization.ColumnChart(document.getElementById('richest-company'));\n";
	echo "\t\t\t\tchart.draw(data, options);\n";
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";
	
	
	echo "\t\t\tfunction drawRichestPeopleChart() {\n";	
    echo "\t\t\t\t// Create the data table.\n";
    echo "\t\t\t\tconst data = google.visualization.arrayToDataTable([\n";
    echo "\t\t\t\t\t['Company', 'Billions'],\n";
    echo "\t\t\t\t\t['Musk',437.5],\n";
    echo "\t\t\t\t\t['Bezos',239.1],\n";
    echo "\t\t\t\t\t['Ellison',212.3],\n";
    echo "\t\t\t\t\t['Zuckerberg',206.9],\n";
    echo "\t\t\t\t\t['Arnault',167.5],\n";
    echo "\t\t\t\t\t['Page',159.9],\n";
    echo "\t\t\t\t\t['Brin',152.6],\n";
    echo "\t\t\t\t\t['Buffet',141.3],\n";
    echo "\t\t\t\t\t['Ballmer',127.4],\n";
    echo "\t\t\t\t\t['Huang',121.1]\n";
    echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {'title':'Top ten richest people'};\n";
    echo "\t\t\t\t// Draw\n";
	echo "\t\t\t\tconst chart = new google.visualization.ColumnChart(document.getElementById('richest-people'));\n";
	echo "\t\t\t\tchart.draw(data, options);\n";
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";	
	
	
	echo "\t\t\tfunction barMouseOver(e) {\n";
	echo "\t\t\t\tchart.setSelection([e]);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction barMouseOut(e) {\n";
	echo "\t\t\tchart.setSelection([{'row': null, 'column': null}]);\n";
	echo "\t\t\t}\n";
	echo "\t\t</script>\n";
  }
}
?>