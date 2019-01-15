<?php

if(!session_id()) @session_start();

require_once '../vendor/autoload.php';

require_once 'config.php';

require_once 'helpers/helper.php';

require_once 'database.php';

require_once 'helpers/Dao.php';

require_once 'core/App.php';

require_once 'core/Controller.php';
