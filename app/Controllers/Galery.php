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
        
        $file = $this->request->getFile('file'); // get the file from the request

        print_r($file);

        if(!$file->isValid()){
            echo $file->getErrorString().'('.$file->getError().')';
            exit;
        }
        
        $rules = [
            'file' => [
                'label' => 'File',
                'rules' => [
                    'is_image[file]',
                    'max_size[file,100]',
                    'max_dims[file,1024,768]',    
                ]
            ]
        ];

        if(!$this->validate($rules)){
            print_r($this->validator->getErrors());
            exit;
        }

        if(!$file->hasMoved()){
            $route = ROOTPATH . 'public/images';

            $file->move($route);

            echo 'File has been uploaded';
        }

        echo '</pre>';
    }
}
