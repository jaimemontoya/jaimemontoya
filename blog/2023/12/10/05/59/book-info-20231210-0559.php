<?php
  $index->content .= 
           "<p>The website unionchurchss.org was hosted on InMotion Hosting. According to <a href=\"https://whois.domaintools.com/unionchurchss.org\">https://whois.domaintools.com/unionchurchss.org</a>, there were \"344 other sites hosted on this server\":</p><div><img src=\"/blog/2023/12/10/05/59/img/inMotionHostingSharedServer.jpg\" alt=\"InMotion Hosting shared server\" width=\"504\" height=\"886\"></div><p>My first step was to use FTP to download WordPress source code and content files hosted on the InMotion Hosting server. I went to my cPanel account at <a href=\"https://secure261.inmotionhosting.com:2083/\">https://secure261.inmotionhosting.com:2083/</a> to obtain my FTP credentials:</p><div><img src=\"/blog/2023/12/10/05/59/img/cPanelLoginScreen.jpg\" alt=\"cPanel login screen\" width=\"546\" height=\"622\"></div><p>This was the first screen after a successful cPanel login:</p><div><img src=\"/blog/2023/12/10/05/59/img/cPanelFirstScreen.jpg\" alt=\"cPanel first screen\" width=\"1851\" height=\"965\"></div><p>I scrolled down to find the FTP Accounts link:</p><div><img src=\"/blog/2023/12/10/05/59/img/ftpAccountsLinkFromcPanel.jpg\" alt=\"FTP Accounts link from cPanel\" width=\"1215\" height=\"976\"></div><p>I found the FTP Username Account that I needed to connect to the server using FTP:</p><div><img src=\"/blog/2023/12/10/05/59/img/ftpUsernameAccountFound.jpg\" alt=\"FTP Username Account found\" width=\"946\" height=\"418\"></div><p>The information above does not specify Host nor the password to connect via FTP. But I found the password from my records of when I created the InMotion Hosting account. For the Host value, I could use either <span class=\"cod\">173.231.209.31</span> (the shared IP address) or <span class=\"cod\">secure261.inmotionhosting.com</span>. That was all I needed to connect to the server using FTP via FileZilla:</p><div><img src=\"/blog/2023/12/10/05/59/img/connectUsingFTPViaFileZilla.jpg\" alt=\"Connect using FTP via FileZilla\" width=\"703\" height=\"97\"></div><div>Published: 5:59 AM GMT · Dec 10, 2023</div>\n";
?>
