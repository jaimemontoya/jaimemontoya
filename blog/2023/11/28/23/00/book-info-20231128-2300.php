<?php
  $index->content .= 
           "<p>According to <a href=\"https://getreadyletsgrow.com/turbify-url-changes/\">https://getreadyletsgrow.com/turbify-url-changes/</a>, \"On June 10, 2022, Verizon's Small Business Essentials (formerly Yahoo Small Business) was acquired by Infinite Computer Solutions. It is being rebranded as Turbify.\" I decided to change domain name registrar from Turbify to Namecheap.</p><p>I am sharing below my DNS Records configured from the Turbify interface.</p><p>Turbify A and CNAME Records:</p><div><img src=\"/blog/2023/11/28/23/00/img/turbifyAandCNAMERecords.jpg\" alt=\"Turbify A and CNAME Records\" width=\"445\" height=\"352\"></div><p>Turbify TXT Records:</p><div><img src=\"/blog/2023/11/28/23/00/img/turbifyTXTRecords.jpg\" alt=\"Turbify TXT Records\" width=\"581\" height=\"144\"></div><p>Turbify MX Records:</p><div><img src=\"/blog/2023/11/28/23/00/img/turbifyMXRecords.jpg\" alt=\"Turbify MX Records\" width=\"728\" height=\"445\"></div><p>Turbify Name Servers:</p> <div><img src=\"/blog/2023/11/28/23/00/img/turbifyNSRecords.jpg\" alt=\"Turbify NS Records\" width=\"728\" height=\"220\"></div> <p>How to get the authorization code to transfer a domain away from Turbify is explained at <a href=\"https://help.turbify.com/s/article/how-do-i-transfer-my-domain-to-a-new-registrar\">https://help.turbify.com/s/article/how-do-i-transfer-my-domain-to-a-new-registrar</a>. By clicking the \"View\" link, I could see the Authorization Code:</p> <div><img src=\"/blog/2023/11/28/23/00/img/getTurbifyDomainTransferAuthorizationCode.jpg\" alt=\"Get Turbify domain transfer Authorization Code\" width=\"917\" height=\"150\"></div> <p>A pop-up window appeared with the \"Follow these steps\" link:</p> <div><img src=\"/blog/2023/11/28/23/00/img/turbifyFollowTheseStepsAuthorizationCodeLink.jpg\" alt=\"Turbify Follow These Steps Authorization Code link\" width=\"701\" height=\"321\"></div> <p>Finally, I received could obtain the Authorization Code to transfer my domain away from Turbify.</p><div><img src=\"/blog/2023/11/28/23/00/img/authorizationCodeToTransferDomainAwayFromTurbify.jpg\" alt=\"Authorization Code to transfer domain away from Turbify\" width=\"559\" height=\"846\"></div> <p>From <a href=\"https://www.namecheap.com/\">https://www.namecheap.com/</a> I verified that my domain jaimemontoya.com was eligible for transfer. Then I provided the Authorization Code that I obtained from Turbify:</p> <div><img src=\"/blog/2023/11/28/23/00/img/domainNameTransferEligibilityForJaimemontoyaDotCom.jpg\" alt=\"Authorization Code to transfer domain away from Turbify\" width=\"1051\" height=\"723\"></div> <p>I completed my domain transfer order from Namecheap:</p> <div><img src=\"/blog/2023/11/28/23/00/img/domainTransferOrderFromNamecheap.jpg\" alt=\"Authorization Code to transfer domain away from Turbify\" width=\"973\" height=\"472\"></div> <p>I received my Namecheap order confirmation and purchase summary:</p> <div><img src=\"/blog/2023/11/28/23/00/img/namecheapOrderConfirmationAndPurchaseSummary.jpg\" alt=\"Namecheap order confirmation and purchase summary\" width=\"1060\" height=\"893\"></div> <p>In my Namecheap Dashboard, I found jaimemontoya.com with an alert and the following status: \"Awaiting email confirmation.\".</p> <div><img src=\"/blog/2023/11/28/23/00/img/domainStatusFromNamecheap.jpg\" alt=\"Namecheap order confirmation and purchase summary\" width=\"742\" height=\"196\"></div> <p>I received an email from Turbify to notify me about the transfer away request for jaimemontoya.com:</p> <div><img src=\"/blog/2023/11/28/23/00/img/transferAwayRequestFromTurbify.jpg\" alt=\"Transfer away request from Turbify for jaimemontoya.com\" width=\"431\" height=\"587\"></div> <p>I clicked the \"website\" link from the email above, and it contained the following:</p> <div><img src=\"/blog/2023/11/28/23/00/img/turbifyDomainTransferConfirmation.jpg\" alt=\"Turbify domain transfer confirmation\" width=\"732\" height=\"961\"></div> <p>I clicked the \"ACCEPT TRANSFER\" button. I was expecting to get some success confirmation message, but I did not. When I tried reloading <a href=\"https://approve.domainadmin.com/transfer/?away=1&domain=jaimemontoya.com&id=mN6uYHbaS4\">https://approve.domainadmin.com/transfer/?away=1&domain=jaimemontoya.com&id=mN6uYHbaS4</a>, I received this message:</p> <div><img src=\"/blog/2023/11/28/23/00/img/noActiveTransferRequestFound.jpg\" alt=\"No active transfer request found / AAT\" width=\"639\" height=\"78\"></div> <p>From the Namecheap Dashboard, the status message changed from \"Awaiting email confirmation\" to \"Awaiting release from previous registrar\":</p> <div><img src=\"/blog/2023/11/28/23/00/img/statusChangeToAwaitingReleaseFromPreviousRegistrar.jpg\" alt=\"No active transfer request found / AAT\" width=\"566\" height=\"177\"></div> <p>According to <a href=\"https://www.namecheap.com/support/knowledgebase/article.aspx/270/83/what-does-awaiting-release-from-previous-registrar-transfer-status-mean/\">https://www.namecheap.com/support/knowledgebase/article.aspx/270/83/what-does-awaiting-release-from-previous-registrar-transfer-status-mean/</a>, that status means that \"there are no issues at this time, the transfer is being processed normally.\"</p> <p>I received a Domain Transfer Complete confirmation email from Namecheap:</p> <div><img src=\"/blog/2023/11/28/23/00/img/namecheapDomainTransferCompleteEmail.jpg\" alt=\"Namecheap Domain Transfer Complete email\" width=\"452\" height=\"186\"></div> <p>This is the body of the Domain Transfer Complete confirmation email that I received from Namecheap:</p> <div><img src=\"/blog/2023/11/28/23/00/img/namecheapDomainTransferCompleteEmailConfirmation.jpg\" alt=\"Namecheap Domain Transfer Complete email\" width=\"564\" height=\"686\"></div> <p>The domain jaimemontoya.com appeared in the Namecheap Dashboard with the \"ACTIVE\" status:</p> <div><img src=\"/blog/2023/11/28/23/00/img/domainSuccessfullyTransferredInNamecheapDashboard.jpg\" alt=\"jaimemontoya.com successfully transferred in the Namecheap Dashboard\" width=\"564\" height=\"686\"></div><p>From my Namecheap Dashboard Domain configuration, I found that the NAMESERVERS were pointing to <span class=\"cod\">ns1.turbify.com</span> and <span class=\"cod\">ns2.turbify.com</span>:</p> <div><img src=\"/blog/2023/11/28/23/00/img/nameserversStillPointingToTurbify.jpg\" alt=\"NAMESERVERS still pointing to Turbify\" width=\"1112\" height=\"574\"></div> <p>I changed the NAMESERVERS to these values: <span class=\"cod\">ns1.digitalocean.com</span>, <span class=\"cod\">ns2.digitalocean.com</span> and <span class=\"cod\">ns3.digitalocean.com</span>:</p> <div><img src=\"/blog/2023/11/28/23/00/img/nameserversChangedToDigitalOcean.jpg\" alt=\"NAMESERVERS changed to DigitalOcean\" width=\"1110\" height=\"589\"></div> <p>I already had the DNS Records configured for jaimemontoya.com in the DigitalOcean domains interface:</p> <div><img src=\"/blog/2023/11/28/23/00/img/digitalOceanDomainsDNSRecords.jpg\" alt=\"DigitalOcean domains DNS Records\" width=\"1110\" height=\"589\"></div> <p>I was missing MX Records. I added them by clicking the \"Add Gmail MX Records\" button.:</p> <div><img src=\"/blog/2023/11/28/23/00/img/addGmailMXRecords.jpg\" alt=\"Add Gmail MX Records\" width=\"1153\" height=\"442\"></div> <p>Five MX Records were added after clicking the \"Add Gmail XM Records\" button:</p><div><img src=\"/blog/2023/11/28/23/00/img/mxRecordsAddedSuccessfully.jpg\" alt=\"MX Records added successfully\" width=\"1000\" height=\"723\"></div> <p>The steps I followed to setup DKIM records were:</p><ol><li>Login to my Google Workspace Admin Console from <a href=\"https://admin.google.com/\">https://admin.google.com/</a>:<div><img src=\"/blog/2023/11/28/23/00/img/googleWorkspaceAdminConsole.jpg\" alt=\"Google Workspace Admin Console\" width=\"1867\" height=\"987\"></div><br /><li>Go to Apps > Google Workspace > Gmail:<div><img src=\"/blog/2023/11/28/23/00/img/goToGmailFromGoogleWorkspaceConsole.jpg\" alt=\"Google Workspace Admin Console\" width=\"1824\" height=\"880\"></div><br /><li>Click on 'Authenticate email':<div><img src=\"/blog/2023/11/28/23/00/img/authenticateEmail.jpg\" alt=\"Google Workspace Admin Console\" width=\"1303\" height=\"648\"></div><br /><li>Click on 'Generate New Record'. I did not need to follow this step because I had already done it in the past. I saw the status as \"Not authenticating email\":<div><img src=\"/blog/2023/11/28/23/00/img/dkimAuthenticationValues.jpg\" alt=\"DKIM authentication status: Not authenticating email\" width=\"1820\" height=\"910\"></div></ol><div>Published: 11:00 PM GMT · Nov 28, 2023</div>\n";
?>
