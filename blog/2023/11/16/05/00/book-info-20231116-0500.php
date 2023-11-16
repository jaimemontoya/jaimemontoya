<?php
  $index->content .= 
           "\t\t\t<div>5:00 AM GMT · Nov 16, 2023</div><p>I needed to have two websites on the same server: one at <code>jaimemontoya.net</code> and the other at <code>sponsorship.jaimemontoya.net</code>. My first step was to create <code>A</code> and <code>CNAME</code> records for <code>sponsorship.jaimemontoya.net</code> and <code>www.sponsorship.jaimemontoya.net</code>, respectively.</p><p>Create <code>A</code> Record:</p><div><img src=\"/blog/2023/11/16/05/00/img/createARecord.png\" alt=\"Create A Record\" width=\"1189\" height=\"776\"></div><p>Create <code>CNAME</code> Record:</p><div><img src=\"/blog/2023/11/16/05/00/img/createCNAMERecord.png\" alt=\"Create CNAME Record\" width=\"1087\" height=\"317\"></div><p><code>A</code> and <code>CNAME</code> Records created successfully:</p><div><img src=\"/blog/2023/11/16/05/00/img/AAndCNAMERecordsCreatedSuccessfully.png\" alt=\"A and CNAME Records created successfully\" width=\"1186\" height=\"531\"></div><p>I created a new directory for the subdomain, and the <code>index.html</code> file that I wanted to display, assigning proper file owner and group to the directory and file:</p><code>root@jaimemontoya:/var/www# chown -R jmontoya:jmontoya sponsorship.jaimemontoya.net<br />root@jaimemontoya:/var/www# cd sponsorship.jaimemontoya.net/<br />root@jaimemontoya:/var/www/sponsorship.jaimemontoya.net# ls -l<br />total 4<br />-rw-r--r-- 1 jmontoya jmontoya 101 Nov 15 23:47 index.html<br />root@jaimemontoya:/var/www/sponsorship.jaimemontoya.net# pwd<br />/var/www/sponsorship.jaimemontoya.net</code><p>The content of <code>index.html</code> was simply this:</p><code>root@jaimemontoya:/var/www/sponsorship.jaimemontoya.net# cat index.html<br />&lt;!DOCTYPE html&gt;<br />&lt;html&gt;<br />&lt;body&gt;<br />&lt;h1&gt;My First Heading&lt;/h1&gt;<br />&lt;p&gt;My first paragraph.&lt;/p&gt;<br />&lt;/body&gt;<br />&lt;/html&gt;<br />&lt;/p&gt;</code><p>I created <code>/etc/apache2/sites-available/sponsorship.jaimemontoya.net.conf</code>, the Apache configuration file for <code>http://sponsorship.jaimemontoya.net</code> whose purpose is to redirect <code>http://sponsorship.jaimemontoya.net</code> to <code>https://sponsorship.jaimemontoya.net</code>, with the following content:</p><code># Added to mitigate CVE-2017-8295 vulnerability<br />UseCanonicalName On<br />&lt;VirtualHost *:80&gt;<br /><span class=\"indent\">ServerAdmin webmaster@localhost</span><br /><span class=\"indent\">ServerName sponsorship.jaimemontoya.net</span><br /><span class=\"indent\">ServerAlias www.sponsorship.jaimemontoya.net</span><br /><span class=\"indent\">DocumentRoot /var/www/sponsorship.jaimemontoya.net</span><br /><span class=\"indent\">ErrorLog ${APACHE_LOG_DIR}/error.log</span><br /><span class=\"indent\">CustomLog ${APACHE_LOG_DIR}/access.log combined</span><br /><span class=\"indent\">RewriteEngine On</span><br /><span class=\"indent\">RewriteRule ^(.*)$ https://%{HTTP_HOST}$1 [R=301,L]</span><br />&lt;/VirtualHost&gt;<br /></code><p>I created <code>/etc/apache2/sites-available/sponsorship.jaimemontoya.net-le-ssl.conf</code>, the Apache configuration file for <code>https://sponsorship.jaimemontoya.net</code>, with the following content:</p><code>&lt;IfModule mod_ssl.c&gt;<br /><span class=\"indent\">&lt;VirtualHost *:443&gt;</span><br /><span class=\"indent2\">ServerAdmin webmaster@localhost</span><br /><span class=\"indent2\">ServerName sponsorship.jaimemontoya.net</span><br /><span class=\"indent2\">ServerAlias www.sponsorship.jaimemontoya.net</span><br /><span class=\"indent2\">DocumentRoot /var/www/sponsorship.jaimemontoya.net</span><br /><span class=\"indent2\">ErrorLog ${APACHE_LOG_DIR}/error.log</span><br /><span class=\"indent2\">CustomLog ${APACHE_LOG_DIR}/access.log combined</span><br /><span class=\"indent\">&lt;/VirtualHost&gt;</span><br />&lt;/IfModule&gt;<br /></code><p>I checked the sites that were enabled:</p><code>root@jaimemontoya:/etc/apache2/sites-available# a2query -s<br />000-default-le-ssl (enabled by unknown)<br />000-default (enabled by site administrator)</code><p>I enabled my new Apache sites/virtual hosts for <code>http://sponsorship.jaimemontoya.net</code> and <code>https://sponsorship.jaimemontoya.net</code>:</p><code>root@jaimemontoya:/etc/apache2/sites-available# a2ensite sponsorship.jaimemontoya.net.conf<br />Enabling site sponsorship.jaimemontoya.net.<br />To activate the new configuration, you need to run:<br /><span class=\"indent\">systemctl reload apache2</span><br />root@jaimemontoya:/etc/apache2/sites-available# a2ensite sponsorship.jaimemontoya.net-le-ssl.conf<br />Enabling site sponsorship.jaimemontoya.net-le-ssl.<br />To activate the new configuration, you need to run:<br /><span class=\"indent\">systemctl reload apache2</span></code><p>I activated the new configuration:</p><code>root@jaimemontoya:/etc/apache2/sites-available# systemctl reload apache2</code><p>I verified that my sites were enabled successfully:</p><code>root@jaimemontoya:/etc/apache2/sites-available# a2query -s<br />sponsorship.jaimemontoya.net-le-ssl (enabled by site administrator)<br />sponsorship.jaimemontoya.net (enabled by site administrator)<br />000-default-le-ssl (enabled by unknown)<br />000-default (enabled by site administrator)</code><p>I tried disabling and enabling sites and confirmed that everything worked as expected:</p><code>root@jaimemontoya:/etc/apache2/sites-available# a2dissite sponsorship.jaimemontoya.net.conf<br />Site sponsorship.jaimemontoya.net disabled.<br />To activate the new configuration, you need to run:<br /><span class=\"indent\">systemctl reload apache2</span><br />root@mfh-elsalvador:/etc/apache2/sites-available# systemctl reload apache2<br />root@mfh-elsalvador:/etc/apache2/sites-available# a2query -s<br />sponsorship.jaimemontoya.net-le-ssl (enabled by site administrator)<br />000-default-le-ssl (enabled by unknown)<br />000-default (enabled by site administrator)<br />root@mfh-elsalvador:/etc/apache2/sites-available# a2ensite sponsorship.jaimemontoya.net.conf<br />Enabling site sponsorship.jaimemontoya.net.<br />To activate the new configuration, you need to run:<br /><span class=\"indent\">systemctl reload apache2</span><br />root@mfh-elsalvador:/etc/apache2/sites-available# systemctl reload apache2<br />root@mfh-elsalvador:/etc/apache2/sites-available# a2query -s<br />sponsorship.jaimemontoya.net-le-ssl (enabled by site administrator)<br />sponsorship.jaimemontoya.net (enabled by site administrator)<br />000-default-le-ssl (enabled by unknown)<br />000-default (enabled by site administrator)<br /></code><p>The subdomain <code>https://sponsorship.jaimemontoya.net</code> works correctly, invoking the content in <code>/var/www/sponsorship.jaimemontoya.net</code>, as specified in <code>/etc/apache2/sites-available/sponsorship.jaimemontoya.net-le-ssl.conf</code>. Visiting <code>http://sponsorship.jaimemontoya.net</code> redirects to <code>https://sponsorship.jaimemontoya.net</code>, as specified in <code>/etc/apache2/sites-available/sponsorship.jaimemontoya.net.conf</code></p><div><img src=\"/blog/2023/11/16/05/00/img/subdomainWorking.png\" alt=\"Subdomain working correctly\" width=\"462\" height=\"136\"></div><p>The \"Not secure\" message is still a problem. But the fix for that is going to be the topic of my next blog post.</p><hr>\n";
?>
