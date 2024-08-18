<?php
require ("page.php");
class WeightPage extends Page
{
  public function Display()
  {
    echo "<!doctype html>\n<html lang=\"en\">\n\t<head>\n";
	$this -> WeightCharts();
    $this -> DisplayGoogleAdSense();
    $this -> DisplayGoogleAnalytics();
    $this -> DisplayFontAwesome();
    $this -> DisplayTitle();
    $this -> DisplayMetaViewPort();
    $this -> DisplayFavicon();
    $this -> DisplayMetaCharset();
    $this -> DisplayMetaKeywords();
    $this -> DisplayMetaDescription();
    $this -> DisplayMetaViewport();
    $this -> DisplayStyles();
    echo "\t</head>\n\t<body>\n";
    $this -> DisplayHeader();
    echo "\t\t<div class=\"container-weight\">\n";
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
  public function WeightCharts()
  {
    echo "\t\t<!--Load the AJAX API-->\n";
    echo "\t\t<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>\n";
	echo "\t\t<script type=\"text/javascript\">\n";
	echo "\t\t\t// Load the Visualization API and the corechart package.\n";
	echo "\t\t\tgoogle.charts.load('current', {'packages':['corechart']});\n";
	echo "\t\t\t// Set a callback to run when the Google Visualization API is loaded.\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawWeightChartAllYears);\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawWeightChart2024);\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawWeightChart2023);\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawWeightChart2022);\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawWeightChart2021);\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawWeightChart2020);\n";
	echo "\t\t\tgoogle.charts.setOnLoadCallback(drawWeightChart2019);\n";
	echo "\t\t\t// Callback that creates and populates a data table, instantiates the pie chart, passes in the data and draws it.\n";
	echo "\t\t\tfunction drawWeightChartAllYears() {\n";
	echo "\t\t\t\t// Create the data table.\n";
	echo "\t\t\t\tvar data = new google.visualization.DataTable();\n";
	echo "\t\t\t\tdata.addColumn('string', 'Year');\n";
	echo "\t\t\t\tdata.addColumn('number', 'Kg');\n";
	echo "\t\t\t\tdata.addRows([\n";
	echo "\t\t\t\t\t['2019',75],\n";
	echo "\t\t\t\t\t['2020',66.44],\n";
	echo "\t\t\t\t\t['2021',59.25],\n";
	echo "\t\t\t\t\t['2022',57.4],\n";
	echo "\t\t\t\t\t['2023',57.43],\n";
	echo "\t\t\t\t\t['2024',56.96]\n";
	echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {'title':'Jaime Montoya\'s weight history by year'};\n";
	echo "\t\t\t\tbarsVisualization = new google.visualization.ColumnChart(document.getElementById('weight-all-years'));\n";
	echo "\t\t\t\tbarsVisualization.draw(data, options);\n";
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction drawWeightChart2024() {\n";
	echo "\t\t\t\t// Create the data table.\n";
	echo "\t\t\t\tvar data = new google.visualization.DataTable();\n";
	echo "\t\t\t\tdata.addColumn('string', 'Month');\n";
	echo "\t\t\t\tdata.addColumn('number', 'Kg');\n";
	echo "\t\t\t\tdata.addRows([\n";
	echo "\t\t\t\t\t['Jan',56.04],\n";
	echo "\t\t\t\t\t['Feb',56.19],\n";
	echo "\t\t\t\t\t['Mar',57.44],\n";
	echo "\t\t\t\t\t['Apr',57.17],\n";
	echo "\t\t\t\t\t['May',57.01],\n";
	echo "\t\t\t\t\t['Jun',57.57],\n";
	echo "\t\t\t\t\t['Jul',56.69],\n";
	echo "\t\t\t\t\t['Aug',57.9]\n";
	echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {'title':'Jaime Montoya\'s 2024 weight history by month'};\n";
	echo "\t\t\t\tbarsVisualization = new google.visualization.ColumnChart(document.getElementById('weight-2024'));\n";
	echo "\t\t\t\tbarsVisualization.draw(data, options);\n";
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction drawWeightChart2023() {\n";
	echo "\t\t\t\t// Create the data table.\n";
	echo "\t\t\t\tvar data = new google.visualization.DataTable();\n";
	echo "\t\t\t\tdata.addColumn('string', 'Month');\n";
	echo "\t\t\t\tdata.addColumn('number', 'Kg');\n";
	echo "\t\t\t\tdata.addRows([\n";
	echo "\t\t\t\t\t['Jan',58.56],\n";
	echo "\t\t\t\t\t['Feb',57.77],\n";
	echo "\t\t\t\t\t['Mar',57.18],\n";
	echo "\t\t\t\t\t['Apr',58.1],\n";
	echo "\t\t\t\t\t['May',57.28],\n";
	echo "\t\t\t\t\t['Jun',58.37],\n";
	echo "\t\t\t\t\t['Jul',58.24],\n";
	echo "\t\t\t\t\t['Aug',57.35],\n";
	echo "\t\t\t\t\t['Sep',57.45],\n";
	echo "\t\t\t\t\t['Oct',56.65],\n";
	echo "\t\t\t\t\t['Nov',56.45],\n";
	echo "\t\t\t\t\t['Dec',55.16]\n";
	echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {'title':'Jaime Montoya\'s 2023 weight history by month'};\n";
	echo "\t\t\t\tbarsVisualization = new google.visualization.ColumnChart(document.getElementById('weight-2023'));\n";
	echo "\t\t\t\tbarsVisualization.draw(data, options);\n";
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction drawWeightChart2022() {\n";
	echo "\t\t\t\t// Create the data table.\n";
	echo "\t\t\t\tvar data = new google.visualization.DataTable();\n";
	echo "\t\t\t\tdata.addColumn('string', 'Month');\n";
	echo "\t\t\t\tdata.addColumn('number', 'Kg');\n";
	echo "\t\t\t\tdata.addRows([\n";
	echo "\t\t\t\t\t['Jan',57.02],\n";
	echo "\t\t\t\t\t['Feb',56.61],\n";
	echo "\t\t\t\t\t['Mar',57.94],\n";
	echo "\t\t\t\t\t['Apr',59.07],\n";
	echo "\t\t\t\t\t['May',58.66],\n";
	echo "\t\t\t\t\t['Jun',56.97],\n";
	echo "\t\t\t\t\t['Jul',56.09],\n";
	echo "\t\t\t\t\t['Aug',55.77],\n";
	echo "\t\t\t\t\t['Sep',57.43],\n";
	echo "\t\t\t\t\t['Oct',57.45],\n";
	echo "\t\t\t\t\t['Nov',58.23],\n";
	echo "\t\t\t\t\t['Dec',59.33]\n";
	echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {'title':'Jaime Montoya\'s 2022 weight history by month'};\n";
	echo "\t\t\t\tbarsVisualization = new google.visualization.ColumnChart(document.getElementById('weight-2022'));\n";
	echo "\t\t\t\tbarsVisualization.draw(data, options);\n";
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction drawWeightChart2021() {\n";
	echo "\t\t\t\t// Create the data table.\n";
	echo "\t\t\t\tvar data = new google.visualization.DataTable();\n";
	echo "\t\t\t\tdata.addColumn('string', 'Month');\n";
	echo "\t\t\t\tdata.addColumn('number', 'Kg');\n";
	echo "\t\t\t\tdata.addRows([\n";
	echo "\t\t\t\t\t['Jan',63.05],\n";
	echo "\t\t\t\t\t['Feb',60.96],\n";
	echo "\t\t\t\t\t['Mar',59.85],\n";
	echo "\t\t\t\t\t['Apr',59.05],\n";
	echo "\t\t\t\t\t['May',58.57],\n";
	echo "\t\t\t\t\t['Jun',58.5],\n";
	echo "\t\t\t\t\t['Jul',57.94],\n";
	echo "\t\t\t\t\t['Aug',57.35],\n";
	echo "\t\t\t\t\t['Sep',57.37],\n";
	echo "\t\t\t\t\t['Oct',57.91],\n";
	echo "\t\t\t\t\t['Nov',58.79],\n";
	echo "\t\t\t\t\t['Dec',58.07]\n";
	echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {'title':'Jaime Montoya\'s 2021 weight history by month'};\n";
	echo "\t\t\t\tbarsVisualization = new google.visualization.ColumnChart(document.getElementById('weight-2021'));\n";
	echo "\t\t\t\tbarsVisualization.draw(data, options);\n";
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction drawWeightChart2020() {\n";
	echo "\t\t\t\t// Create the data table.\n";
	echo "\t\t\t\tvar data = new google.visualization.DataTable();\n";
	echo "\t\t\t\tdata.addColumn('string', 'Month');\n";
	echo "\t\t\t\tdata.addColumn('number', 'Km');\n";
	echo "\t\t\t\tdata.addRows([\n";
	echo "\t\t\t\t\t['Sep',68.19],\n";
	echo "\t\t\t\t\t['Oct',66.16],\n";
	echo "\t\t\t\t\t['Nov',65.18],\n";
	echo "\t\t\t\t\t['Dec',63.9]\n";
	echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {'title':'Jaime Montoya\'s 2020 weight history by month'};\n";
	echo "\t\t\t\tbarsVisualization = new google.visualization.ColumnChart(document.getElementById('weight-2020'));\n";
	echo "\t\t\t\tbarsVisualization.draw(data, options);\n";
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction drawWeightChart2019() {\n";
	echo "\t\t\t\t// Create the data table.\n";
	echo "\t\t\t\tvar data = new google.visualization.DataTable();\n";
	echo "\t\t\t\tdata.addColumn('string', 'Month');\n";
	echo "\t\t\t\tdata.addColumn('number', 'Km');\n";
	echo "\t\t\t\tdata.addRows([\n";
	echo "\t\t\t\t\t['Oct',75]\n";
	echo "\t\t\t\t]);\n";
	echo "\t\t\t\t// Set chart options\n";
	echo "\t\t\t\tvar options = {'title':'Jaime Montoya\'s 2019 weight history by month'};\n";
	echo "\t\t\t\tbarsVisualization = new google.visualization.ColumnChart(document.getElementById('weight-2019'));\n";
	echo "\t\t\t\tbarsVisualization.draw(data, options);\n";
	echo "\t\t\t\t// Add our over/out handlers.\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseover', barMouseOver);\n";
	echo "\t\t\t\tgoogle.visualization.events.addListener(barsVisualization, 'onmouseout', barMouseOut);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction barMouseOver(e) {\n";
	echo "\t\t\t\tbarsVisualization.setSelection([e]);\n";
	echo "\t\t\t}\n";
	echo "\t\t\tfunction barMouseOut(e) {\n";
	echo "\t\t\t\tbarsVisualization.setSelection([{'row': null, 'column': null}]);\n";
	echo "\t\t\t}\n";
	echo "\t\t</script>\n";
  }
}
?>