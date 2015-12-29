#To-Do List
This is the priority of what needs to be done. Should finish this right after the end of exams.
##Cleaning up and Migration
The current codebase in test is horrible. No orginization whatsoever, minimal (and sometime wrong) comments, and multiple orphaned files. Please clean it up.
##Account System
### [account.php](http://world.ac/test/account.php)
#### Navbar work
* ~~Fix navbar not displaying name properly in "welcome" message~~
* Navbar element element is too long, which double-stacks login/register on a screen res between 1080p and mobile

#### Wrong password
* Make wrong password pop an alert telling that the password is wrong, instead of just redirecting

####Notification System (1)
* Display certain notifications based on information tied to the user.
* Payment will be tied to a variable.
* Email Confirmation is tied to completiton (so a variable).
* Reg Competition also requires you to finish inputting your school/special notes.
* Plenary Selection is a Boolean that Matt will edit later. Starts off as False.
* Display # of notifications in navbar

####Email Confirmation System (2)
Sends an email to confirm registration.

####Forgot Password System (3)
If the user forgets their password, they can reset it by sending an email to their preconfirmed email.
