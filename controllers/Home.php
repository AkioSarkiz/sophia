<?php
namespace Controllers;
class Home extends \Sophia\Controller
{
    public function __construct()
    {
        $this->data = [
            'style' => ['bootstrap','Poppins'],
            'script' => ['jquery', 'popper', 'bootstrap', 'sweetalert2'],
        ];
    }
    
    public function index()
    {
        $this->view([
            'page' => 'index',
            'title' => 'Hello HOME',
        ]);
    }
}
