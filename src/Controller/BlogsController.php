<?php

namespace App\Controller;

use Cake\Event\EventInterface;

class BlogsController extends AppController{


    public function beforeFilter(EventInterface $event){

        $this->viewBuilder()->setLayout('blog');
        
        $this->loadModel('Menus');

        $menus = $this->Menus->find('all' , ['contain' => ['Submenus']]);

        $this->set('menus', $menus);
        //debug($event);
        //exit();

    }

    public function home(){
        
        $this->loadModel('Articles');
        
        $articles = $this->Articles->find()
                                    ->order(['Articles.id DESC']);
        
                                                        

        $articleList = $this->Articles->find('list')-> limit('8');

        $this->set('articles', $this->paginate ($articles, ['limit' => '3']));

        $this->set('articleList', $articleList);

    }

    public function about(){
        
        //about

    }

    public function contact(){
        //
    }

    public function view($id = null){
        $this->loadModel('Articles');
        $article = $this-> Articles->get($id);
        $this->set('article' , $article);
    }

}