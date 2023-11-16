<?php
  $index->content .= 
           "\t\t\t<div>5:00 AM GMT · Nov 16, 2023</div><p>I needed to have two websites on the same server: one at <code>jaimemontoya.net</code> and the other at <code>sponsorship.jaimemontoya.net</code>. My first step was to create <code>A</code> and <code>CNAME</code> records for <code>sponsorship.jaimemontoya.net</code> and <code>www.sponsorship.jaimemontoya.net</code>, respectively.</p><p>Create <code>A</code> Record:</p><div><img src=\"/blog/2023/11/16/05/00/img/createARecord.png\" alt=\"Create A Record\" width=\"1189\" height=\"776\"></div><p>Create <code>CNAME</code> Record:</p><div><img src=\"/blog/2023/11/16/05/00/img/createCNAMERecord.png\" alt=\"Create CNAME Record\" width=\"1087\" height=\"317\"></div><p><code>A</code> and <code>CNAME</code> Records created successfully:</p><div><img src=\"/blog/2023/11/16/05/00/img/AAndCNAMERecordsCreatedSuccessfully.png\" alt=\"A and CNAME Records created successfully\" width=\"1186\" height=\"531\"></div><p>I created a new directory for the subdomain, and the <code>index.html</code> file that I wanted to display, assigning proper file owner and group to the directory and file:</p><code>root@jaimemontoya:/var/www# chown -R jmontoya:jmontoya sponsorship.jaimemontoya.net<br />root@jaimemontoya:/var/www# cd sponsorship.jaimemontoya.net/<br />root@jaimemontoya:/var/www/sponsorship.jaimemontoya.net# ls -l<br />total 4<br />-rw-r--r-- 1 jmontoya jmontoya 101 Nov 15 23:47 index.html<br />root@jaimemontoya:/var/www/sponsorship.jaimemontoya.net# pwd<br />/var/www/sponsorship.jaimemontoya.net</code><p>The content of <code>index.html</code> was simply this:</p><code>root@jaimemontoya:/var/www/sponsorship.jaimemontoya.net# cat index.html<br />&lt;!DOCTYPE html&gt;<br />&lt;html&gt;<br />&lt;body&gt;<br />&lt;h1&gt;My First Heading&lt;/h1&gt;<br />&lt;p&gt;My first paragraph.&lt;/p&gt;<br />&lt;/body&gt;<br />&lt;/html&gt;<br />&lt;/p&gt;</code><p>I created <code>/etc/apache2/sites-available/sponsorship.jaimemontoya.net.conf</code>, the Apache configuration file for <code>http://sponsorship.jaimemontoya.net</code>, with the following content:</p><code># Added to mitigate CVE-2017-8295 vulnerability<br />
UseCanonicalName On<br />
&lt;VirtualHost *:80&gt;<br />
        <span class=\"indent\">ServerAdmin webmaster@localhost</span><br />
        ServerName sponsorship.jaimemontoya.net<br />
        ServerAlias www.sponsorship.jaimemontoya.net<br />
        DocumentRoot /var/www/sponsorship.jaimemontoya.net<br />
        ErrorLog ${APACHE_LOG_DIR}/error.log<br />
        CustomLog ${APACHE_LOG_DIR}/access.log combined<br />
        RewriteEngine On<br />
        RewriteRule ^(.*)$ https://%{HTTP_HOST}$1 [R=301,L]<br />
&lt;/VirtualHost&gt;<br />
</code><hr>\n";
?>
