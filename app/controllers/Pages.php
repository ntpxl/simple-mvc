<?php
    class Pages extends Controller{
        public function __construct(){

        }
        
        public function index(){
            return $this->view('Pages/index', ['title' => 'Welcome']);
        }
    
    
    }
?>