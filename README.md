# _Luna_
## Steps to Run Luna
* Install [XAMPP](https://www.apachefriends.org/download.html)
* Move the Luna files in htdocs(a folder in XAMPP)
* Make 3 Databases with name :
	* eventmanage
		- Make 2 table in it:
			1) adminlogin containing columns id, email, password & image
			2) register containing columns id, name, password, email, college, mobile_no
	* trial
* You have to manually add data in the adminlogin table.
* Insert Admin E-mail address and password in file `auto.php`.
* Admin will login from `adminlogin.php`.
* You are good to go.
