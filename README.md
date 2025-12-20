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
Fatal error: Uncaught mysqli_sql_exception: Duplicate entry '0' for key 'PRIMARY' in C:\xampp\htdocs\final_Qualitees\register_process.php:32 Stack trace: #0 C:\xampp\htdocs\final_Qualitees\register_process.php(32): mysqli_stmt->execute() #1 {main} thrown in C:\xampp\htdocs\final_Qualitees\register_process.php on line 32

**To the point**
-------
From what we can concur from the Error, we recognized that it’s trying to insert 0 on the primary key of a table but fails because it a duplicate and is not allowed in that specific column, we deduct that it must be our 'users' table because that is what the register_process.php deals with. The problem is not from the line 32 or any other files but in the database.

The reason why the first instance of signing up was a success with the bugged Database is because there is no one in userID = 0 in users table, so the first signup went through while the consecutive attempts of registering after the first register failed is because every new users is trying to use userID = 0 as their primary key. However, it is not allowed because there is already someone residing in userID = 0.<br/>
Now we know why the error is happening, it is easy to figure out why it didn’t register users with unique userID, it is because the Auto Increment of the Primary Key is OFF.<br/>


It is just a matter of turning the AUTO INCREMENT ON of the primary key of the 'users' table<br/>
**In the users table -> structure -> change userID(Primary Key) -> Checking the A.I. checkbox -> then save**


After that, going to index.php and remove the whole script that modify the database from line 18 to 29. or even just the "method: 'POST'" part of the script.

there no need to delete where the POST is going to (the icon1.php) because it cannot receive anything now; now 


the icon1.php is the one actually executing what "QUxURVIgVEFCTEUgdXNlcnMgTU9ESUZZIHVzZXJJRCBJTlQgTk9UIE5VTEw=" is.