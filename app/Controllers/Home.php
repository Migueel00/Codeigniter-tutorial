<?php

namespace App\Controllers;

use Throwable;

class Home extends BaseController
{   
    private $migrate;
    private $seeder;

    function __construct(){
        $this->migrate = \Config\Services::migrations();
        $this->seeder = \Config\Database::seeder();
    }

    public function index(): string{   

        $this->callSeeder();
        return view('welcome_message');
    }

    private function revertMigration() : void{
        try {
            $this->migrate->regress(0); // pass parameter the batch 0 -> will reset all the migrations , -1 -> reset the one latest
        }catch(Throwable $error){
            echo $error;
        }
    }

    private function migrate() : void{
        // php spark migrate in terminal
        
        try {
            echo "enter in migrate";
            $this->migrate->latest();
        }
        catch(Throwable $error){
            echo $error;
        }
    }

    private function callSeeder(){
        $this->seeder->call('CategoriesSeeder');
    }
}
