<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2021-02-07 13:55:15 --> syntax error, unexpected ''numeric'' (T_CONSTANT_ENCAPSED_STRING), expecting ']'
#0 C:\xampp\htdocs\DSWFinal\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\DSWFinal\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\Usua...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\Usua...')
#3 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(15): spl_autoload_call('App\\Models\\Usua...')
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->crear()
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-02-07 18:17:11 --> Invalid file: {0}
#0 C:\xampp\htdocs\DSWFinal\system\View\View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('index.php')
#1 C:\xampp\htdocs\DSWFinal\system\Common.php(176): CodeIgniter\View\View->render('index', Array, NULL)
#2 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(15): view('index', Array)
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->index()
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2021-02-07 23:04:38 --> Undefined index: user
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(11): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->index()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-02-07 23:06:04 --> Undefined index: barrio
#0 C:\xampp\htdocs\DSWFinal\app\Views\todos_reportes.php(31): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 31, Array)
#1 C:\xampp\htdocs\DSWFinal\app\Views\index.php(22): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\DSWFinal\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\DSWFinal\system\Common.php(176): CodeIgniter\View\View->render('index', Array, NULL)
#4 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(168): view('index', Array)
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->reportesNoValidados()
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#7 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2021-02-07 23:54:28 --> Unknown column 'barrio' in 'field list'
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
CRITICAL - 2021-02-07 23:55:22 --> Unknown column 'barrio' in 'field list'
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
CRITICAL - 2021-02-07 23:55:49 --> Unknown column 'barrio' in 'field list'
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
CRITICAL - 2021-02-07 23:55:51 --> Unknown column 'barrio' in 'field list'
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
CRITICAL - 2021-02-07 23:56:59 --> Unknown column 'barrio' in 'field list'
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
CRITICAL - 2021-02-07 23:57:17 --> Unknown column 'barrio' in 'field list'
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
CRITICAL - 2021-02-07 23:59:20 --> Unknown column 'barrio' in 'field list'
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
