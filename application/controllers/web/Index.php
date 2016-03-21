<?php

class Index extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function Index()
    {
        echo 'this is default web/index/index';
    }
}