<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-01-19 15:37:01 --> Unknown column 'password' in 'where clause'
#0 C:\xampp\htdocs\DSWFinal\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\DSWFinal\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\DSWFinal\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\DSWFinal\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 C:\xampp\htdocs\DSWFinal\system\Model.php(379): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(62): CodeIgniter\Model->find()
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#7 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#8 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-01-19 15:43:43 --> Call to a member function find() on null
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-19 15:51:31 --> Call to a member function getCompiledSelect() on null
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-19 15:53:34 --> Undefined property: App\Controllers\Usuario::$db
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(63): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 16:05:46 --> Call to undefined method CodeIgniter\Database\MySQLi\Connection::last_query()
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-19 16:10:32 --> syntax error, unexpected 'echo' (T_ECHO)
#0 C:\xampp\htdocs\DSWFinal\system\Router\Router.php(192): CodeIgniter\Router\Router->autoRoute('usuario/login')
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(725): CodeIgniter\Router\Router->handle('usuario/login')
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 16:11:12 --> syntax error, unexpected 'var_dump' (T_STRING)
#0 C:\xampp\htdocs\DSWFinal\system\Router\Router.php(192): CodeIgniter\Router\Router->autoRoute('usuario/login')
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(725): CodeIgniter\Router\Router->handle('usuario/login')
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 16:13:29 --> Call to a member function getCompiledSelect() on null
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-19 16:14:18 --> Call to a member function getCompiledSelect() on null
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-19 16:14:35 --> Call to a member function getCompiledSelect() on null
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-19 16:14:47 --> Call to a member function getCompiledSelect() on null
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-19 16:15:27 --> Call to a member function find() on null
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-19 16:15:35 --> Call to a member function find() on null
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-19 16:15:39 --> Call to a member function find() on null
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-19 16:16:05 --> Call to a member function find() on null
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-19 16:16:27 --> Call to a member function get() on null
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-19 16:18:28 --> Call to a member function where() on string
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-19 16:19:03 --> Call to a member function where() on string
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-19 18:26:56 --> syntax error, unexpected '}'
#0 C:\xampp\htdocs\DSWFinal\system\Router\Router.php(192): CodeIgniter\Router\Router->autoRoute('usuario/login')
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(725): CodeIgniter\Router\Router->handle('usuario/login')
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 18:30:43 --> Undefined index: tipo_usuario
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(75): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 75, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 20:47:16 --> {0, string} route cannot be found while reverse-routing.
#0 C:\xampp\htdocs\DSWFinal\system\HTTP\RedirectResponse.php(92): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 C:\xampp\htdocs\DSWFinal\system\Common.php(929): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(81): redirect('solicitud/clien...')
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-01-19 20:48:47 --> {0, string} route cannot be found while reverse-routing.
#0 C:\xampp\htdocs\DSWFinal\system\HTTP\RedirectResponse.php(92): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 C:\xampp\htdocs\DSWFinal\system\Common.php(929): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(81): redirect('solicitud/clien...')
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-01-19 20:49:11 --> {0, string} route cannot be found while reverse-routing.
#0 C:\xampp\htdocs\DSWFinal\system\HTTP\RedirectResponse.php(92): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 C:\xampp\htdocs\DSWFinal\system\Common.php(929): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(81): redirect('solicitud/clien...')
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-01-19 20:49:25 --> {0, string} route cannot be found while reverse-routing.
#0 C:\xampp\htdocs\DSWFinal\system\HTTP\RedirectResponse.php(92): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 C:\xampp\htdocs\DSWFinal\system\Common.php(929): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(81): redirect('solicitud/clien...')
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-01-19 20:51:11 --> {0, string} route cannot be found while reverse-routing.
#0 C:\xampp\htdocs\DSWFinal\system\HTTP\RedirectResponse.php(92): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 C:\xampp\htdocs\DSWFinal\system\Common.php(929): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(81): redirect('solicitud/clien...')
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-01-19 21:19:36 --> {0, string} route cannot be found while reverse-routing.
#0 C:\xampp\htdocs\DSWFinal\system\HTTP\RedirectResponse.php(92): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 C:\xampp\htdocs\DSWFinal\system\Common.php(929): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(81): redirect('panel')
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-01-19 21:20:25 --> {0, string} route cannot be found while reverse-routing.
#0 C:\xampp\htdocs\DSWFinal\system\HTTP\RedirectResponse.php(92): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 C:\xampp\htdocs\DSWFinal\system\Common.php(929): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(81): redirect('panel')
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-01-19 21:20:38 --> {0, string} route cannot be found while reverse-routing.
#0 C:\xampp\htdocs\DSWFinal\system\HTTP\RedirectResponse.php(92): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 C:\xampp\htdocs\DSWFinal\system\Common.php(929): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(81): redirect('panel')
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-01-19 21:34:59 --> {0, string} route cannot be found while reverse-routing.
#0 C:\xampp\htdocs\DSWFinal\system\HTTP\RedirectResponse.php(92): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 C:\xampp\htdocs\DSWFinal\system\Common.php(929): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(81): redirect('panel')
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-01-19 21:36:58 --> {0, string} route cannot be found while reverse-routing.
#0 C:\xampp\htdocs\DSWFinal\system\HTTP\RedirectResponse.php(92): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 C:\xampp\htdocs\DSWFinal\system\Common.php(929): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(81): redirect('/panel')
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-01-19 21:41:49 --> {0, string} route cannot be found while reverse-routing.
#0 C:\xampp\htdocs\DSWFinal\system\HTTP\RedirectResponse.php(92): CodeIgniter\HTTP\Exceptions\HTTPException::forInvalidRedirectRoute('')
#1 C:\xampp\htdocs\DSWFinal\system\Common.php(929): CodeIgniter\HTTP\RedirectResponse->route(false)
#2 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(81): redirect('DSWFinal/public...')
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-01-19 22:52:37 --> Undefined variable: _SESSION
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(14): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 22:53:09 --> Undefined variable: _SESSION
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(14): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:08:48 --> Undefined variable: _SESSION
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(14): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:09:51 --> syntax error, unexpected 'var' (T_VAR)
#0 C:\xampp\htdocs\DSWFinal\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\DSWFinal\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-19 23:10:02 --> syntax error, unexpected 'var' (T_VAR)
#0 C:\xampp\htdocs\DSWFinal\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\DSWFinal\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-19 23:10:20 --> Undefined variable: _SESSION
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(14): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:12:14 --> Undefined variable: _SESSION
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(14): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:15:28 --> Undefined variable: _SESSION
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(14): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:15:29 --> Undefined variable: _SESSION
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(14): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:15:30 --> Undefined variable: _SESSION
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(14): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:15:42 --> Undefined variable: _SESSION
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(14): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:36:21 --> Undefined variable: session
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(15): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:36:56 --> syntax error, unexpected 'protected' (T_PROTECTED), expecting end of file
#0 C:\xampp\htdocs\DSWFinal\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\DSWFinal\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(5): spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\DSWFinal\system\Autoloader\Autoloader.php(365): require_once('C:\\xampp\\htdocs...')
#5 C:\xampp\htdocs\DSWFinal\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\DSWFinal\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#7 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#8 [internal function]: spl_autoload_call('App\\Controllers...')
#9 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#10 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#11 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#12 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#13 {main}
CRITICAL - 2020-01-19 23:37:29 --> Undefined variable: session
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(15): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:38:11 --> Undefined variable: session
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(15): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:38:14 --> syntax error, unexpected 'return' (T_RETURN)
#0 C:\xampp\htdocs\DSWFinal\system\Router\Router.php(192): CodeIgniter\Router\Router->autoRoute('usuario/login')
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(725): CodeIgniter\Router\Router->handle('usuario/login')
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:38:22 --> syntax error, unexpected 'return' (T_RETURN)
#0 C:\xampp\htdocs\DSWFinal\system\Router\Router.php(192): CodeIgniter\Router\Router->autoRoute('usuario/login')
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(725): CodeIgniter\Router\Router->handle('usuario/login')
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:38:24 --> syntax error, unexpected 'return' (T_RETURN)
#0 C:\xampp\htdocs\DSWFinal\system\Router\Router.php(192): CodeIgniter\Router\Router->autoRoute('usuario')
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(725): CodeIgniter\Router\Router->handle('usuario')
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:38:31 --> syntax error, unexpected 'return' (T_RETURN)
#0 C:\xampp\htdocs\DSWFinal\system\Router\Router.php(192): CodeIgniter\Router\Router->autoRoute('usuario/login')
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(725): CodeIgniter\Router\Router->handle('usuario/login')
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:39:37 --> Call to a member function set() on array
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->login()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-19 23:42:04 --> Undefined variable: session
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(15): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:42:21 --> Undefined variable: session
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(15): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:42:22 --> Undefined variable: session
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(15): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:42:34 --> Undefined variable: session
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(15): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:42:35 --> Undefined variable: session
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(15): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:42:36 --> Undefined variable: session
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(15): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:42:36 --> Undefined variable: session
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(15): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:42:36 --> Undefined variable: session
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(15): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:42:37 --> Undefined variable: session
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(15): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-19 23:47:27 --> Undefined variable: _SESSION
#0 C:\xampp\htdocs\DSWFinal\app\Controllers\Solicitud.php(15): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Solicitud->cliente()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Solicitud))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
