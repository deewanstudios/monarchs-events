<?

	// paths.php

// this file is responsible for including any common paths
// which will be used...they will be stored as constants

define("DS", DIRECTORY_SEPARATOR);

// define the root of the project

define("ROOT", dirname(dirname(__FILE__)). DS);

// define("FILE_ROOT", dirname(__FILE__). DS);*

define("BR", "<br/>");

define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);


// dirname(__FILE__) finds the path to the folder which the current file is in (ie the config folder)
// dirname(dirname(__FILE__)) finds the folder which the config folder is in (ie the root folder)


// set up the paths...
define("CONFIG", ROOT."configuration".DS);
define("APP", ROOT."controllers".DS);
define("IMAGES", URL. "images"."/");
define("THUMBS", IMAGES. "thumbs"."/");
define("MODELS", ROOT."models".DS);
define("LIBS", ROOT."libraries".DS);
define("VIEWS", ROOT."views".DS);
define("PORTFOLIO", IMAGES."portfolio".DS);



?>