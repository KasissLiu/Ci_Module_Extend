<?php
class Welcome extends CI_Controller
{
    
    public function  __construct()
    {
        parent::__construct();
    }
    
    
    public function index()
    {
        echo 'Hello Extend Welcome Index';
    }
    
    public function error()
    {
        echo 'Hello Extend Welcome Error';
    }
}