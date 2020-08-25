<?php

namespace App\Controller;

use Cake\Event\EventInterface;

class BlogsController extends AppController{


    public function beforeFilter(EventInterface $event){

        $this->viewBuilder()->setLayout('blog');
        //debug($event);
        //exit();

    }

    public function home(){
        
        //

    }

    public function about(){
        
        //about

    }

    public function contact(){
        //
    }

}