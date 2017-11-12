<?php


namespace App\Controller;

/**
 * Description of HomeController
 *
 * @author Julien
 */
class HomeController extends AppController{
    
    public function index()
    {
        $this->viewBuilder()->setLayout('default');
    }
}
