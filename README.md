# _Luna_
## Steps to Run Luna
* Install [XAMPP](https://www.apachefriends.org/download.html)
* Download the zip file.
* Move the _Luna_ files in htdocs(a folder in XAMPP) & extract files.
* Make 3 Databases, using phpmyadmin, with name :
	* eventmanage
		- Make 2 table in it:
			1) adminlogin containing columns id, email, password & image
			2) register containing columns id, name, password, email, college, mobile_no
	* trial
* You have to manually add data in the adminlogin table.
* Insert Admin E-mail address and password in file `auto.php`.
* Admin will login from `adminlogin.php`.
* You are good to go.
