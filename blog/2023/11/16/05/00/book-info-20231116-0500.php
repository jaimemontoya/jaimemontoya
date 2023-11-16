<?php
  $index->content .= 
           "\t\t\t<div>5:00 AM GMT · Nov 16, 2023</div><p>I needed to have two websites on the same server: one at jaimemontoya.net and the other at sponsorship.jaimemontoya.net. My first step was to create A and CNAME records for sponsorship.jaimemontoya.net and www.sponsorship.jaimemontoya.net, respectively.</p><p>Create A Record:</p><div><img src=\"/blog/2023/11/16/05/00/img/createARecord.png\" alt=\"Create A Record\" width=\"1189\" height=\"776\"></div><p>Create CNAME Record:</p><div><img src=\"/blog/2023/11/16/05/00/img/createCNAMERecord.png\" alt=\"Create CNAME Record\" width=\"1087\" height=\"317\"></div><p>A and CNAME Records created successfully:</p><div><img src=\"/blog/2023/11/16/05/00/img/AAndCNAMERecordsCreatedSuccessfully.png\" alt=\"A and CNAME Records created successfully\" width=\"1186\" height=\"531\"></div><p>I created a new directory for the subdomain, and the index.html file that I wanted to display, assigning proper file owner and group to the directory and file:</p><code>root@jaimemontoya:/var/www# chown -R jmontoya:jmontoya sponsorship.jaimemontoya.net</code><div>root@jaimemontoya:/var/www# cd sponsorship.jaimemontoya.net/</div><div>root@jaimemontoya:/var/www/sponsorship.jaimemontoya.net# ls -l</div><div>total 4</div><div>-rw-r--r-- 1 jmontoya jmontoya 101 Nov 15 23:47 index.html</div><div>root@jaimemontoya:/var/www/sponsorship.jaimemontoya.net# pwd</div><div>/var/www/sponsorship.jaimemontoya.net</div><p>The content of index.html was simply this:</p><p><div>root@jaimemontoya:/var/www/sponsorship.jaimemontoya.net# cat index.html</div><div>&lt;!DOCTYPE html&gt;</div><div>&lt;html&gt;</div><div>&lt;body&gt;</div><div>&lt;h1&gt;My First Heading&lt;/h1&gt;</div><div>&lt;p&gt;My first paragraph.&lt;/p&gt;</div><div>&lt;/body&gt;</div><div>&lt;/html&gt;</div><div>&lt;/p&gt;</div><hr>\n";
?>
