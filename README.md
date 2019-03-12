## HKMS-FHSU-SE-Project 
Installation Instructions

<h3>Recommended Method:</h3>
Build using docker
Please install <a href="https://docs.docker.com/install/">Docker</a> and <a href="https://docs.docker.com/compose/install/">docker-compose</a> based on your operating system.


<h3>Alternatively, build on host machine</h3>
<h3>Pre-Requisites</h3>
Make sure you have installed SQL and Apache Web Server
Based on your operating system, download and install one of the followings:
+ XAMPP (X-OS)
+ WAMP (Windows)
+ LAMPP (Linux)
Make sure you have PHP version >= 7 running on your machine. To test your php version, run the following command:
  #php --version

<h3>Set Up</h3>
1. Download project
Find the code file packaged in the project folder and save it,
or alternatively,
Clone from the project repository by entering the following command:
  #git clone https://github.com/heanhsok/hkms-fhsu-se-project 
2. Install project dependency
Download Composer here. Then navigate to the project folder and run the installation by typing the following command:
  #composer install
  #composer update
3. Generate a new key for your .env file
On the project directory, type
  #php artisan key:generate
4. Create a database
Make sure your SQL server is up and running.
Through phpMyAdmin interface:
Open your browser and type the following url: localhost/phpMyAdmin
Give your database a name and click create to create new database.

5. Configure .env file
Change the name of the sql database, the username, and password, and make sure to save as .env and not .env.example
* By default, the username is root and there is no password.

6. Run Database Migration and Seeder to roll the database fields and populate it with test data.
Type the following command:
  #php artisan migrate
  #php artisan db:seed
7. Run
Make sure your XAMPP/WAMPP/LAMP server is running
Execute the following command:
  #php artisan serve
Will output the following script:
Laravel development server started: <http://{host}:{port}>

Copy the address above to your browser. The project should now run.
Congratulations! You’re using nEdCom application!
