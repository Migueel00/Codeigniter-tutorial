<?php

namespace App\Controllers;

use Throwable;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');

        $migrate = \Config\Services::migrations();

        try {
            echo "enter in migrate";
            $migrate->latest;
        }
        catch(Throwable $error){
            echo $error;
        }
    }
}
