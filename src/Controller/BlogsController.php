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
        
        $this->loadModel('Articles');
        
        $articles = $this->Articles->find('all')
                                    ->order(['Articles.id DESC']);
        
                                                        

        $this->set('articles', $this->paginate ($articles, ['limit' => '3']));

    }

    public function about(){
        
        //about

    }

    public function contact(){
        //
    }

}