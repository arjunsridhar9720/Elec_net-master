# Elec_net
A online election system

Each user had to register once before the “Election day”. Each user was given a unique password (Private key) while registering. The password details and a confirmation link was sent by mail to the user. User can log in and has to wait for voting until the Election Day. On the day of the election, voting module would be enabled and user can vote. At the end of the day, all votes would be calculated and the winner of the elections would be declared the next day.
The website was hosted locally using a wamp server. Php MySql was used for the database connectivity.

A user could change his vote as the first time he may have been forced to vote. This additional feature  received a lot of praise at the same time was criticized as it wasn’t a biased option.

Technologies used:
HTML,CSS,JS, PHP, Sendmail, MySql, Wamp

	
Future implementations:
•	Collaborate with the government for using the Aadhaar Card database for validating users authenticity during the registrations.
•	It has also been suggested that the campaigning dates can also be displayed on the site.


Wamp server
Wamp 3.0.4 was used throughout this project
U can download it from their official site
Php any version above 7


Sendmail configuratuon
http://blog.techwheels.net/send-email-from-localhost-wamp-server-using-sendmail/


FILESYSTEM
The main "home" directory is a base directory for this project.
Some of the file's purposes are explained.
admin.php
  This file contains the code for the admin console
  The admin console typically includes controls for changing election dates,allowing voters to participate and disable the voting module     after election is over.

Resource directory includes Base and Vote directory.
Base directory contains 
 The register directory contains resources used in the registration page.
 Other resources that are used by template.
 Phiosopher Bold and Philospher Regulare are the font varaints.
Vote directory contains:
  Files used in the voting page.
  

Steps to download/implement in your workstation
1)Install Wamp server 
2)Install Notepad++
3)Go into www directory of wamp.(wamp's default directory is in C/programfiles/wamp, unless you have changed it during installation.wamp and wamp64 refer to the same directory.(32 bit or g4 bit))
4)Paste this Elec_net directory in www directory.
5)Start your wamp server.
6)Start your browser(Preferred:Chrome) and go to your localhost site.
7)Go to localhost/Elec_net/home/db.php and you will get output as "Connected successfullyDatabase created successfully Table info created successfully Table info1 created successfullyTable dates created successfully".(db.php is used for creating all required databases and tables).
8)Change the url to localhost/Elec_net/home/index.php.
9)Click on the admin console below.
10)Set the dates properly (Order:Registration then voting and then result)
11)Navigate to the registration page and then register a candiate and then as a voter.
12)The password is sent to the email address that you had given during registration.
13)Login and Vote (change dates from admin console if required)
14)Go the announcements page and check the result.(change dates from admin console if required)
Thank you
Also please refer to the Screenshots present at home/screenshots/screenshots.docx.
If you have any problems u can always pm me at delta501405@gmail.com
  
  

  
