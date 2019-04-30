<? // settings.php



/**
 * Configuration for: Database
 * This is the place where you define your database credentials, database type
 * etc.
 */


/*
 Local with default credentials
 */
/*
 define('DB_TYPE', 'mysql');
 define('DB_HOST', 'localhost');
 define('DB_NAME', 'monarchsevents');
 define('DB_USER', 'root');
 define('DB_PASS', 'root');*/




/*
 Local host connection with user credentials
 */






define  (  'DB_TYPE'  ,  'mysql'  );
define  (  'DB_HOST'  ,  'localhost'  );
define  (  'DB_NAME'  ,  'monarchsevents'  );
define  (  'DB_USER'  ,  'Mamatunde'  );
define  (  'DB_PASS'  ,  'Tewo77#!'  );
/*

*/





// Remote host connection with user credentials


/*
 define  (  'DB_TYPE'  ,  'mysql'  );
 define  (  'DB_HOST'  ,  'localhost'  );
 define  (  'DB_NAME'  ,  'deewan84_monarchsevents'  );
 define  (  'DB_USER'  ,  'deewan84_mamatun'  );
 define  (  'DB_PASS'  ,  'Tewo7717#!'  );
*/






// * timezone and date settings
$timezone_identifier  =  "Europe/London";
date_default_timezone_set  (  $timezone_identifier  );


// error settings (from php.ini)


/*
ini_set  (  "display_errors"  ,  TRUE  );
ini_set  (  "error_reporting"  ,  E_ALL  );*/



// these will need to be turned off when you publish your site


// Other Files Required to set up the application
require_once ('paths.php');
?>