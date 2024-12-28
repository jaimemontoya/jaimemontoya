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
	echo "\t\t\tgoogle.charts.load('current', {'packages':['line']});\n";
	echo "\t\t\t// Set a callback to run when the Google Visualization API is loaded.\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawRichestCompaniesChart);\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawRichestPeopleChart);\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawJaimeMontoyaCapitalChart);\n";
	echo "\t\t\t// Callback that creates and populates a data table, instantiates the bar chart, passes in the data and draws it.\n";
	echo "\t\t\tfunction drawRichestCompaniesChart() {\n";	
    echo "\t\t\t\t// Create the data table.\n";
    echo "\t\t\t\tconst data = google.visualization.arrayToDataTable([\n";
    echo "\t\t\t\t\t['Company', 'Trillions'],\n";
    echo "\t\t\t\t\t['AAPL',3.86],\n";
    echo "\t\t\t\t\t['NVDA',3.36],\n";
    echo "\t\t\t\t\t['MSFT',3.2],\n";
    echo "\t\t\t\t\t['GOOG',2.37],\n";
    echo "\t\t\t\t\t['AMZN',2.35],\n";
    echo "\t\t\t\t\t['2222',1.8],\n";
    echo "\t\t\t\t\t['META',1.51],\n";
    echo "\t\t\t\t\t['TSLA',1.39],\n";
    echo "\t\t\t\t\t['AVGO',1.13],\n";
    echo "\t\t\t\t\t['BRK.A',0.99]\n";
    echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {\n";
    echo "\t\t\t\t\t'title':'Ten richest companies, last updated 2024-Dec-27',\n";
	echo "\t\t\t\t\tlegend: 'none',\n";
    echo "\t\t\t\t\thAxis: {\n";
	echo "\t\t\t\t\t\tgridlines: {\n";
    echo "\t\t\t\t\t\t\tcolor: '#9E9E9E',\n";
    echo "\t\t\t\t\t\t\tcount: 1\n";
    echo "\t\t\t\t\t\t},\n";
    echo "\t\t\t\t\tvAxis: {\n";
    echo "\t\t\t\t\t\ttitle: 'Trillions (USD)',\n";
    echo "\t\t\t\t\t\ttitleTextStyle: {color: '#0f0', italic: false}\n";
    echo "\t\t\t\t\t},\n";
    echo "\t\t\t\t\t\tpointSize: 2,\n";
    echo "\t\t\t\t\t\tformat: 'd MMM yyyy',\n";
    echo "\t\t\t\t\t\ttitle: '',\n";
    echo "\t\t\t\t\t\ttitlePosition: 'none',\n";
    echo "\t\t\t\t\t\ttextStyle: {color: '#0f0'}\n";
    echo "\t\t\t\t\t},\n";
    echo "\t\t\t\t\tcolors: ['#0f0'],\n";
	echo "\t\t\t\t\tchartArea: {\n";
    echo "\t\t\t\t\t\tbackgroundColor: '#000'\n";
    echo "\t\t\t\t\t},\n";
    echo "\t\t\t\t\ttitleTextStyle:{\n";
    echo "\t\t\t\t\t\tbold: true,\n";
    echo "\t\t\t\t\t\tcolor: '#0f0',\n";
    echo "\t\t\t\t\t\tfontName: 'Arial'\n";
    echo "\t\t\t\t\t},\n";
    echo "\t\t\t\t\tbackgroundColor: {\n";
    echo "\t\t\t\t\t\tfill: '#000',\n";
    echo "\t\t\t\t\t\tfillOpacity: 1,stroke:'#0f0'\n";
    echo "\t\t\t\t\t}\n";
	echo "\t\t\t\t}\n";
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
    echo "\t\t\t\t\t['Musk',436.8],\n";
    echo "\t\t\t\t\t['Bezos',237.5],\n";
    echo "\t\t\t\t\t['Ellison',213.3],\n";
    echo "\t\t\t\t\t['Zuckerberg',207.4],\n";
    echo "\t\t\t\t\t['Arnault',169.3],\n";
    echo "\t\t\t\t\t['Page',158.8],\n";
    echo "\t\t\t\t\t['Brin',151.5],\n";
    echo "\t\t\t\t\t['Buffet',142.5],\n";
    echo "\t\t\t\t\t['Ballmer',126.3],\n";
    echo "\t\t\t\t\t['Huang',119.6]\n";
    echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {\n";
	
	echo "\t\t\t\t\tlegend: 'none',\n";
    echo "\t\t\t\t\thAxis: {\n";
	echo "\t\t\t\t\t\tgridlines: {\n";
    echo "\t\t\t\t\t\t\tcolor: '#9E9E9E',\n";
    echo "\t\t\t\t\t\t\tcount: 1\n";
    echo "\t\t\t\t\t\t},\n";
    echo "\t\t\t\t\t\tpointSize: 2,\n";
    echo "\t\t\t\t\t\tformat: 'd MMM yyyy',\n";
    echo "\t\t\t\t\t\ttitle: '',\n";
    echo "\t\t\t\t\t\ttitlePosition: 'none',\n";
    echo "\t\t\t\t\t\ttextStyle: {color: '#0f0'}\n";
    echo "\t\t\t\t\t},\n";
    echo "\t\t\t\t\tvAxis: {\n";
    echo "\t\t\t\t\t\ttitle: 'Capital (USD)',\n";
    echo "\t\t\t\t\t\ttextStyle: {color: '#0f0', italic: false}\n";
    echo "\t\t\t\t\t}\n";
	echo "\t\t\t\t}\n";
	

	
    echo "\t\t\t\t// Draw\n";
	echo "\t\t\t\tconst chart = new google.visualization.ColumnChart(document.getElementById('richest-people'));\n";
	echo "\t\t\t\tchart.draw(data, options);\n";
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction drawJaimeMontoyaCapitalChart() {\n";	
    echo "\t\t\t\t// Create the data table.\n";
    echo "\t\t\t\tvar data = new google.visualization.DataTable();\n";
    echo "\t\t\t\tdata.addColumn('date', 'X');\n";
    echo "\t\t\t\tdata.addColumn('number', 'Capital (USD)');\n";
    echo "\t\t\t\tdata.addRows([\n";
    echo "\t\t\t\t\t[new Date(2024, 4, 5), 4023.84],\n";
    echo "\t\t\t\t\t[new Date(2024, 4, 6), 4023.96],\n";
    echo "\t\t\t\t\t[new Date(2024, 4, 7), 4028.48],\n";
    echo "\t\t\t\t\t[new Date(2024, 4, 8), 5033.9],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 9), 5031.05],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 10), 5034.35],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 11), 5034.35],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 12), 5034.35],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 13), 5034.35],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 14), 5038.47],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 15), 5042.35],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 16), 6052.84],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 17), 7061.35],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 18), 7055.88],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 19), 7055.88],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 20), 7055.88],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 21), 7062.59],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 22), 7061.02],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 23), 7063.33],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 24), 7059.43],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 25), 7061.13],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 26), 7061.13],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 27), 7061.13],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 28), 7062.76],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 29), 7064.2],\n";
    echo "\t\t\t\t\t[new Date(2024, 4 , 30), 7050.13],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 1), 7053.46],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 2), 7053.46],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 3), 7053.46],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 4), 7069.97],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 5), 7070.66],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 6), 7084.36],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 7), 7087.13],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 8), 7087.13],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 9), 7087.13],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 10), 7084.38],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 11), 7083.93],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 12), 7105.59],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 13), 7105.59],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 14), 7107.15],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 15), 7106.75],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 16), 7106.75],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 17), 7106.75],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 18), 7106.58],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 19), 7107.24],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 20), 7120.28],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 21), 7119.85],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 22), 7115.04],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 23), 7115.04],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 24), 7115.25],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 25), 120.82],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 26), 120.82],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 27), 120.82],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 28), 120.83],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 29), 120.79],\n";
    echo "\t\t\t\t\t[new Date(2024, 5 , 30), 120.79],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 1), 120.79],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 2), 2115.74],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 3), 2117.44],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 4), 2124.03],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 5), 2125.71],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 6), 2130.08],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 7), 2130.08],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 8), 2130.08],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 9), 2130.08],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 10), 2130.08],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 11), 2130.08],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 12), 2130.08],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 13), 2130.08],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 14), 2130.08],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 15), 2130.08],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 16), 2130.08],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 17), 2130.08],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 18), 2141.55],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 19), 2138.27],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 20), 2132.45],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 21), 2132.45],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 22), 2132.45],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 23), 2134.43],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 24), 2137.46],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 25), 2128.76],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 26), 2124.11],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 27), 2124.11],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 28), 2124.11],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 29), 2127.46],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 30), 2127.9],\n";
    echo "\t\t\t\t\t[new Date(2024, 6 , 31), 3627.9],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 1), 3645.92],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 2), 3642.11],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 3), 3621.89],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 4), 3621.89],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 5), 3621.89],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 6), 3621.89],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 7), 3621.89],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 8), 3609.57],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 9), 3612.43],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 10), 3612.43],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 11), 3620.82],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 12), 3620.82],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 13), 3625.72],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 14), 3640.56],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 15), 3649.82],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 16), 3657.77],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 17), 3664.47],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 18), 3664.47],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 19), 3664.59],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 20), 3674.99],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 21), 3679.47],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 22), 3682.15],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 23), 3678.69],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 24), 3685.54],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 25), 3685.54],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 26), 3685.54],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 27), 3685.26],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 28), 3683.51],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 29), 3682.58],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 30), 3683.14],\n";
    echo "\t\t\t\t\t[new Date(2024, 7 , 31), 3683.14],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 1), 3683.14],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 2), 3683.14],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 3), 3685.44],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 4), 3677.22],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 5), 5984.6],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 6), 5981.92],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 7), 5972.15],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 8), 5972.15],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 9), 5972.15],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 10), 5939.51],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 11), 5947.05],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 12), 5949.32],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 13), 5970.76],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 14), 5985.74],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 15), 5985.74],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 16), 5985.74],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 17), 5991.09],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 18), 5995.54],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 19), 5986.96],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 20), 6009.65],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 21), 6005.12],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 22), 6005.12],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 23), 6005.12],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 24), 6005.12],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 25), 6015.14],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 26), 6014.4],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 27), 6029.22],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 28), 6030.2],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 29), 6030.2],\n";
    echo "\t\t\t\t\t[new Date(2024, 8 , 30), 6030.2],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 1), 6027.01],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 2), 6024.09],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 3), 6575.54],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 4), 6566.7],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 5), 6567.18],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 6), 6567.18],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 7), 6567.18],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 8), 6564.29],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 9), 6562.75],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 10), 6566.52],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 11), 6568.72],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 12), 6573.68],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 13), 6573.68],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 14), 6573.68],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 15), 6583.96],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 16), 6582.72],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 17), 6575.07],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 18), 6578.63],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 19), 6582.44],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 20), 6582.44],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 21), 6568.3],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 22), 6568.3],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 23), 6562.02],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 24), 6550.71],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 25), 6552.61],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 26), 6557.44],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 27), 6557.44],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 28), 6557.44],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 29), 6555.6],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 30), 6556.34],\n";
    echo "\t\t\t\t\t[new Date(2024, 9 , 31), 6556.83],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 1), 6528.27],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 2), 6530.26],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 3), 6530.26],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 4), 6530.26],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 5), 8197.31],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 6), 8209.15],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 7), 8227.13],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 8), 8262.07],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 9), 8266.51],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 10), 8266.51],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 11), 8266.51],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 12), 8271.38],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 13), 8252.19],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 14), 8244.44],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 15), 8240.11],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 16), 8212.43],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 17), 8212.43],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 18), 8212.43],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 19), 8216.17],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 20), 8219.61],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 21), 8423.38],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 22), 8436.01],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 23), 8436.01],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 24), 8442.45],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 25), 8442.45],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 26), 8455.57],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 27), 8454.57],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 28), 8455.3],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 29), 8455.3],\n";
    echo "\t\t\t\t\t[new Date(2024, 10 , 30), 8475.7],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 1), 8475.7],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 2), 8475.7],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 3), 9984.27],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 4), 9995.32],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 5), 10013.23],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 6), 10013.72],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 7), 10017.8],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 8), 10017.8],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 9), 10017.8],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 10), 10014.5],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 11), 9996.64],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 12), 10006.25],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 13), 9998.1],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 14), 9980.21],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 15), 9980.21],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 16), 9980.21],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 17), 9976.67],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 18), 9966.36],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 19), 9952.0],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 20), 9895.65],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 21), 9913.24],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 22), 9913.24],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 23), 9913.24],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 24), 9922.06],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 25), 9922.81],\n";
    echo "\t\t\t\t\t[new Date(2024, 11 , 26), 9922.97]\n";
    echo "\t\t\t\t]);\n";
    echo "\t\t\t\tvar options = {\n";
    echo "\t\t\t\t\t'title':'Jaime Montoya\'s capital from 2024-May-05 to 2024-Dec-27',\n";
    echo "\t\t\t\t\tbackgroundColor: {\n";
    echo "\t\t\t\t\t\tfill: '#000',\n";
    echo "\t\t\t\t\t\tfillOpacity: 1,stroke:'#0f0'\n";
    echo "\t\t\t\t\t},\n";
	echo "\t\t\t\t\tchartArea: {\n";
    echo "\t\t\t\t\t\tbackgroundColor: '#000'\n";
    echo "\t\t\t\t\t},\n";
    echo "\t\t\t\t\ttitleTextStyle:{\n";
    echo "\t\t\t\t\t\tbold: true,\n";
    echo "\t\t\t\t\t\tcolor: '#0f0',\n";
    echo "\t\t\t\t\t\tfontName: 'Arial'\n";
    echo "\t\t\t\t\t},\n";
    echo "\t\t\t\t\tcolors: ['#0f0'],\n";
    echo "\t\t\t\t\tlineWidth: 3,\n";
    echo "\t\t\t\t\tlegend: {\n";
    echo "\t\t\t\t\t\tposition: \"none\"\n";
    echo "\t\t\t\t\t},\n";
    echo "\t\t\t\t\thAxis: {\n";
	echo "\t\t\t\t\t\tgridlines: {\n";
    echo "\t\t\t\t\t\t\tcolor: '#9E9E9E',\n";
    echo "\t\t\t\t\t\t\tcount: 1\n";
    echo "\t\t\t\t\t\t},\n";
    echo "\t\t\t\t\t\tpointSize: 2,\n";
    echo "\t\t\t\t\t\tformat: 'd MMM yyyy',\n";
    echo "\t\t\t\t\t\ttitle: '',\n";
    echo "\t\t\t\t\t\ttitlePosition: 'none',\n";
    echo "\t\t\t\t\t\ttextStyle: {color: '#0f0'}\n";
    echo "\t\t\t\t\t},\n";
    echo "\t\t\t\t\tvAxis: {\n";
    echo "\t\t\t\t\t\ttitle: 'Capital (USD)',\n";
    echo "\t\t\t\t\t\ttextStyle: {color: '#0f0'}\n";
    echo "\t\t\t\t\t\ttitleTextStyle: {color: '#0f0', italic: false}\n";
    echo "\t\t\t\t\t}\n";
    echo "\t\t\t\t}\n";
    echo "\t\t\t\tvar chart = new google.charts.Line(document.getElementById('jaime-montoya-capital'));\n";
    echo "\t\t\t\tchart.draw(data, google.charts.Line.convertOptions(options));\n";
    echo "\t\t\t};";
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