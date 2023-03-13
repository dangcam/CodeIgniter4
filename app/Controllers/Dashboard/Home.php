<?php


namespace App\Controllers\Dashboard;
use \App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return $this->page_construct('dashboard/home',null,null);
    }
}