
## Story Teller Application.

![alt demo](https://alphatechsoftwaresolution.com/img/Screen-Recording-2022-03-31-at-1.gif?raw=true)



1. [Introduction and technology list](#Introduction-and-technology-list)

Storyteller enables users who are storytellers to upload a story/stories where users can view all stories on the home page and also filter stories by location and category. The application was built using PHP as the server side language and HTML, CSS and JS for the frontend development. To quickly build a prototype of a story telling application.

Server side scripting Language: PHP (CodeIgniter framework)
Frontend development stack: HTML, CSS(Bootstrap) and Javascript
Database: Mysql

Link to download video Demo: ``https://alphatechsoftwaresolution.com/img/Screen-Recording-2022-03-31-at-1.gif``

1. [Installation Guide](#Installation Guide)

Below are the steps to follow to step up the application.

Before you set up the application you must have WAMP, MAMP, LAMP or XAMP installed on your local machine.

Follow the steps below to install the application:

1. Clone the Github Repository : ``https://github.com/Emmadimgba/storyteller.git``
1. Open the source code in your IDE.
1. Go to your MYSQL database (PHPMyadmin) and import the database file located at <project-dir>/db/storyteller.sql
1. Open Codeigniter database configuration file located in <project-dir>/application/config/database.php
1. Enter the database configration of your local environment.

```php
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => 'password',
	'database' => 'storyteller',
        'port' => 8889,
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

```
1. Navigate to your browser to access the application

## Refrences for asset used in Application

The Frontend application (blog and admin) was developed using a downloaded template. see below link where the template were downloaded.

1. FrontEnd Template URL: ``https://github.com/BootstrapDash/skydash-free-bootstrap-admin-template``
2. Backend Template URL: ``https://www.bootstrapdash.com/product-category/free-bootstrap-admin-templates/``

images
https://www.flickr.com/photos/janashdown/28072840757/in/photolist-JLGDvP-2h6WM4t-8eDScS-bfh664-nmGZhU-WxkWWa-MyPqrR-Z22yMv-Eb4BsL-ffs6Gg-UzzRpq-2mXajXL-29iRW9q-3aKSJ-pUo3x8-qX6nYt-r7yr6w-fz6PUi-vTAjFV-dUkNAo-fgUVzD-V2J8DD-8gGBa1-dUfbxK-afLweC-c8HCfG-vhLJMb-q1f3py-4n9c4L-qEnSDC-Eb4zFj-xa61C3-HVNJof-G6fVuT-wQsTAF-bHSmUp-mqYUVr-o45KH-8oGhex-5e1XxG-wN9ikL-2jUfht-9pZ24C-5C8vzs-2kXhbi1-21Kbs-2hhG8pp-5YCRh-nrfZ1t-Xzvzw3

