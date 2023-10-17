<?php
  $index->content .= 
           "\t\t\t<div>6:00 PM GMT · Oct 21, 2023</div><p>Hosting <a href=\"https://unionchurchss.org\">https://unionchurchss.org</a> on InMotion Hosting since Jun 9, 2019 has been a good experience, even though on Jun 9, 2023 they increased the price from $119.88 to $155.88 a year:</p><img src=\"/blog/2023/10/17/18/00/img/inmotion-hosting-pricing.jpg\" alt=\"InMotion Hosting pricing\" width=\"260\" height=\"310\"><p>Why not renting a virtual machine from a company such as DigitalOcean that specializes in cloud hosting for developers? Before answering that question, I want to explain that I mentioned specifically DigitalOcean because from the four well-known cloud hosting options that I know (DigitalOcean, Google Cloud Platform, Microsoft Azure and Amazon Web Services), DigitalOcean is the least expensive:</p><img src=\"/blog/2023/10/17/18/00/img/digital-ocean-vs-competitors.jpg\" alt=\"DigitalOcean versus competitors\" width=\"863\" height=\"409\"><p>$6 a month may sound like a good deal. However, that solution would require hosting my own databases. In my experience, self-hosted databases and/or mail servers is not advisable because of their inherent challenges. For example, I posted at <a href=\"https://stackoverflow.com/questions/76788812/mysql-suddenly-exited-execstart-usr-sbin-mysqld-daemonize-pid-file-run-mys\">https://stackoverflow.com/questions/76788812/mysql-suddenly-exited-execstart-usr-sbin-mysqld-daemonize-pid-file-run-mys</a> an issue I experienced with MySQL randomly failing for no apparent reason after several days of running without problems. The fix was easy, as I mentioned in that question: start/restart the MySQL service. But having that uncertainty of not knowing when MySQL will suddenly fail is unacceptable for a production system. The Stack Overflow user @suchislife wrote a comment to my question, that I 100% agree with:</p><p>\"They way I fixed this was to stop hosting my own databases. Such a risk. Now I rent a managed MySQL database cluster with full access from digital ocean and it stays online for years. Email & Database hosting is no joke. Let a data-center manage hardware, patch updates and uptime so that you can focus on actual coding.\"</p><p>I am assuming that in his last sentence, @suchislife was referring exclusively to hosting email and database. Otherwise, I would disagree only with that sentence because hosting everything else (even if excluding specifically email and database) on a self-hosted server is precisely the concept behind using a cloud hosting for developers solution in the form of infrastructure as a service (IaaS). The solution proposed by @suchislife, as I understand it, would be to use platform as a service (PaaS) for email and database, and IaaS for everything else.</p><p>The cost of a basic DigitalOcean MySQL Managed Database is currently $15.00/month:</p><hr>\n";
?>
