<?php
  $index->content .= 
           "<p>I used <a href=\"includes/FuzzyGroupingExample.txt\">FuzzyGroupingExample.txt</a> to create my reference table. I opened Visual Studio and created a new project:</p><div><img src=\"/blog/2023/12/12/05/59/img/createNewProject.jpg\" alt=\"Create new project\" width=\"619\" height=\"119\"></div><p>I provided a name and location for my new project:</p><div><img src=\"/blog/2023/12/12/05/59/img/provideNameAndLocationForNewProject.jpg\" alt=\"Provide name and location for new project\" width=\"935\" height=\"649\"></div><p>I created a <span class=\"cod\">Data Flow Task</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/createDataFlowTask.jpg\" alt=\"Create Data Flow Task\" width=\"732\" height=\"303\"></div><p>I right-clicked the <span class=\"cod\">Connection Managers</span> area and then clicked <span class=\"cod\">New Flat File Connection...</span></p><div><img src=\"/blog/2023/12/12/05/59/img/createNewFlatFileConnection.jpg\" alt=\"Create New Flat File Connection\" width=\"1042\" height=\"732\"></div><p>I provided a name and chose the file to use (<a href=\"includes/FuzzyGroupingExample.txt\">FuzzyGroupingExample.txt</a>). Then I clicked <span class=\"cod\">Columns</span> to define the columns to use for this connection manager:</p><div><img src=\"/blog/2023/12/12/05/59/img/flatFileConnectionManagerEditor.jpg\" alt=\"Flat File Connection Manager Editor\" width=\"629\" height=\"604\"></div><p>Notice the warning in the image above: <span class=\"cod\">Columns are not defined for this connection manager.</span> It disappeared when clicking <span class=\"cod\">Columns</span> and going back to <span class=\"cod\">General</span> without further actions. From the <span class=\"cod\">Columns</span> section, I confirmed that my data was displaying correctly, and clicked <span class=\"cod\">OK</span>.</p><div><img src=\"/blog/2023/12/12/05/59/img/confirmThatDataIsDisplayingCorrectly.jpg\" alt=\"Confirm that data is displaying correctly\" width=\"620\" height=\"859\"></div><p>My connection was created successfully. I double clicked my Data Flow Task to open it:</p><div><img src=\"/blog/2023/12/12/05/59/img/connectionCreatedSuccessfully.jpg\" alt=\"Connection created successfully\" width=\"792\" height=\"957\"></div><p>I created a <span class=\"cod\">Flat File Source</span> and doubled clicked to open it.</p><div><img src=\"/blog/2023/12/12/05/59/img/createFlatFileSource.jpg\" alt=\"Create Flat File Source\" width=\"790\" height=\"958\"></div><p>From the <span class=\"cod\">Flat File Source Editor</span>, I clicked <span class=\"cod\">Columns</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/clickColumnsFromFlatFileSourceEditor.jpg\" alt=\"Click Columns from Flat File Source Editor\" width=\"745\" height=\"629\"></div><p>I unchecked <span class=\"cod\">LASTNAME</span> and <span class=\"cod\">FIRSTNAME</span> because I was creating my reference table, which should not have employee names, but only occupations. I renamed the <span class=\"cod\">Output Column</span> to <span class=\"cod\">OccupationLabel</span>. Then I clicked <span class=\"cod\">OK</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/uncheckColumnsAndDefineOutputColumn.jpg\" alt=\"Uncheck columns and define Output Column\" width=\"737\" height=\"618\"></div><p>I created another connection, this time a <span class=\"cod\">New OLE DB Connection...</span></p><div><img src=\"/blog/2023/12/12/05/59/img/newOLEDBConnection.jpg\" alt=\"New OLE DB Connection\" width=\"732\" height=\"751\"></div><p>I chose the database that I wanted to use and clicked <span class=\"cod\">OK</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/configureOLEDBConnectionManager.jpg\" alt=\"Configure OLE DB Connection Manager\" width=\"1255\" height=\"746\"></div><p>I renamed my connection to <span class=\"cod\">SQLServerDatabase</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/newOLEDBConnectionCreatedSuccessfully.jpg\" alt=\"New OLE DB Connection created successfully\" width=\"733\" height=\"748\"></div><div>Published: 5:59 AM GMT · Dec 12, 2023</div>\n";
?>
