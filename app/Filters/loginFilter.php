<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class loginFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session('login')) // saya hanya membuat sederhana saja. silahkan kembangkan di kemudian hari
        {
            return redirect()->to('/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}