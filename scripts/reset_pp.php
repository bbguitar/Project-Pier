#!/usr/bin/php
<?php
define('ROOT', realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..') . DIRECTORY_SEPARATOR);
if (!file_exists(ROOT . 'config/config.php'))
{
    die("No config file to glean information from - quitting" . PHP_EOL);
}
require ROOT . 'config/config.php';

switch (DB_ADAPTER)
{
    case 'mysql':
        wipe_mysql_db();
        break;
    default:
        die("Script not implemented for " . DB_ADAPTER . " databases yet" . PHP_EOL);
}
if (!unlink(ROOT . 'config/config.php'))
{
    die("Could not remove config/config.php" . PHP_EOL);
}

function wipe_mysql_db()
{
    mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Could not connect to database" . PHP_EOL);
    mysql_select_db(DB_NAME) or die("Could not connect to database" . PHP_EOL);
    ($res = mysql_query("SHOW TABLES")) or die("Failed to query db" . PHP_EOL);


    $tables = array();
    while ($row = mysql_fetch_row($res))
    {
        $tables[] = '`'. $row[0] . '`';
    }

    mysql_query("SET foreign_key_checks=0") or die("Failed to query db" . PHP_EOL);
    mysql_query("DROP TABLE " . implode(',', $tables)) or die("Failed to wipe db" . PHP_EOL);
    mysql_query("SET foreign_key_checks=1") or die("Failed to query db" . PHP_EOL);
}
