<?php
  $index->content .= 
           "<p>I visited <a href=\"https://www.microsoft.com/download/details.aspx?id=53595\">https://www.microsoft.com/download/details.aspx?id=53595</a> and downloaded Microsoft Data Migration Assistant v5.8.</p><div><img src=\"/blog/2024/04/22/20/51/img/downloadMicrosoftDataMigrationAssistantv5Dot8.jpg\" alt=\"Download Microsoft Data Migration Assistant v5.8\" width=\"1754\" height=\"1024\"></div><p>I opened the downloaded file:</p><div><img src=\"/blog/2024/04/22/20/51/img/dataMigrationAssistant.jpg\" alt=\"Microsoft Data Migration Assistant\" width=\"380\" height=\"171\"></div><p>I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/microsoftDataMigrationAssistantSetupWizard.jpg\" alt=\"Microsoft Data Migration Assistant Setup Wizard\" width=\"488\" height=\"370\"></div><p>I accepted the terms in the License Agreement and clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/acceptTermsInLicenseAgreement.jpg\" alt=\"Terms in the License Agreement\" width=\"488\" height=\"372\"></div><p>I clicked <span class=\"cod\">Install</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/install.jpg\" alt=\"Install\" width=\"486\" height=\"370\"></div><p>I checked the \"Launch Microsoft Data Migration Assistant\" box and clicked <span class=\"cod\">Finish</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/finishInstallation.jpg\" alt=\"Finish installation\" width=\"481\" height=\"370\"></div><p>I used the following options and clicked <span class=\"cod\">Create</span>:</p><table><tr><th>Property</th><th>Value</th></tr><tr><td>Project type</td><td>Assessment</td></tr><tr><td>Project name</td><td>SQL Server to Azure SQL Database</td></tr><tr><td>Assessment type</td><td>Database Engine</td></tr><tr><td>Source server type</td><td>SQL Server</td></tr><tr><td>Targer server type</td><td>Azure SQL Database</td></tr></table><div><img src=\"/blog/2024/04/22/20/51/img/createNewDataMigrationProject.jpg\" alt=\"Create new Data Migration project\" width=\"962\" height=\"578\"></div><p>I kept all items selected in the report type screen and clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/selectReportType.jpg\" alt=\"Select report type\" width=\"972\" height=\"582\"></div><p>I provided my credentials to connect to my source SQL Server database, specified the connection properties and clicked <span class=\"cod\">Connect</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/connectToAServer.jpg\" alt=\"Connect to a server\" width=\"967\" height=\"652\"></div><p>I selected the server and specific database that I wanted to connect to and clicked <span class=\"cod\">Add</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/addSources.jpg\" alt=\"Add sources\" width=\"969\" height=\"655\"></div><p>I clicked <span class=\"cod\">Start Assessment</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/startAssessment.jpg\" alt=\"Start assessment\" width=\"1063\" height=\"659\"></div><p>I examined the <span class=\"cod\">SQL Server feature parity</span> results. Then I clicked the <span class=\"cod\">Compatibility issues</span> radio button:</p><div><img src=\"/blog/2024/04/22/20/51/img/SQLServerFeatureParityResults.jpg\" alt=\"SQL Server feature parity results\" width=\"1391\" height=\"654\"></div><p>I had no compatibility issues. I clicked <span class=\"cod\">Upload to Azure Migrate</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/uploadToAzureMigrate.jpg\" alt=\"Upload to Azure Migrate\" width=\"1385\" height=\"651\"></div><p>I selected <span class=\"cod\">Azure</span> as my <span class=\"cod\">Azure Environment</span> and clicked <span class=\"cod\">Connect</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/connectToAzure.jpg\" alt=\"Connect to Azure\" width=\"1349\" height=\"650\"></div><p>I signed in to my Microsoft account:</p><div><img src=\"/blog/2024/04/22/20/51/img/uploadAssessmentReportToAzureMigrate.jpg\" alt=\"Upload assessment report to Azure Migrate\" width=\"1354\" height=\"650\"></div><p>The following error appeared when I connected to Azure:</p><div><img src=\"/blog/2024/04/22/20/51/img/azureMigrateErrorFetchingSubscriptionList.jpg\" alt=\"Azure Migrate error fetching subscription list\" width=\"1350\" height=\"650\"></div><p>Since I did not find any compatibility issues, I was ready to export my database as .bacpac file and import it using the Azure portal or SqlPackage.</p><p>From Microsoft SQL Server Management Studio I clicked <span class=\"cod\">Export Data-tier Application...</span> for the database that I wanted to export:</p><div><img src=\"/blog/2024/04/22/20/51/img/exportDataTierApplication.jpg\" alt=\"Export Data-tier Application\" width=\"697\" height=\"980\"></div><p>From the <span class=\"cod\">Introduction</span> screen, I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/exportDataTierApplicationIntroduction.jpg\" alt=\"Introduction screen in export data-tier application process\" width=\"649\" height=\"769\"></div><p>From the <span class=\"cod\">Export Settings</span> screen, I kept the <span class=\"cod\">Save to local disk</span> radio button selected. Then I clicked <span class=\"cod\">Browse...</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/savingBACPACToLocalDisk.jpg\" alt=\"Saving BACPAC to local disk\" width=\"772\" height=\"770\"></div><p>I provided a name for the file and clicked <span class=\"cod\">Save</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/saveBACPACFile.jpg\" alt=\"Save BACPAC file\" width=\"1391\" height=\"780\"></div><p>I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/saveBACPACToLocalDisk.jpg\" alt=\"Save BACPAC to local disk\" width=\"844\" height=\"772\"></div><p>I clicked <span class=\"cod\">Finish</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/finishExportingBACPACFile.jpg\" alt=\"Finish exporting BACPAC file\" width=\"843\" height=\"773\"></div><p>The Operation Complete message appeared with a summary of results:</p><div><img src=\"/blog/2024/04/22/20/51/img/operationCompleteSummaryResults.jpg\" alt=\"Operation Complete summary results\" width=\"843\" height=\"842\"></div><p>The BACPAC file was saved successfully in the location of my local disk that I specified:</p><div><img src=\"/blog/2024/04/22/20/51/img/bacpacFileSavedSuccessfully.jpg\" alt=\"BACPAC file saved successfully\" width=\"755\" height=\"96\"></div><p>I visited <a href=\"https://portal.azure.com/\">https://portal.azure.com/</a> and navigated to my storage account. Then I clicked <span class=\"cod\">Upload</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/navigateToStorageAccount.jpg\" alt=\"Navigate to storage account\" width=\"1899\" height=\"1020\"></div><p>I clicked <span class=\"cod\">Browse for files</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/browseForFiles.jpg\" alt=\"Browse for files\" width=\"1897\" height=\"1025\"></div><p>I navigated to the location where I had my BACPAC file and clicked <span class=\"cod\">Open</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/openBACPACFile.jpg\" alt=\"Open BACPAC file\" width=\"1895\" height=\"1020\"></div><p>I clicked <span class=\"cod\">Create new</span> to create a container for my BACPAC file:</p><div><img src=\"/blog/2024/04/22/20/51/img/createNewContainer.jpg\" alt=\"Create new container\" width=\"1882\" height=\"973\"></div><p>I provided a name for my container anc clicked <span class=\"cod\">Ok</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/provideNameForContainer.jpg\" alt=\"Provide name for container\" width=\"1892\" height=\"1019\"></div><p>I clicked <span class=\"cod\">Upload</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/uploadBACPACFile.jpg\" alt=\"Upload BACPAC file\" width=\"1893\" height=\"1021\"></div><p>My BACPAC file was uploaded successfully:</p><div><img src=\"/blog/2024/04/22/20/51/img/bacpacFileUploadedSuccessfully.jpg\" alt=\"BACPAC file uploaded successfully\" width=\"1890\" height=\"1064\"></div><p>From the home page of the Microsoft Azure Portal, I clicked <span class=\"cod\">Create a resource</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/createAResource.jpg\" alt=\"Create a resource\" width=\"1836\" height=\"1020\"></div><p>I searched for <span class=\"cod\">sql server (logical server)</span> and pressed enter:</p><div><img src=\"/blog/2024/04/22/20/51/img/searchForSQLServerLogicalServer.jpg\" alt=\"Search for SQL Server (logical server)\" width=\"1129\" height=\"932\"></div><p>I clicked <span class=\"cod\">SQL server (logical server)</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/clickSQLServerLogicalServer.jpg\" alt=\"Click SQL Server (logical server)\" width=\"1899\" height=\"1024\"></div><p>I clicked <span class=\"cod\">Create</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/createSQLServerLogicalServer.jpg\" alt=\"Create SQL Server (logical server)\" width=\"1000\" height=\"544\"></div><p>I provided the required basic information:</p><div><img src=\"/blog/2024/04/22/20/51/img/provideRequiredBasicInformationPart1Of2.jpg\" alt=\"Provide required basic information (part 1 of 2)\" width=\"741\" height=\"969\"></div><div>Published: 8:51 AM GMT · Apr 22, 2023</div>\n";
?>
