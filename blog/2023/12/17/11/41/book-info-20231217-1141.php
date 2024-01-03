<?php
  $index->content .= 
           "<p>An Azure subscription was required. I visited <a href=\"https://azure.microsoft.com/free\">https://azure.microsoft.com/free</a> and signed in with a Microsoft account that I already had. That took me to the Azure portal. I selected <span class=\"cod\">＋ Create</span> a resource:</p><div><img src=\"/blog/2023/12/17/11/41/img/createAResource.jpg\" alt=\"Create a resource\" width=\"1161\" height=\"975\"></div><p>I searched for <span class=\"cod\">Azure SQL</span>:</p><div><img src=\"/blog/2023/12/17/11/41/img/searchForAzureSQL.jpg\" alt=\"Create a resource\" width=\"1206\" height=\"926\"></div><p>I clicked <span class=\"cod\">Create Azure SQL</span>:</p><div><img src=\"/blog/2023/12/17/11/41/img/createAzureSQLResource.jpg\" alt=\"Create Azure SQL Resource\" width=\"1904\" height=\"974\"></div><p>I clicked <span class=\"cod\">Start with an Azure free trial</span> to get $200 free credit toward Azure products and services, plus 12 months of popular free services:</p><div><img src=\"/blog/2023/12/17/11/41/img/startWithAnAzureFreeTrial.jpg\" alt=\"Start with an Azure free trial\" width=\"1898\" height=\"642\"></div><p>I clicked <span class=\"cod\">Start free</span>:</p><div><img src=\"/blog/2023/12/17/11/41/img/startFree.jpg\" alt=\"Start free\" width=\"1052\" height=\"733\"></div><p>I received a message saying that I already had an Azure account. I clicked <span class=\"cod\">Sign up for a Pay-As-You-Go subscription.</span></p><div><img src=\"/blog/2023/12/17/11/41/img/showThatIAlreadyHadAnAzureAccount.jpg\" alt=\"Show that I already had an Azure account\" width=\"1846\" height=\"392\"></div><p>I clicked <span class=\"cod\">Upgrade your account.</span></p><div><img src=\"/blog/2023/12/17/11/41/img/clickUpgradeYourAccount.jpg\" alt=\"Click Upgrade your account\" width=\"1260\" height=\"384\"></div><p>I provided my phone number for identity purposes and clicked <span class=\"cod\">Text me</span>:</p><div><img src=\"/blog/2023/12/17/11/41/img/providePhoneNumberForIdentityPurposes.jpg\" alt=\"Provide phone number for identity purposes\" width=\"1911\" height=\"526\"></div><p>I provided the code that I received on my phone and clicked <span class=\"cod\">Verify code</span>:</p><div><img src=\"/blog/2023/12/17/11/41/img/clickVerifyCode.jpg\" alt=\"Click Verify code\" width=\"1048\" height=\"648\"></div><p>I provided a subscription name, chose the <span class=\"cod\">Basic</span> support plan, and clicked <span class=\"cod\">Upgrade to pay as you go</span>:</p><div><img src=\"/blog/2023/12/17/11/41/img/upgradeToPayAsYouGo.jpg\" alt=\"Upgrade to pay as you go\" width=\"1909\" height=\"977\"></div><p>I received a message revealing that I had upgraded my account successfully. I followed the steps above one more time, to <span class=\"cod\">Create Azure SQL</span> resource. I reviewed the Azure SQL options that were available, and then in the <span class=\"cod\">SQL databases</span> tile, I ensured that <span class=\"cod\">Single database</span> was selected. Finally, I clicked <span class=\"cod\">Create</span> in the <span class=\"cod\">SQL databases</span> section, keeping <span class=\"cod\">Single instance</span> as the <span class=\"cod\">Resource type</span>:</p><div><img src=\"/blog/2023/12/17/11/41/img/createSQLDatabase.jpg\" alt=\"Create SQL managed instance\" width=\"1896\" height=\"821\"></div><p>I entered the following values on the Create SQL Database page, and left all other properties with their defaul setting:</p><ul><li><span class=\"bold\">Subscription:</span> jaimemontoya.com (because that was the name I gave to my Azure subscription).<li><span class=\"bold\">Resource group:</span> PersonalFinance (I created a new resource group with a name of my choice. A resource group is a container that holds related resources for an Azure solution.)<li><span class=\"bold\">Database name:</span> Finances<li><span class=\"bold\">Server:</span> I selected <span class=\"cod\">Create new</span> and created a new server with a unique name (<span class=\"cod\">jaimemontoya</span>) in the <span class=\"cod\">(Canada) Canada East</span> location. I used <span class=\"cod\">SQL authentication</span> and specified the name I wanted as my server admin login and a suitably complex password. Then I clicked <span class=\"cod\">OK</span>.<div><img src=\"/blog/2023/12/17/11/41/img/createSQLDatabaseServer.jpg\" alt=\"Create SQL Database Server\" width=\"1908\" height=\"986\"></div><li><span class=\"bold\">Want to use SQL elastic pool?:</span> No<li><span class=\"bold\">Workload environment:</span> Development<li><span class=\"bold\">Compute + storage:</span> Left unchanged<li><span class=\"bold\">Backup storage redundancy:</span> Locally-redundant backup storage</ul><p>I clicked <span class=\"cod\">Apply offer (Preview)</span>:</p><div><img src=\"/blog/2023/12/17/11/41/img/applyOffer.jpg\" alt=\"Apply Offer\" width=\"1037\" height=\"964\"></div><p>After applying the free database offer, the cost per month changed to <span class=\"cod\">0.00 USD</span>:</p><div><img src=\"/blog/2023/12/17/11/41/img/freeDatabaseOfferApplied.jpg\" alt=\"Free database offer applied\" width=\"1031\" height=\"966\"></div><p>Create SQL Database, Basics tab, part 1 of 2:</p><div><img src=\"/blog/2023/12/17/11/41/img/createSQLDatabaseBasicsTabPart1of2.jpg\" alt=\"Create SQL Database, Basics tab, part 1 of 2\" width=\"1896\" height=\"821\"></div><p>Create SQL Database, Basics tab, part 2 of 2:</p><div><img src=\"/blog/2023/12/17/11/41/img/createSQLDatabaseBasicsTabPart2of2.jpg\" alt=\"Create SQL Database, Basics tab, part 2 of 2\" width=\"825\" height=\"965\"></div><p>Create SQL Database, Networking tab:</p><div><img src=\"/blog/2023/12/17/11/41/img/createSQLDatabaseNetworkingTab.jpg\" alt=\"Create SQL Database, Networking tab\" width=\"1031\" height=\"963\"></div><p>Create SQL Database, Security tab, part 1 of 2:</p><div><img src=\"/blog/2023/12/17/11/41/img/createSQLDatabaseSecurityTabPart1of2.jpg\" alt=\"Create SQL Database, Security tab, part 1 of 2\" width=\"1027\" height=\"965\"></div><p>Create SQL Database, Security tab, part 2 of 2:</p><div><img src=\"/blog/2023/12/17/11/41/img/createSQLDatabaseSecurityTabPart2of2.jpg\" alt=\"Create SQL Database, Security tab, part 2 of 2\" width=\"1026\" height=\"966\"></div><p>Create SQL Database, Additional settings tab:</p><div><img src=\"/blog/2023/12/17/11/41/img/createSQLDatabaseAdditionalSettingsTab.jpg\" alt=\"Create SQL Database, Additional settings tab\" width=\"1026\" height=\"964\"></div><p>Create SQL Database, Tags tab:</p><div><img src=\"/blog/2023/12/17/11/41/img/createSQLDatabaseTagsTab.jpg\" alt=\"Create SQL Database, Tags tab\" width=\"1025\" height=\"963\"></div><p>Create SQL Database, Review + create tab, part 1 of 2:</p><div><img src=\"/blog/2023/12/17/11/41/img/createSQLDatabaseCreateAndReviewTabPart1Of2.jpg\" alt=\"Create SQL Database, Review + create tab, part 1 of 2\" width=\"1025\" height=\"961\"></div><p>Create SQL Database, Review + create tab, part 2 of 2. I clicked <span class=\"cod\">Create</span> to complete the process and create the database using the provided configurations:</p><div><img src=\"/blog/2023/12/17/11/41/img/createSQLDatabaseCreateAndReviewTabPart2Of2.jpg\" alt=\"Create SQL Database, Review + create tab, part 2 of 2\" width=\"504\" height=\"979\"></div><p>The <span class=\"cod\">Deployment in progress</span> message appeared:</p><div><img src=\"/blog/2023/12/17/11/41/img/showDeploymentInProgress.jpg\" alt=\"Show Deployment in progress\" width=\"1904\" height=\"667\"></div><p>Finally, I received the message notifying that the deployment was complete. I clicked <span class=\"cod\">Go to resource</span>:</p><div><img src=\"/blog/2023/12/17/11/41/img/deploymentComplete.jpg\" alt=\"Deployment complete\" width=\"1901\" height=\"713\"></div><p>My SQL Database resource was successfully created and available. I clicked <span class=\"cod\">Query editor (preview)</span>:</p><div><img src=\"/blog/2023/12/17/11/41/img/showDatabaseCreatedAndAvailable.jpg\" alt=\"Show database created and available\" width=\"1910\" height=\"943\"></div><p>I provided my credentials to log in (created in previous steps) and clicked <span class=\"cod\">OK</span>:</p><div><img src=\"/blog/2023/12/17/11/41/img/logInToDatabase.jpg\" alt=\"Log in to database\" width=\"1900\" height=\"977\"></div><p>My connection attempt was denied. The reason was my <span class=\"cod\">Deny Public Network Access</span> being set to <span class=\"cod\">Yes</span>. I clicked <span class=\"cod\">Finances (jaimemontoya/Finances)</span>:</p><div><img src=\"/blog/2023/12/17/11/41/img/connectionDenied.jpg\" alt=\"Connection denied\" width=\"1903\" height=\"983\"></div><p>I clicked the <span class=\"cod\">Set server firewall</span> link:</p><div><img src=\"/blog/2023/12/17/11/41/img/setServerFirewall.jpg\" alt=\"Set server firewall\" width=\"1906\" height=\"958\"></div><p>I clicked the <span class=\"cod\">Selected networks</span> radio button. Then I clicked <span class=\"cod\">Add your client IPv4 address (181.129.42.189)</span> to allow access to the database from my current client IP address. After that, I checked the box <span class=\"cod\">Allow Azure services and resources to access this server</span> to allow access to the database from Azure services. Finally, I clicked <span class=\"cod\">Save</span>:</p><div><img src=\"/blog/2023/12/17/11/41/img/allowPublicNetworkAccess.jpg\" alt=\"Allow Public Network Access\" width=\"1905\" height=\"977\"></div><p>I tried again clicking Query editor (preview) as shown in steps above, and after providing my credentials for SQL server authentication, I was able to login successfully. But I did not have any tables available to query:</p><div><img src=\"/blog/2023/12/17/11/41/img/sqlQueryEditor.jpg\" alt=\"SQL query editor\" width=\"1907\" height=\"962\"></div><p>When creating the database, in the <span class=\"cod\">Additional settings</span> tab, I chose <span class=\"cod\">None</span>. For that reason, I started with a blank database without tables to query. I had the option to choose <span class=\"cod\">Sample</span> as my <span class=\"cod\">Use existing data</span> option to have sample data to populate my new database.</p><div>Published: 11:41 AM GMT · Dec 17, 2023</div>\n";
?>
