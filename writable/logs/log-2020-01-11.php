<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-01-11 12:52:41 --> Undefined property: App\Controllers\Home::$load
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Home.php(7): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-11 13:00:54 --> syntax error, unexpected 'db' (T_STRING), expecting variable (T_VARIABLE) or '{' or '$'
#0 C:\xampp\htdocs\DSWFinal\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\DSWFinal\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-11 13:01:09 --> Object of class CodeIgniter\Database\MySQLi\Connection could not be converted to string
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Home.php(8): CodeIgniter\Debug\Exceptions->errorHandler(4096, 'Object of class...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-11 14:36:21 --> Class 'App\Controllers\UsuarioModel' not found
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-11 14:37:23 --> Class 'App\Controllers\UsuarioModel' not found
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-11 14:38:25 --> Class 'App\Controllers\UsuarioModel' not found
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-11 14:39:11 --> Class 'App\Controllers\UsuarioModel' not found
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-11 14:39:26 --> Class 'App\Controllers\UsuarioModel' not found
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-11 14:39:52 --> Class 'App\Controllers\UsuarioModel' not found
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-11 14:40:16 --> Class 'App\Controllers\UsuarioModel' not found
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-11 14:41:10 --> Class 'App\Controllers\UsuarioModel' not found
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-11 14:42:40 --> Class 'App\Models\UsuarioModel' not found
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-11 14:43:52 --> Class 'App\Models\UsuarioModel' not found
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-11 14:44:06 --> Class 'App\Models\UsuarioModel' not found
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-11 14:44:07 --> Class 'App\Models\UsuarioModel' not found
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-11 14:44:08 --> Class 'App\Models\UsuarioModel' not found
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-11 14:44:17 --> Class 'App\Models\UsuarioModel' not found
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-11 14:46:02 --> Class 'App\Models\UsuarioModel' not found
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-11 14:47:00 --> Class 'App\Models\UsuarioModel' not found
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-11 14:47:33 --> Undefined variable: UsuarioModel
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Home.php(10): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-11 14:48:15 --> Undefined variable: usuario
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Home.php(11): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-11 14:48:37 --> Array to string conversion
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\DSWFinal\app\Controllers\Home.php(11): printf(Array)
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-01-11 14:48:53 --> Call to undefined function App\Controllers\print_f()
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Home->index()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-11 18:02:09 --> There is no data to {0}.
#0 C:\xampp\htdocs\DSWFinal\system\Model.php(663): CodeIgniter\Database\Exceptions\DataException::forEmptyDataset('insert')
#1 C:\xampp\htdocs\DSWFinal\app\Controllers\Registro.php(21): CodeIgniter\Model->insert(NULL, true)
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Registro->guardar()
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Registro))
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-01-11 18:03:17 --> There is no data to {0}.
#0 C:\xampp\htdocs\DSWFinal\system\Model.php(663): CodeIgniter\Database\Exceptions\DataException::forEmptyDataset('insert')
#1 C:\xampp\htdocs\DSWFinal\app\Controllers\Registro.php(21): CodeIgniter\Model->insert(NULL, true)
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Registro->guardar()
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Registro))
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-01-11 18:03:47 --> There is no data to {0}.
#0 C:\xampp\htdocs\DSWFinal\system\Model.php(663): CodeIgniter\Database\Exceptions\DataException::forEmptyDataset('insert')
#1 C:\xampp\htdocs\DSWFinal\app\Controllers\Registro.php(21): CodeIgniter\Model->insert(NULL, true)
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Registro->guardar()
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Registro))
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-01-11 18:04:37 --> There is no data to {0}.
#0 C:\xampp\htdocs\DSWFinal\system\Model.php(663): CodeIgniter\Database\Exceptions\DataException::forEmptyDataset('insert')
#1 C:\xampp\htdocs\DSWFinal\app\Controllers\Registro.php(21): CodeIgniter\Model->insert(NULL, true)
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Registro->guardar()
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Registro))
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-01-11 18:04:54 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '0) VALUES ('')' at line 1
#0 C:\xampp\htdocs\DSWFinal\system\Database\MySQLi\Connection.php(330): mysqli->query('INSERT INTO `us...')
#1 C:\xampp\htdocs\DSWFinal\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `us...')
#2 C:\xampp\htdocs\DSWFinal\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `us...')
#3 C:\xampp\htdocs\DSWFinal\system\Database\BaseBuilder.php(2166): CodeIgniter\Database\BaseConnection->query('INSERT INTO `us...', Array, false)
#4 C:\xampp\htdocs\DSWFinal\system\Model.php(713): CodeIgniter\Database\BaseBuilder->insert()
#5 C:\xampp\htdocs\DSWFinal\app\Controllers\Registro.php(21): CodeIgniter\Model->insert(Array, true)
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Registro->guardar()
#7 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Registro))
#8 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-01-11 18:11:32 --> Use of undefined constant insertado - assumed 'insertado' (this will throw an Error in a future version of PHP)
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Registro.php(31): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Use of undefine...', 'C:\\xampp\\htdocs...', 31, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Registro->guardar()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Registro))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-11 18:14:01 --> Duplicate entry '1234568798' for key 'unq_cedula'
#0 C:\xampp\htdocs\DSWFinal\system\Database\MySQLi\Connection.php(330): mysqli->query('INSERT INTO `us...')
#1 C:\xampp\htdocs\DSWFinal\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `us...')
#2 C:\xampp\htdocs\DSWFinal\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `us...')
#3 C:\xampp\htdocs\DSWFinal\system\Database\BaseBuilder.php(2166): CodeIgniter\Database\BaseConnection->query('INSERT INTO `us...', Array, false)
#4 C:\xampp\htdocs\DSWFinal\system\Model.php(713): CodeIgniter\Database\BaseBuilder->insert()
#5 C:\xampp\htdocs\DSWFinal\app\Controllers\Registro.php(30): CodeIgniter\Model->insert(Array, true)
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Registro->guardar()
#7 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Registro))
#8 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-01-11 18:15:11 --> Duplicate entry '1234568798' for key 'unq_cedula'
#0 C:\xampp\htdocs\DSWFinal\system\Database\MySQLi\Connection.php(330): mysqli->query('INSERT INTO `us...')
#1 C:\xampp\htdocs\DSWFinal\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `us...')
#2 C:\xampp\htdocs\DSWFinal\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `us...')
#3 C:\xampp\htdocs\DSWFinal\system\Database\BaseBuilder.php(2166): CodeIgniter\Database\BaseConnection->query('INSERT INTO `us...', Array, false)
#4 C:\xampp\htdocs\DSWFinal\system\Model.php(713): CodeIgniter\Database\BaseBuilder->insert()
#5 C:\xampp\htdocs\DSWFinal\app\Controllers\Registro.php(30): CodeIgniter\Model->insert(Array, true)
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Registro->guardar()
#7 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Registro))
#8 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
