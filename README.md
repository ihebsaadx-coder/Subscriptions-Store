# Subscriptions-Store
This project contains my project work on a store management system built with PHP and MYSQL using XAMPP AND PHPMYADMIN 
STEPS TO RUN:
1. INSTALL XAMPP AND RUN APACHE AND SQL.
2. COPY THE FOLDER TO htdocs in xampp FOLDER
3. LOAD THE streamndcream.sql database TO PHPMYADMIN USING IMPORT IN PHPMYADMIN IN LOCAL SERVER , (you could use your own database , just change the name of your desired databse in config.php.)
4. Go to C:\xampp\php and open the php.ini file.Find [mail function] by pressing ctrl + f , Search and pass the following values: 
***smtp_port=587***
***sendmail_from = YourGmailId@gmail.com***
***sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"***
5. Now, go to C:\xampp\sendmail and open sendmail.ini file.Find [sendmail] by pressing ctrl + f.Search and pass the following values
***smtp_port=587***
***error_logfile=error.log***
***debug_logfile=debug.log***
***auth_username=YourGmailId@gmail.com***
***auth_password=Your-Gmail-Password***
***force_sender=YourGmailId@gmail.com(optional)***
