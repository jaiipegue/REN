<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2021-02-08 00:00:35 --> Unknown column 'barrio' in 'field list'
#0 C:\xampp\htdocs\DSWFinal\system\Database\MySQLi\Connection.php(330): mysqli->query('INSERT INTO `si...')
#1 C:\xampp\htdocs\DSWFinal\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `si...')
#2 C:\xampp\htdocs\DSWFinal\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `si...')
#3 C:\xampp\htdocs\DSWFinal\system\Database\BaseBuilder.php(2166): CodeIgniter\Database\BaseConnection->query('INSERT INTO `si...', Array, false)
#4 C:\xampp\htdocs\DSWFinal\system\Model.php(713): CodeIgniter\Database\BaseBuilder->insert()
#5 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(64): CodeIgniter\Model->insert(Array)
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->save()
#7 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#8 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2021-02-08 00:02:50 --> Cannot add or update a child row: a foreign key constraint fails (`ren`.`sitios_contaminados`, CONSTRAINT `sitios_contaminados_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`))
#0 C:\xampp\htdocs\DSWFinal\system\Database\MySQLi\Connection.php(330): mysqli->query('INSERT INTO `si...')
#1 C:\xampp\htdocs\DSWFinal\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `si...')
#2 C:\xampp\htdocs\DSWFinal\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `si...')
#3 C:\xampp\htdocs\DSWFinal\system\Database\BaseBuilder.php(2166): CodeIgniter\Database\BaseConnection->query('INSERT INTO `si...', Array, false)
#4 C:\xampp\htdocs\DSWFinal\system\Model.php(713): CodeIgniter\Database\BaseBuilder->insert()
#5 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(64): CodeIgniter\Model->insert(Array)
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->save()
#7 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#8 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
