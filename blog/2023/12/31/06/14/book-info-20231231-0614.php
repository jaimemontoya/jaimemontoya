<?php
  $index->content .= 
           "<p>I wanted to perform multidimensional analysis on the information in my personal finance data mart. In order to achieve that, I needed to define an OLAP cube on top of that database.</p><p>I opened Visual Studio 2017:</p><div><img src=\"/blog/2023/12/31/06/14/img/openVisualStudio2017.jpg\" alt=\"Open Visual Studio 2017\" width=\"584\" height=\"681\"></div><p>I clicked <span class=\"cod\">Project...</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/clickProject.jpg\" alt=\"Click Project...\" width=\"633\" height=\"415\"></div><p>I selected </p><span class=\"cod\">Analysis Services Multidimensional and Data Mining Project</span>. I entered <span class=\"cod\">FinancesDM</span> for the <span class=\"cod\">Name</span> and set the <span class=\"cod\">Location</span> to where I wanted to store the project. I clicked OK to create the project:</p><div><img src=\"/blog/2023/12/31/06/14/img/createProject.jpg\" alt=\"Create Project\" width=\"1300\" height=\"766\"></div><p>I right-clicked the <span class=\"cod\">Data Sources</span> folder in the <span class=\"cod\">Solution Explorer</span> window, and selected <span class=\"cod\">New Data Source...</span> from the context menu:</p><div><img src=\"/blog/2023/12/31/06/14/img/createNewDataSource.jpg\" alt=\"Create new Data Source\" width=\"1918\" height=\"1030\"></div><p>The <span class=\"cod\">Data Source Wizard</span> appeared:</p><div><img src=\"/blog/2023/12/31/06/14/img/dataSourceWizard.jpg\" alt=\"Data Source Wizard\" width=\"1912\" height=\"742\"></div><p>I clicked <span class=\"cod\">Next</span> on the <span class=\"cod\">Welcome to the Data Source Wizard</span> page. The <span class=\"cod\">Select how to define the connection</span> page appeared. I selected <span class=\"cod\">Create a data source based on an existing or new connection</span> and clicked <span class=\"cod\">New...</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/createDataSourceBasedOnNewConnection.jpg\" alt=\"Create Data Source based on new connection\" width=\"620\" height=\"447\"></div><p>I provided my server and database settings corresponding to the data mart that I wanted to use:</p><div><img src=\"/blog/2023/12/31/06/14/img/dataMartServerAndDatabaseSettings.jpg\" alt=\"Data mart server and database settings\" width=\"643\" height=\"649\"></div><p>I selected the <span class=\"cod\">PDDMNB955.Finances.jaimemontoya</span> data connection I previously created, and clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/selectConnectionPreviouslyCreated.jpg\" alt=\"Select Connection previously created\" width=\"619\" height=\"445\"></div><p>The <span class=\"cod\">Impersonation Information</span> page appeared. Because in a previous step show above, I entered a specific SQL Server login in the data connection, and not Windows Authentication, I did not need to worry about impersionation. I clicked <span class=\"cod\">Next</span> (regardless what I had chosen in the following screen, it will not affect me):</p><div><img src=\"/blog/2023/12/31/06/14/img/ignoreImpersonationAndClickNext.jpg\" alt=\"Ignore Impersonation and click Next\" width=\"619\" height=\"445\"></div><p>I entered <span class=\"cod\">FinancesDM</span> for <span class=\"cod\">Data source name</span> and clicked <span class=\"cod\">Finish</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/finishCreationOfNewDataSource.jpg\" alt=\"Finish creation of new Data Source\" width=\"618\" height=\"446\"></div><p>The Data Source for my project was created successfully:</p><div><img src=\"/blog/2023/12/31/06/14/img/newDataSourceCreatedSuccessfully.jpg\" alt=\"New Data Source created successfully\" width=\"1910\" height=\"367\"></div><p>I right-clicked the <span class=\"cod\">Data Source Views</span> folder in the <span class=\"cod\">Solution Explorer</span> window, and selected </span>New Data Source View...</span> from the context menu:</p><div><img src=\"/blog/2023/12/31/06/14/img/createNewDataSourceView.jpg\" alt=\"Create new Data Source View\" width=\"1916\" height=\"1030\"></div><p>The <span class=\"cod\">Data Source View Wizard</span> appeared. I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/showDataSourceViewWizard.jpg\" alt=\"Show Data Source View Wizard\" width=\"1910\" height=\"1020\"></div><p>The <span class=\"cod\">Select a Data Source</span> page appeared. The FinacesDM data source that I created was selected. I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/selectADataSourceForTheView.jpg\" alt=\"Select a Data Source for the View\" width=\"558\" height=\"444\"></div><p>The <span class=\"cod\">Select Tables and Views</span> page appeared.  I moved all of the dimension and fact tables to the <span class=\"cod\">Included objects</span> list by clicking the <span class=\"cod\">>></span> button. I had two fact tables in my list:</p><div><img src=\"/blog/2023/12/31/06/14/img/moveTablesAndViewsToIncludedObjects.jpg\" alt=\"Move Tables and Views to Included objects\" width=\"621\" height=\"629\"></div><p>After moving the objects, I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/continueAfterMovingObjects.jpg\" alt=\"Continue after moving objects\" width=\"620\" height=\"627\"></div><p>The <span class=\"cod\">Completing the Wizard</span> page appeared. I entered <span class=\"cod\">FinancesDM</span> for <span class=\"cod\">Name</span>. I clicked <span class=\"cod\">Finish</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/finishCreationOfDataSourceView.jpg\" alt=\"Finish creation of Data Source View\" width=\"620\" height=\"626\"></div><div>Published: 6:14 AM GMT · Dec 31, 2023</div>\n";
?>
