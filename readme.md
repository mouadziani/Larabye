# 🎉 Larabye 🎉
[![PHP Min](https://img.shields.io/badge/PHP-%3E%3D%205.3-blue.svg)](https://github.com/php)
[![GitHub license](https://img.shields.io/github/license/nhn/tui.calendar.svg)](https://github.com/MouadZIANI/Larabye/blob/master/LICENSE)
[![PRs welcome](https://img.shields.io/badge/PRs-welcome-ff69b4.svg)](https://github.com/mouadziani/Larabye/labels/help%20wanted)
[![code with hearth by ZIANI Mouad (ROMAC)](https://img.shields.io/badge/%3C%2F%3E%20with%20%E2%99%A5%20by-ZIANI-ff1414.svg)](https://github.com/mouadziani)

Larabye is a mini PHP framework inspired from laravel features, created by **Mouad ZIANI (ROMAC)** 
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

      $/ Larabye-master composer install  

Now it's all done, you only need to create a database and change configurations in **app/config.php** to match your server's configuration, for example:

```php                     
    /*
    * Database Configuration
    */
    $dbName   = 'larabye_db';
    $host     = 'localhost';
    $userName = 'root';
    $password = 'root';
```

# Architecture
Larabye is easy to use and understand, if you still have a doubt about how PHP/MVC works, you can use this framework to give you a push forward.

```bash
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
    │   │   └── *.css
    │   ├── fonts/..
    │   ├── imgs/..
    │   ├── js
    │   │   └── *.
    │   ├── .htaccess
    │   └── index.php
    ├── .gitignore
    ├── composer.json
    ├── LICENCE
    └── README.md
```      

## License
Larabye is licensed under the [MIT](LICENSE) license.

## Note 
This project was made for 8.19

Feautred_Repo
