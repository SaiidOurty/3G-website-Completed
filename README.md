Install XAMPP
=============

Download XAMPP from the <a href="https://www.apachefriends.org/index.html">official site</a>. Ensure the appropriate option is selected for the operating system in which the site will be run on.

Start Apache and MySQL
=============
Once successfully installed. In the XAMPP control panel, click on ‘Start’ under ‘Actions’ for the Apache and MySQL modules. 
Note: if this fails you may need to right click and run the control panel as administrator. 

Accessing Site in the Browser
=============
Open your web browser and go to http://localhost or 127.0.0.1 to access the site.

Setting Up 3G Website
=============
Removed htdocs folder and download the provided htdocs folder for 3G website. Copy this in the same location. 

Database Setup 
=============
With the provided db_threeg.sql dump found in the htdocs directory. Use this to create the "db_threeg" database with all it's tables. 

Navigate to the phpmyadmin page by going to the url:http://127.0.0.1/phpmyadmin/. Click the import link in the top navigation. 

Under the "files to import" section, choose the db_threeg.sql file and then hit go. 

