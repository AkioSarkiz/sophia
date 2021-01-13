<?php
namespace Controllers;
class Error extends \Sophia\Controller
{
    public function __construct()
    {
        $this->data = [
            'view' => 'home',
            'style' => ['bootstrap','Poppins'],
            'script' => ['jquery', 'popper', 'bootstrap', 'sweetalert2'],
        ];
    }
    
    public function E404()
    {
        $this->view([
            'page' => 'index',
            'title' => 'ERROR 404',
        ]);
    }
}
