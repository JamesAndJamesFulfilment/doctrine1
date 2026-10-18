<?php

require_once dirname(__DIR__) . '/lib/Doctrine/Core.php';

error_reporting(E_ALL);

spl_autoload_register(array('Doctrine_Core', 'autoload'));
require_once 'classes.php';
require_once dirname(__DIR__) . '/models/location.php';

print "<pre>";

$manager = Doctrine_Manager::getInstance();
$dbh = Doctrine_Db::getConnection('sqlite::memory:');
$conn = $manager->openConnection($dbh);

$c = new Record_Country();
$c->name = 'Some country';
$city = $c->City[0];
$city->name = 'City 1';
$city->District->name = 'District 1';

$c->save();
