<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Logged implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        $session = \Config\Services::session();

       if (!empty($_SESSION['user'])) {
           return redirect('panel');
       }
    }

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }
}