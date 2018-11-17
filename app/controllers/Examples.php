<?php
    class Examples extends Controller{
        public function __construct(){
            $this->exampleModel = $this->model('Example');
        }
        
        public function index(){
            return $this->view('Examples/index', ['title' => 'Welcome']);
        }
    
    
    }
?>