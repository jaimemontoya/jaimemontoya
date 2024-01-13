<?php
  $index->content .= 
           "<p>I wanted to perform multidimensional analysis on the information in my personal finance data mart. In order to achieve that, I needed to define an OLAP cube on top of that database.</p><p>I opened Visual Studio 2017:</p><div><img src=\"/blog/2023/12/31/06/14/img/openVisualStudio2017.jpg\" alt=\"Open Visual Studio 2017\" width=\"584\" height=\"681\"></div><p>I clicked <span class=\"cod\">Project...</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/clickProject.jpg\" alt=\"Click Project...\" width=\"633\" height=\"415\"></div><p>I selected </p><span class=\"cod\">Analysis Services Multidimensional and Data Mining Project</span>. I entered <span class=\"cod\">FinancesDM</span> for the <span class=\"cod\">Name</span> and set the <span class=\"cod\">Location</span> to where I wanted to store the project. I clicked OK to create the project:</p><div><img src=\"/blog/2023/12/31/06/14/img/createProject.jpg\" alt=\"Create Project\" width=\"1300\" height=\"766\"></div><p>I right-clicked the <span class=\"cod\">Data Sources</span> folder in the <span class=\"cod\">Solution Explorer</span> window, and selected <span class=\"cod\">New Data Source...</span> from the context menu:</p><div><img src=\"/blog/2023/12/31/06/14/img/createNewDataSource.jpg\" alt=\"Create new Data Source\" width=\"1918\" height=\"1030\"></div><p>The <span class=\"cod\">Data Source Wizard</span> appeared:</p><div><img src=\"/blog/2023/12/31/06/14/img/dataSourceWizard.jpg\" alt=\"Data Source Wizard\" width=\"1912\" height=\"742\"></div><p>I clicked <span class=\"cod\">Next</span> on the <span class=\"cod\">Welcome to the Data Source Wizard</span> page. The <span class=\"cod\">Select how to define the connection</span> page appeared. I selected <span class=\"cod\">Create a data source based on an existing or new connection</span> and clicked <span class=\"cod\">New...</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/createDataSourceBasedOnNewConnection.jpg\" alt=\"Create Data Source based on new connection\" width=\"620\" height=\"447\"></div><p>I provided my server and database settings corresponding to the data mart that I wanted to use:</p><div><img src=\"/blog/2023/12/31/06/14/img/dataMartServerAndDatabaseSettings.jpg\" alt=\"Data mart server and database settings\" width=\"643\" height=\"649\"></div><p>I selected the <span class=\"cod\">PDDMNB955.Finances.jaimemontoya</span> data connection I previously created, and clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/selectConnectionPreviouslyCreated.jpg\" alt=\"Select Connection previously created\" width=\"619\" height=\"445\"></div><p>The <span class=\"cod\">Impersonation Information</span> page appeared. I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/ignoreImpersonationAndClickNext.jpg\" alt=\"Ignore Impersonation and click Next\" width=\"619\" height=\"445\"></div><p>I entered <span class=\"cod\">FinancesDM</span> for <span class=\"cod\">Data source name</span> and clicked <span class=\"cod\">Finish</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/finishCreationOfNewDataSource.jpg\" alt=\"Finish creation of new Data Source\" width=\"618\" height=\"446\"></div><p>The Data Source for my project was created successfully:</p><div><img src=\"/blog/2023/12/31/06/14/img/newDataSourceCreatedSuccessfully.jpg\" alt=\"New Data Source created successfully\" width=\"1910\" height=\"367\"></div><p>I right-clicked the <span class=\"cod\">Data Source Views</span> folder in the <span class=\"cod\">Solution Explorer</span> window, and selected </span>New Data Source View...</span> from the context menu:</p><div><img src=\"/blog/2023/12/31/06/14/img/createNewDataSourceView.jpg\" alt=\"Create new Data Source View\" width=\"1916\" height=\"1030\"></div><p>The <span class=\"cod\">Data Source View Wizard</span> appeared. I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/showDataSourceViewWizard.jpg\" alt=\"Show Data Source View Wizard\" width=\"1910\" height=\"1020\"></div><p>The <span class=\"cod\">Select a Data Source</span> page appeared. The FinacesDM data source that I created was selected. I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/selectADataSourceForTheView.jpg\" alt=\"Select a Data Source for the View\" width=\"558\" height=\"444\"></div><p>The <span class=\"cod\">Select Tables and Views</span> page appeared.  I moved all of the dimension and fact tables to the <span class=\"cod\">Included objects</span> list by clicking the <span class=\"cod\">>></span> button. I had two fact tables in my list:</p><div><img src=\"/blog/2023/12/31/06/14/img/moveTablesAndViewsToIncludedObjects.jpg\" alt=\"Move Tables and Views to Included objects\" width=\"621\" height=\"629\"></div><p>After moving the objects, I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/continueAfterMovingObjects.jpg\" alt=\"Continue after moving objects\" width=\"620\" height=\"627\"></div><p>The <span class=\"cod\">Completing the Wizard</span> page appeared. I entered <span class=\"cod\">FinancesDM</span> for <span class=\"cod\">Name</span>. I clicked <span class=\"cod\">Finish</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/finishCreationOfDataSourceView.jpg\" alt=\"Finish creation of Data Source View\" width=\"620\" height=\"626\"></div><p>My View was created successfully:</p><div><img src=\"/blog/2023/12/31/06/14/img/viewCreatedSuccessfully.jpg\" alt=\"View created successfully\" width=\"1915\" height=\"1027\"></div><p>I right-clicked the <span class=\"cod\">Cubes</span> folder in the <span class=\"cod\">Solution Explorer</span> window, and selected <span class=\"cod\">New Cube</span> from the context menu:</p><div><img src=\"/blog/2023/12/31/06/14/img/createNewCube.jpg\" alt=\"Create new Cube\" width=\"1917\" height=\"1030\"></div><p>The <span class=\"cod\">Cube Wizard</span> appeared. I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/cubeWizard.jpg\" alt=\"Cube Wizard\" width=\"1910\" height=\"1027\"></div><p>The <span class=\"cod\">Select Creation Method</span> page appeared. I kept <span class=\"cod\">Use existing tables</span> selected. The I Click <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/useExistingTables.jpg\" alt=\"Use existing tables\" width=\"555\" height=\"442\"></div><p>The <span class=\"cod\">Select Measure Group Tables</span> page appeared. The <span class=\"cod\">FinancesDM</span> data source view that I created was selected. I checked <span class=\"cod\">FactPurchases</span> in the <span class=\"cod\">Measure group tables</span> area. I initially left the measures in the FactSales, FactPurchasesXDimCategory and FactSalesXDimCategory tables out of the cube to add them in at a later time. I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/selectMeasureGroupTable.jpg\" alt=\"Select Measure Group Table\" width=\"557\" height=\"520\"></div><p>The <span class=\"cod\">Select Measures</span> page appeared. The wizard found and checked the measure field in the <span class=\"cod\">FactPurchases</span> table. The wizard also added a field called <span class=\"cod\">Fact Purchases Count</span>, which counts the number of records. This does not provide me with any useful information in this data mart, so I unchecked the <span class=\"cod\">Fact Purchases Count</span> field. I click <span class=\"cod\">Next</span>: </p><div><img src=\"/blog/2023/12/31/06/14/img/selectMeasures.jpg\" alt=\"Select Measures\" width=\"556\" height=\"518\"></div><p>The <span class=\"cod\">Select New Dimensions</span> page appeared. The wizard found all of the tables related to the <span class=\"cod\">FactPurchases</span> table in the data source view. It also created hierarchies for the <span class=\"cod\">DimCity</span>, <span class=\"cod\">DimPaymentMethod</span>, and <span class=\"cod\">DimCategory</span> dimensions. I uncheck <span class=\"cod\">Fact Purchases</span> and <span class=\"cod\">FactPurchases</span>. I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/selectNewDimensions.jpg\" alt=\"Select new Dimensions\" width=\"556\" height=\"519\"></div><p>The <span class=\"cod\">Completing the Wizard</span> page appeared. I kept <span class=\"cod\">FinancesDM</span> for <span class=\"cod\">Cube name</span>. Then I clicked <span class=\"cod\">Finish</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/completingTheCubeWizard.jpg\" alt=\"Completing the Cube Wizard\" width=\"555\" height=\"518\"></div><p>My Cube was created successfully:</p><div><img src=\"/blog/2023/12/31/06/14/img/cubeCreatedSuccessfully.jpg\" alt=\"Cube created successfully\" width=\"1912\" height=\"1028\"></div><p>I right-clicked the <span class=\"cod\">FinancesDM.cube</span> and then clicked <span class=\"cod\">Process...</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/processCube.jpg\" alt=\"Process Cube\" width=\"1920\" height=\"1030\"></div><p>I clicked <span class=\"cod\">Yes</span> to build and deploy the project:</p><div><img src=\"/blog/2023/12/31/06/14/img/buildAndDeployCube.jpg\" alt=\"Build and deploy Cube\" width=\"1915\" height=\"1028\"></div><p>I received the following error message. I clicked <span class=\"cod\">Yes</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/continueBuildingAndDeployingEvenWithErrors.jpg\" alt=\"Continue building and deploying even with errors\" width=\"1915\" height=\"1024\"></div><p>I received the following error:</p><div><img src=\"/blog/2023/12/31/06/14/img/cubeNotFoundError.jpg\" alt=\"Cube not found error\" width=\"1916\" height=\"1027\"></div><p>The error message that I see reveals the root cause of the problem: <span class=\"cod\">The deployment has been cancelled because data source impersonation information was not supplied.</span>, as shown below:</p><div><img src=\"/blog/2023/12/31/06/14/img/rootCauseOfProblem.jpg\" alt=\"Root cause of problem\" width=\"1913\" height=\"1026\"></div><p>I right-clicked <span class=\"cod\">FinancesDM.ds</span> and then clicked <span class=\"cod\">View Designer</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/viewDesigner.jpg\" alt=\"Go to View Designer\" width=\"1919\" height=\"1027\"></div><p>From the <span class=\"cod\">Impersonation Information</span> tab, I changed my selection from <span class=\"cod\">Use a specific Windows user name and password</span> to <span class=\"cod\">Use the service account</span>. Then I clicked <span class=\"cod\">OK</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/changeImpersonationInformation.jpg\" alt=\"Change Impersonation Information\" width=\"1913\" height=\"1029\"></div><p>I tried to process the cube again (as shown in previous steps). From the <span class=\"cod\">Process Cube</span> window, I clicked <span class=\"cod\">Run...</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/runProcessingOfCube.jpg\" alt=\"Run processing of Cube\" width=\"1911\" height=\"1026\"></div><p>The process succeeded:</p><div><img src=\"/blog/2023/12/31/06/14/img/SuccessProcessingCube.jpg\" alt=\"Success processing Cube\" width=\"1916\" height=\"1024\"></div><p>I right-clicked <span class=\"cod\">FinancesDM.cube</span> and then clicked <span class=\"cod\">Browse</span>:</p><div><img src=\"/blog/2023/12/31/06/14/img/browseCube.jpg\" alt=\"Browse Cube\" width=\"1919\" height=\"1030\"></div><p>I was able to browse my cube:</p><div><img src=\"/blog/2023/12/31/06/14/img/browseCubeUsingMultipleDimensions.jpg\" alt=\"Browse cube using multiple dimensions\" width=\"1915\" height=\"1030\"></div><div>Published: 6:14 AM GMT · Dec 31, 2023</div>\n";
?>
