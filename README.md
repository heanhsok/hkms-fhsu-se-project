## NEDCOM (Networking, EDucation, and COMmunication)<br>
Simple web-based application for university students.<br>
Read more about project <a href="https://github.com/heanhsok/hkms-fhsu-se-project/blob/master/Report3-Final.pdf">here.</a>

<h2>Installation</h2>
<h3>Recommended Method:</h3>
Build using docker</br>
Please install <a href="https://docs.docker.com/install/">Docker</a> and <a href="https://docs.docker.com/compose/install/">docker-compose</a> based on your operating system.</br></br>
clone project and in the project directory, run </br>
$ git submodule update --init --recursive <br>
will install laradock submodule.</br></br>
Then copy the project .env file</br>
$ cp .env.example .env</br>
Edit .env file by changing DB_HOST to mysql</br>
Edit /config/database.php and set DB_HOST = mysql and DB_DATABASE, DB_USERNAME, DB_PASSWORD = same as in your .env file<br><br>
Configure laradock</br>
$ cd laradock</br>
Copy laradock .env file</br>
$ cp env-example .env</br>
Edit laradock/.env - set MYSQL_VERSION=5.6 and MYSQL_DATABASE, MYSQL_USER, MYSQL_PASSWORD to be same as in the root project's .env file</br></br>

To start the docker containers<br>
$ cd laradock</br>
$ docker-compose build --no-cache mysql</br>
will build the specified version of mysql. By default, laradock will pull latest version of mysql which is not compatible with php > 7</br>
$ docker-compose up -d mysql nginx phpmyadmin</br>
will start the three containers<br><br>

Then, execute the workspace<br>
$ cd laradock</br>
$ docker-compose exec workspace bash</br>
From inside the workspace container bash, run the following commands:<br>
$ composer install<br>
$ composer update<br>
$ php artisan key:generate<br>
$ php artisan migrate<br>
$ php artisan db:seed<br><br>

After migration is successful, you can now access project interface through<br>
http://localhost<br>
and phpmyadmin interface is at<br>
http://localhost:8080<br>


<h3>Alternatively, build on host machine</h3>
Please install MySQL 5.6, PHP >= 7, <a href="https://getcomposer.org/download/">Composer</a> and a web server (wamp, xampp, ..) based on your operating system.<br><br>
#Install project dependency<br>
Clone the project then navigate to the project directory and run:<br>
$ composer install<br>
$ composer update<br>
$ php artisan key:generate<br><br>

Then copy the project .env file</br>
$ cp .env.example .env</br>
Edit /config/database.php and set DB_HOST = mysql and DB_DATABASE, DB_USERNAME, DB_PASSWORD = same as in your .env file<br><br>

#Create a database<br>
Run your web server and mysql server<br>
Then create a database with name as specified in your .env file<br>

#Run Database Migration and Seeder</br>
$ php artisan migrate<br>
$ php artisan db:seed<br>
will roll the database fields and populate it with test data.<br>
$ php artisan serve<br>
will output the following script:</br>
Laravel development server started: <http://{host}:{port}><br>

Copy the address above to your browser. The project should now run.<br>
Congratulations! You’re using nEdCom application!
