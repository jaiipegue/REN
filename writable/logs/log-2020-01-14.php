<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-01-14 11:58:06 --> Undefined constant 'App\Controllers\registro\exitoso'
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->test()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-14 15:29:01 --> Call to undefined function App\Controllers\index()
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->crear()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-14 15:34:00 --> syntax error, unexpected ''apellidos'' (T_CONSTANT_ENCAPSED_STRING), expecting ']'
#0 C:\xampp\htdocs\DSWFinal\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\DSWFinal\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\Usua...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\Usua...')
#3 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(37): spl_autoload_call('App\\Models\\Usua...')
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->crear()
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-14 17:37:17 --> syntax error, unexpected '}'
#0 C:\xampp\htdocs\DSWFinal\system\Router\Router.php(192): CodeIgniter\Router\Router->autoRoute('usuario/crear')
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(725): CodeIgniter\Router\Router->handle('usuario/crear')
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-14 17:37:50 --> There is no data to {0}.
#0 C:\xampp\htdocs\DSWFinal\system\Model.php(663): CodeIgniter\Database\Exceptions\DataException::forEmptyDataset('insert')
#1 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(32): CodeIgniter\Model->insert()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->crear()
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-01-14 17:38:57 --> There is no data to {0}.
#0 C:\xampp\htdocs\DSWFinal\system\Model.php(663): CodeIgniter\Database\Exceptions\DataException::forEmptyDataset('insert')
#1 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(32): CodeIgniter\Model->insert()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->crear()
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-01-14 17:39:06 --> There is no data to {0}.
#0 C:\xampp\htdocs\DSWFinal\system\Model.php(663): CodeIgniter\Database\Exceptions\DataException::forEmptyDataset('insert')
#1 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(32): CodeIgniter\Model->insert()
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->crear()
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-01-14 18:14:42 --> syntax error, unexpected '<', expecting end of file
#0 C:\xampp\htdocs\DSWFinal\system\Common.php(176): CodeIgniter\View\View->render('registro\\form', Array, NULL)
#1 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(14): view('registro\\form', Array)
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->index()
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-01-14 18:15:10 --> Undefined variable: validation
#0 C:\xampp\htdocs\DSWFinal\app\Views\registro\form.php(16): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\DSWFinal\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\DSWFinal\system\Common.php(176): CodeIgniter\View\View->render('registro\\form', Array, NULL)
#3 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(14): view('registro\\form', Array)
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->index()
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-14 18:43:44 --> Undefined variable: validation
#0 C:\xampp\htdocs\DSWFinal\app\Views\registro\form.php(16): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\DSWFinal\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\DSWFinal\system\Common.php(176): CodeIgniter\View\View->render('registro\\form', Array, NULL)
#3 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(14): view('registro\\form', Array)
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->index()
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-14 18:44:53 --> Undefined variable: validation
#0 C:\xampp\htdocs\DSWFinal\app\Views\registro\form.php(16): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\DSWFinal\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\DSWFinal\system\Common.php(176): CodeIgniter\View\View->render('registro\\form', Array, NULL)
#3 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(14): view('registro\\form', Array)
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->index()
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-14 19:56:50 --> Undefined variable: validation
#0 C:\xampp\htdocs\DSWFinal\app\Views\registro\form.php(16): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\DSWFinal\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\DSWFinal\system\Common.php(176): CodeIgniter\View\View->render('registro\\form', Array, NULL)
#3 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(14): view('registro\\form', Array)
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->index()
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-14 19:58:23 --> syntax error, unexpected 'echo' (T_ECHO), expecting ']'
#0 C:\xampp\htdocs\DSWFinal\system\Router\Router.php(192): CodeIgniter\Router\Router->autoRoute('usuario')
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(725): CodeIgniter\Router\Router->handle('usuario')
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-14 19:59:29 --> syntax error, unexpected ']'
#0 C:\xampp\htdocs\DSWFinal\system\Router\Router.php(192): CodeIgniter\Router\Router->autoRoute('usuario')
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(725): CodeIgniter\Router\Router->handle('usuario')
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2020-01-14 19:59:44 --> Undefined variable: validation
#0 C:\xampp\htdocs\DSWFinal\app\Views\registro\form.php(16): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\DSWFinal\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\DSWFinal\system\Common.php(176): CodeIgniter\View\View->render('registro\\form', Array, NULL)
#3 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(14): view('registro\\form', Array)
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->index()
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-14 20:01:00 --> {0} is not a valid rule.
#0 C:\xampp\htdocs\DSWFinal\system\Validation\Validation.php(287): CodeIgniter\Validation\Exceptions\ValidationException::forRuleNotFound('min_lenght')
#1 C:\xampp\htdocs\DSWFinal\system\Validation\Validation.php(175): CodeIgniter\Validation\Validation->processRules('clave', 'clave', 'asddf', Array, Array)
#2 C:\xampp\htdocs\DSWFinal\system\Model.php(1407): CodeIgniter\Validation\Validation->run(Array, NULL, NULL)
#3 C:\xampp\htdocs\DSWFinal\system\Model.php(685): CodeIgniter\Model->validate(Array)
#4 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(32): CodeIgniter\Model->insert(Array)
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->crear()
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#7 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2020-01-14 20:03:56 --> {0} is not a valid rule.
#0 C:\xampp\htdocs\DSWFinal\system\Validation\Validation.php(287): CodeIgniter\Validation\Exceptions\ValidationException::forRuleNotFound('min_lenght')
#1 C:\xampp\htdocs\DSWFinal\system\Validation\Validation.php(175): CodeIgniter\Validation\Validation->processRules('clave', 'clave', '123456', Array, Array)
#2 C:\xampp\htdocs\DSWFinal\system\Model.php(1407): CodeIgniter\Validation\Validation->run(Array, NULL, NULL)
#3 C:\xampp\htdocs\DSWFinal\system\Model.php(685): CodeIgniter\Model->validate(Array)
#4 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(32): CodeIgniter\Model->insert(Array)
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->crear()
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#7 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2020-01-14 20:20:00 --> Cannot access protected property CodeIgniter\Validation\Validation::$errors
#0 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->crear()
#1 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2020-01-14 20:56:54 --> syntax error, unexpected '{'
#0 C:\xampp\htdocs\DSWFinal\system\Common.php(176): CodeIgniter\View\View->render('registro\\form', Array, NULL)
#1 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(14): view('registro\\form', Array)
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->index()
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-01-14 20:57:23 --> syntax error, unexpected '{'
#0 C:\xampp\htdocs\DSWFinal\system\Common.php(176): CodeIgniter\View\View->render('registro\\form', Array, NULL)
#1 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(14): view('registro\\form', Array)
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->index()
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-01-14 20:57:27 --> syntax error, unexpected '{'
#0 C:\xampp\htdocs\DSWFinal\system\Common.php(176): CodeIgniter\View\View->render('registro\\form', Array, NULL)
#1 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(14): view('registro\\form', Array)
#2 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->index()
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-01-14 20:58:31 --> Cannot use isset() on the result of an expression (you can use "null !== expression" instead)
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2020-01-14 21:08:14 --> Undefined variable: erroes
#0 C:\xampp\htdocs\DSWFinal\app\Views\registro\form.php(16): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\DSWFinal\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\DSWFinal\system\Common.php(176): CodeIgniter\View\View->render('registro\\form', Array, NULL)
#3 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(14): view('registro\\form', Array)
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->index()
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-14 21:08:33 --> Undefined variable: errors
#0 C:\xampp\htdocs\DSWFinal\app\Views\registro\form.php(16): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\DSWFinal\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\DSWFinal\system\Common.php(176): CodeIgniter\View\View->render('registro\\form', Array, NULL)
#3 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(14): view('registro\\form', Array)
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->index()
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#6 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2020-01-14 21:22:11 --> Invalid file: {0}
#0 C:\xampp\htdocs\DSWFinal\system\View\View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('<!-- DEBUG-VIEW...')
#1 C:\xampp\htdocs\DSWFinal\system\Common.php(176): CodeIgniter\View\View->render('<!-- DEBUG-VIEW...', Array, NULL)
#2 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(33): view('<!-- DEBUG-VIEW...')
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->crear()
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-01-14 21:26:06 --> Invalid file: {0}
#0 C:\xampp\htdocs\DSWFinal\system\View\View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('registro\form.ph...')
#1 C:\xampp\htdocs\DSWFinal\system\Common.php(176): CodeIgniter\View\View->render('registro\form', Array, NULL)
#2 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(38): view('registro\form', Array)
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->crear()
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-01-14 21:26:24 --> Invalid file: {0}
#0 C:\xampp\htdocs\DSWFinal\system\View\View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('registro\form.ph...')
#1 C:\xampp\htdocs\DSWFinal\system\Common.php(176): CodeIgniter\View\View->render('registro\form', Array, NULL)
#2 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(38): view('registro\form', Array)
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->crear()
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-01-14 21:28:16 --> Invalid file: {0}
#0 C:\xampp\htdocs\DSWFinal\system\View\View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('registro\\forms....')
#1 C:\xampp\htdocs\DSWFinal\system\Common.php(176): CodeIgniter\View\View->render('registro\\forms', Array, NULL)
#2 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(38): view('registro\\forms', Array)
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->crear()
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2020-01-14 21:29:22 --> Call to a member function listErrors() on string
#0 C:\xampp\htdocs\DSWFinal\system\View\View.php(236): include()
#1 C:\xampp\htdocs\DSWFinal\system\Common.php(176): CodeIgniter\View\View->render('registro\\form', Array, NULL)
#2 C:\xampp\htdocs\DSWFinal\app\Controllers\Usuario.php(38): view('registro\\form', Array)
#3 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(847): App\Controllers\Usuario->crear()
#4 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Usuario))
#5 C:\xampp\htdocs\DSWFinal\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\DSWFinal\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
