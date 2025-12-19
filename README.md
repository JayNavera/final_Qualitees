# QualiTees-Project
Project for Web System and Technology

Members:
- Bernaldez, Marc Eduard N.
- Briagas, Vince Franquine V.
- Navera, Jaymark O.
- Paclita, Ruvic M.
- Pormatelo, Jovan E.

Thank you
All rights reserved © 2025

OLD DATABASE:
https://github.com/menb2023-6398-56806-code/QualiTees-Project
with 29 commits


Error 
------
Fatal error: Uncaught mysqli_sql_exception: Duplicate entry '0' for key 'PRIMARY' in C:\xampp\htdocs\QualiTees-Project-main\register_process.php:32 Stack trace: #0 C:\xampp\htdocs\QualiTees-Project-main\register_process.php(32): mysqli_stmt->execute() #1 {main} thrown in C:\xampp\htdocs\QualiTees-Project-main\register_process.php on line 32

**To the point**
-------
From the error code alone, we recognized that it’s trying to insert 0 on the primary key of a table, we deduct that it must be our 'users' table because that is what the register_process.php deals with.

The reason why the first instance of signing up was a success with the bugged Database is because there is no one in userID = 0 in users table, so the first signup went through  the consecutive attempts of registering after the first is a fail is because every new users will be using a duplicate primary key and is not allowed because there is already someone residing in userID = 0.<br/>
Now we know why the error is happening, it is easy to figure out why it didn’t register users with unique userID, it is because the Auto Increment of the Primary Key is OFF.

It is just a matter of turning the AUTO INCREMENT ON of the primary key of the 'users' table<br/>
**By going to the users table -> structure -> change userID(Primary Key) -> Checking the A.I. checkbox -> then save**

After that, register_process.php is now working fine and now can register new users.

<br/>
<br/>
<br/>
<br/>


Our Progression Towards the Solution
------
The part where we are figuring things out.<br/>
From the error code alone, we recognized that it’s trying to insert 0 on the primary key of a table, we deduct that it must be our 'users' table because that is what the register_process.php deals with.



We thought that maybe the BUGGER(index.php) inserted something like "userID = 0" or (PRIMARY = 0 and userID = PRIMARY) something along those lines and put it into the our code or something that overrides the Auto Increment we placed in the DB on primary key.
The natural flow of Auto Increment is that it will just repeatedly increment as long there is data inside other columns(but cannot fill already deleted primary key.)


Just to be extremely sure, we first check if there are specified lines.
The first thing we look at is where line 32 is and the lines around it. We consulted the pdfs provided to assist our group in accomplishing the assignment. We concluded that there is nothing wrong with that specific line. 
So, we then focused on the placeholders [prepare stmt] and on the bind_param and the the same process but find no error. 
After finding none, we then tried to skim and scan the whole register_process.php with the help of 'CTRL + F'. 
We also looked at whether the content of $_SERVER is changed.
- all the lines seem clean




We then go to the register.php [the UI/html part]
we checked if there is some way that the Bugger inserted something inside register.php to make it override the Auto Increment.
	- The register.php is also clean.

Other path we take that led to nowhere;
Maybe the href's and similars are tampered. (it was not).

Finish line
-----------------------

After many tries in registering, a discussion is made about why do the registering fails… why it says Duplicate Entry. We deduced that the sql code is trying to insert in an already filled rows (hence why it say duplicate). But we remember that there is no such entry as 0 in any Primary Keys we made in the past. Why does it want to insert the newly being registered user as userID = 0? Something doesn’t add up. We don’t even define userID in register_process.php

The reason why the going to the database wasn’t crossing our minds is because we our group is halved. Half of us members think that the Bugger can’t manipulate database and the other half think there’s nothing bad checking on it. After some time, we checked the database because we are making no progress.
	We noticed that the ‘users’ table has ID of 0 and when compared to other tables; the other tables do not have ID = 0.  
Now we know really that the Bugger can modify the Database. We don’t know how, but it can.

The reason why we didn’t rush to the Database the first time even though we knew there’s something wrong about the auto increment is that we thought at first that the Bugger can only modify the phps and htmls.
	The reason why the first instance of signing up was a success with the bugged Database is because there is no one in userID = 0 in users table, so the first signup went through  the consecutive attempts of registering after the first is a fail is because every new users will be using a duplicate primary key and is not allowed because there is already someone residing in userID = 0.
	Now we know why the error is happening, it is easy to figure out why it didn’t register users with unique userID, it is because the Auto Increment of the Primary Key is OFF.

It is just a matter of turning the AUTO INCREMENT ON of the primary key of the 'users' table and the register_process.php is now working fine and now can register new users.

Minor issue we dealt with:
	We can't turn on the A.I(auto increment), it gave an error message, something about its Row cannot be deleted because it is a foreign key to receipt table. Deleting the the user with userID = 0 fixes it and you can now activate auto increment.




TLDR: di namin inaasahan na nakakagalaw ng database ang Bugger sir. pinag-off pala ng Bugger ang Auto Increment ng 'users' table's primary key[userID]





