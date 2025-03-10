<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Galery extends BaseController
{
    public function index()
    {
        //
        return view('galery/form');
    }

    public function upload(){
        echo '<pre>';
        print_r($_FILES); // variable global to show files sent by the form
        
        $file = $this->request->getFiles(); // get the file from the request
        echo $file;
        
        echo '</pre>';
    }
}
