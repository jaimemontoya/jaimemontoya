<?php
  $index->content .= 
           "<p>In a previous post at <a href=\"https://jaimemontoya.com/blog/2023/12/17/11/41/\">https://jaimemontoya.com/blog/2023/12/17/11/41/</a>, I explained the process I followed for provisioning Azure relational database services to create a MySQL database resource.</p><p>Instead of downloading a MySQL client tool, I connected by using <a href=\"https://learn.microsoft.com/en-us/azure/cloud-shell/overview\">Azure Cloud Shell</a> within the Azure portal.</p><p>I started by creating a new Azure Database for MySQL Flexible server with the following configurations:</p><div><img src=\"/blog/2024/01/12/06/49/img/newAzureDatabaseForMySQLFlexibleServer.jpg\" alt=\"New Azure Database for MySQL Flexible server\" width=\"1060\" height=\"967\"></div>
		   
		   
		   
		   
		   <p>I made a note of my server name, server admin login name, and password for my newly created server from the <span class=\"cod\">Overview</span> section of my server. I clicked <span class=\"cod\">Connect</span> to open Azure Cloud Shell in the portal:</p><div><img src=\"/blog/2024/01/11/06/15/img/serverNameAndAdminLogin.jpg\" alt=\"Server name ad admin login\" width=\"1570\" height=\"432\"></div><p>I selected a database to connect and clicked <span class=\"cod\">Yes</span> to allow public access from Azure Services within Azure to my server:</p><div><img src=\"/blog/2024/01/11/06/15/img/allowPublicAccessFromAzureServices.jpg\" alt=\"Allow public access from Azure Services\" width=\"1571\" height=\"436\"></div><p>I clicked <span class=\"cod\">Bash</span>:</p><div><img src=\"/blog/2024/01/11/06/15/img/selectBashFromAzureCloudShell.jpg\" alt=\"Select Bash from Azure Cloud Shell\" width=\"1908\" height=\"978\"></div><p>I clicked <span class=\"cod\">Create storage</span>:</p><div><img src=\"/blog/2024/01/11/06/15/img/createStorage.jpg\" alt=\"Create storage\" width=\"1572\" height=\"978\"></div><p>I connected to the server successfully with my credentials. Then I created a database called <span class=\"cod\">guest</span>. After that, I switched connections to the newly created <span class=\"cod\">guest</span> database. Finally, I typed <span class=\"cod\">\q</span>, and then selected the <span class=\"cod\">Enter key</span> to close psql:</p><div><img src=\"/blog/2024/01/11/06/15/img/createNewPostgreSQLDatabase.jpg\" alt=\"Create new PostgreSQL database\" width=\"1917\" height=\"971\"></div><p>The database that I created from Azure Cloud Shell appeared correctly from the graphical user interface:</p><div><img src=\"/blog/2024/01/11/06/15/img/postgreSQLDatabaseFromGraphicalUserInterface.jpg\" alt=\"PostgreSQL database from graphical user interface\" width=\"1904\" height=\"961\"></div><div>Published: 6:49 AM GMT · Jan 12, 2024</div>\n";
?>
