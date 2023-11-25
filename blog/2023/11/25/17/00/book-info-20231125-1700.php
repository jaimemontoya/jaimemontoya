<?php
  $index->content .= 
           "<p>Today I received an email from <span class=\"cod\">Namecheap &lt;hello@namecheap.com&gt;</span> with the following subject line:\"Black Friday Sale — Get up to 99% off\". From their list of deals, I was curious about this one:</p><div><img src=\"/blog/2023/11/25/17/00/img/nameCheapProfessionalEmailBlackFridayDeal.jpg\" alt=\"Namecheap Professional Email Black Friday deal\" width=\"220\" height=\"282\"></div><p>I accepted the offer and this was my Namecheap Order Summary:</p><div><img src=\"/blog/2023/11/25/17/00/img/nameCheapStarterEmailOrderSummary.jpg\" alt=\"Namecheap Starter Email Order Summary\" width=\"447\" height=\"130\"></div><p>The regular price is $ $14.88, but in my case the price was $5.98 using the promotional code. It includes 1 mailbox and 5 GB of email storage. Namecheap has the Pro and Ultimate plans, but I only needed the most basic one:</p><div><img src=\"/blog/2023/11/25/17/00/img/nameCheapProfessionalEmailFeatureComparison.jpg\" alt=\"Namecheap Professional Email feature comparison\" width=\"959\" height=\"869\"></div><p>My next step was to set up the DNS records using the following information:</p><div><img src=\"/blog/2023/11/25/17/00/img/dnsRecordsForNamecheapPrivateEmail.jpg\" alt=\"DNS Records for Namecheap Private Email\" width=\"591\" height=\"454\"></div><p>Using Dig (<a href=\"https://toolbox.googleapps.com/apps/dig/#NS/\">https://toolbox.googleapps.com/apps/dig/#NS/</a>), a DNS lookup tool created by Google, I realized that my existing domain nameservers are with InMotion Hosting:</p><div><img src=\"/blog/2023/11/25/17/00/img/googleAdminToolboxDig.jpg\" alt=\"Google Admin Toolbox Dig\" width=\"549\" height=\"824\"></div><p>The old MX Record I found from the InMotion Hosting DNS Zone Records Editor was:</p><div><img src=\"/blog/2023/11/25/17/00/img/oldMXRecordsFromInMotionHostingZoneEditor.jpg\" alt=\"Old MX Records from InMotion Hosting Zone Editor\" width=\"597\" height=\"285\"></div><p>The new MX Records I provided, after removing the one just mentioned above, were:</p><div><img src=\"/blog/2023/11/25/17/00/img/newMXRecordsFromInMotionHostingZoneEditor.jpg\" alt=\"Old MX Records from InMotion Hosting Zone Editor\" width=\"705\" height=\"375\"></div><p>I created <span class=\"cod\">v=spf1 include:spf.privateemail.com ~all</span> as a TXT Record, without removing any of the previous TXT Records:</p><div><img src=\"/blog/2023/11/25/17/00/img/addTXTRecordFromInMotionHostingZoneEditor.jpg\" alt=\"Add TXT Record from InMotion Hosting Zone Editor\" width=\"1103\" height=\"807\"></div><div>Published: 5:00 PM GMT · Nov 25, 2023</div>\n";
?>
