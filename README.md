# KeyAuth-SellerAPI-Linkvertise
Example for a linkvertise keysystem using KeyAuth's Seller API

People were struggling with this one so I thought I'd release this.

Instead of using files named with ip address and containing a unix timestamp like many websites, this source uses PHP sessions, accomplishing the same concept more effectively.

This requires KeyAuth seller plan to utlilize the seller API. 
Upgrade at https://keyauth.com/dashboard/upgrade/

**Setup:**

Change linkvertise links in index.php and step pages.

- Set 1st linkvertise to redirect to step2.php
- Set 2nd linkvertise to redirect to step3.php
- Set 3rd linkvertise to redirect to step4.php
- Set 4th linkvertise to redirect to final.php

Change to your seller key in final.php

Enjoy!
