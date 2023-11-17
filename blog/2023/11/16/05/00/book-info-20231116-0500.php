<?php
  $index->content .= 
           "\t\t\t<div>5:00 AM GMT · Nov 16, 2023</div><p>I needed to have two websites on the same server: one at <span class=\"cod\">jaimemontoya.net</span> and the other at <span class=\"cod\">sponsorship.jaimemontoya.net</span>. My first step was to create <span class=\"cod\">A</span> and <span class=\"cod\">CNAME</span> records for <span class=\"cod\">sponsorship.jaimemontoya.net</span> and <span class=\"cod\">www.sponsorship.jaimemontoya.net</span>, respectively.</p><p>Create <span class=\"cod\">A</span> Record:</p><div><img src=\"/blog/2023/11/16/05/00/img/createARecord.png\" alt=\"Create A Record\" width=\"1189\" height=\"776\"></div><p>Create <span class=\"cod\">CNAME</span> Record:</p><div><img src=\"/blog/2023/11/16/05/00/img/createCNAMERecord.png\" alt=\"Create CNAME Record\" width=\"1087\" height=\"317\"></div><p><span class=\"cod\">A</span> and <span class=\"cod\">CNAME</span> Records created successfully:</p><div><img src=\"/blog/2023/11/16/05/00/img/AAndCNAMERecordsCreatedSuccessfully.png\" alt=\"A and CNAME Records created successfully\" width=\"1186\" height=\"531\"></div><p>I created a new directory for the subdomain, and the <span class=\"cod\">index.html</span> file that I wanted to display, assigning proper file owner and group to the directory and file:</p>
		   <pre>root@jaimemontoya:/var/www# chown -R jmontoya:jmontoya sponsorship.jaimemontoya.net<br />root@jaimemontoya:/var/www# cd sponsorship.jaimemontoya.net/<br />root@jaimemontoya:/var/www/sponsorship.jaimemontoya.net# ls -l<br />total 4<br />-rw-r--r-- 1 jmontoya jmontoya 101 Nov 15 23:47 index.html<br />root@jaimemontoya:/var/www/sponsorship.jaimemontoya.net# pwd<br />/var/www/sponsorship.jaimemontoya.net</pre><p>The content of <span class=\"cod\">index.html</span> was simply this:</p><pre>root@jaimemontoya:/var/www/sponsorship.jaimemontoya.net# cat index.html<br />&lt;!DOCTYPE html&gt;<br />&lt;html&gt;<br />&lt;body&gt;<br />&lt;h1&gt;My First Heading&lt;/h1&gt;<br />&lt;p&gt;My first paragraph.&lt;/p&gt;<br />&lt;/body&gt;<br />&lt;/html&gt;</pre><p>I created <span class=\"cod\">/etc/apache2/sites-available/sponsorship.jaimemontoya.net.conf</span>, the Apache configuration file for <span class=\"cod\">http://sponsorship.jaimemontoya.net</span> whose purpose is to redirect <span class=\"cod\">http://sponsorship.jaimemontoya.net</span> to <span class=\"cod\">https://sponsorship.jaimemontoya.net</span>, with the following content:</p><pre># Added to mitigate CVE-2017-8295 vulnerability<br />UseCanonicalName On<br />&lt;VirtualHost *:80&gt;<br /><span class=\"indent\">ServerAdmin webmaster@localhost</span><br /><span class=\"indent\">ServerName sponsorship.jaimemontoya.net</span><br /><span class=\"indent\">ServerAlias www.sponsorship.jaimemontoya.net</span><br /><span class=\"indent\">DocumentRoot /var/www/sponsorship.jaimemontoya.net</span><br /><span class=\"indent\">ErrorLog ${APACHE_LOG_DIR}/error.log</span><br /><span class=\"indent\">CustomLog ${APACHE_LOG_DIR}/access.log combined</span><br /><span class=\"indent\">RewriteEngine On</span><br /><span class=\"indent\">RewriteRule ^(.*)$ https://%{HTTP_HOST}$1 [R=301,L]</span><br />&lt;/VirtualHost&gt;<br /></pre><p>I created <span class=\"cod\">/etc/apache2/sites-available/sponsorship.jaimemontoya.net-le-ssl.conf</span>, the Apache configuration file for <span class=\"cod\">https://sponsorship.jaimemontoya.net</span>, with the following content:</p><pre>&lt;IfModule mod_ssl.c&gt;<br /><span class=\"indent\">&lt;VirtualHost *:443&gt;</span><br /><span class=\"indent2\">ServerAdmin webmaster@localhost</span><br /><span class=\"indent2\">ServerName sponsorship.jaimemontoya.net</span><br /><span class=\"indent2\">ServerAlias www.sponsorship.jaimemontoya.net</span><br /><span class=\"indent2\">DocumentRoot /var/www/sponsorship.jaimemontoya.net</span><br /><span class=\"indent2\">ErrorLog ${APACHE_LOG_DIR}/error.log</span><br /><span class=\"indent2\">CustomLog ${APACHE_LOG_DIR}/access.log combined</span><br /><span class=\"indent\">&lt;/VirtualHost&gt;</span><br />&lt;/IfModule&gt;</pre><p>I checked the sites that were enabled:</p><span class=\"cod\">root@jaimemontoya:/etc/apache2/sites-available# a2query -s<br />000-default-le-ssl (enabled by unknown)<br />000-default (enabled by site administrator)</span><p>I enabled my new Apache sites/virtual hosts for <span class=\"cod\">http://sponsorship.jaimemontoya.net</span> and <span class=\"cod\">https://sponsorship.jaimemontoya.net</span>:</p><span class=\"cod\">root@jaimemontoya:/etc/apache2/sites-available# a2ensite sponsorship.jaimemontoya.net.conf<br />Enabling site sponsorship.jaimemontoya.net.<br />To activate the new configuration, you need to run:<br /><span class=\"indent\">systemctl reload apache2</span><br />root@jaimemontoya:/etc/apache2/sites-available# a2ensite sponsorship.jaimemontoya.net-le-ssl.conf<br />Enabling site sponsorship.jaimemontoya.net-le-ssl.<br />To activate the new configuration, you need to run:<br /><span class=\"indent\">systemctl reload apache2</span></span><p>I activated the new configuration:</p><span class=\"cod\">root@jaimemontoya:/etc/apache2/sites-available# systemctl reload apache2</span><p>I verified that my sites were enabled successfully:</p><span class=\"cod\">root@jaimemontoya:/etc/apache2/sites-available# a2query -s<br />sponsorship.jaimemontoya.net-le-ssl (enabled by site administrator)<br />sponsorship.jaimemontoya.net (enabled by site administrator)<br />000-default-le-ssl (enabled by unknown)<br />000-default (enabled by site administrator)</span><p>I tried disabling and enabling sites and confirmed that everything worked as expected:</p><span class=\"cod\">root@jaimemontoya:/etc/apache2/sites-available# a2dissite sponsorship.jaimemontoya.net.conf<br />Site sponsorship.jaimemontoya.net disabled.<br />To activate the new configuration, you need to run:<br /><span class=\"indent\">systemctl reload apache2</span><br />root@mfh-elsalvador:/etc/apache2/sites-available# systemctl reload apache2<br />root@mfh-elsalvador:/etc/apache2/sites-available# a2query -s<br />sponsorship.jaimemontoya.net-le-ssl (enabled by site administrator)<br />000-default-le-ssl (enabled by unknown)<br />000-default (enabled by site administrator)<br />root@mfh-elsalvador:/etc/apache2/sites-available# a2ensite sponsorship.jaimemontoya.net.conf<br />Enabling site sponsorship.jaimemontoya.net.<br />To activate the new configuration, you need to run:<br /><span class=\"indent\">systemctl reload apache2</span><br />root@mfh-elsalvador:/etc/apache2/sites-available# systemctl reload apache2<br />root@mfh-elsalvador:/etc/apache2/sites-available# a2query -s<br />sponsorship.jaimemontoya.net-le-ssl (enabled by site administrator)<br />sponsorship.jaimemontoya.net (enabled by site administrator)<br />000-default-le-ssl (enabled by unknown)<br />000-default (enabled by site administrator)<br /></span><p>The subdomain <span class=\"cod\">https://sponsorship.jaimemontoya.net</span> works correctly, invoking the content in <span class=\"cod\">/var/www/sponsorship.jaimemontoya.net</span>, as specified in <span class=\"cod\">/etc/apache2/sites-available/sponsorship.jaimemontoya.net-le-ssl.conf</span>. Visiting <span class=\"cod\">http://sponsorship.jaimemontoya.net</span> redirects to <span class=\"cod\">https://sponsorship.jaimemontoya.net</span>, as specified in <span class=\"cod\">/etc/apache2/sites-available/sponsorship.jaimemontoya.net.conf</span></p><div><img src=\"/blog/2023/11/16/05/00/img/subdomainWorking.png\" alt=\"Subdomain working correctly\" width=\"462\" height=\"136\"></div><p>The \"Not secure\" message is still a problem. But the fix for that is going to be the topic for my next blog post.</p><hr>\n";
?>
