# Overview
Larabye is a mini PHP & MVC based framework, created by **Mouad ZIANI (ROMAC)**, 
# Installation
### Requirements
- PHP >= 7.2
- mod_rewrite enabled
- Composer installed
### Download
Clone <code>$ git clone https://github.com/mouadziani/Larabye.git</code> or download the zip folder.
### Setup
if you used the the download button unzip the folder and then open it, you can use the following commands if you like terminal:

      $ cd Larabye-master  

Then run composer to install dependecies

      $/ Larabye-master# composer install  

Now it's all done, you only need to create a database and change configurations in **app/config.php** to match your server's configuration, for example:

 <pre>                        
    /*
    * Database Configuration
    */
    $dbName   = 'larabye_db';
    $host     = 'localhost';
    $userName = 'root';
    $password = 'root';
</pre>
                                
# Architecture
Larabye is easy to use and understand, if you still have a doubt about how PHP/MVC works, you can use this framework to give you a push forward.

                                         ├── app
                                         │   ├── controllers
                                         │   │   ├── HomeController.php
                                         │   │   └── UserController.php
                                         │   ├── core
                                         │   │   ├── App.php
                                         │   │   └── Controller.php
                                         │   ├── helpers
                                         │   │   ├── Dao.php
                                         │   │   └── helper.php
                                         │   ├── models
                                         │   │   └── User.php
                                         │   ├── views
                                         │   │   ├── partials
                                         │   │   │   ├── _header.php
                                         │   │   │   ├── _footer.php
                                         │   │   │   └── _sub_footer.php
                                         │   │   ├── users
                                         │   │   │   ├── index.php
                                         │   │   │   ├── create.php
                                         │   │   │   └── edit.php
                                         │   │   └── home.php
                                         │   ├── init.php
                                         │   ├── database.php
                                         │   └── .htaccess
                                         ├── composer.json
                                         ├── public
                                         │   ├── css
                                         │   │   ├── bootstrap.min.css
                                         │   │   ├── font-awesome.min.css
                                         │   │   ├── site.min.css
                                         │   │   └── custom.css
                                         │   ├── fonts/..
                                         │   ├── imgs/..
                                         │   ├── js
                                         │   │   ├── bootstrap.min.js
                                         │   │   ├── jquery-1.10.1.min.js
                                         │   │   ├── site.min.js
                                         │   │   └── /..
                                         │   ├── .htaccess
                                         │   └── index.php
                                         ├── .gitignore
                                         ├── composer.json
                                         └── READMED.md
                                        
 ## Note 
 This project was made for 8.19
