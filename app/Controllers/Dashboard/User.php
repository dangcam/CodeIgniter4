<?php

namespace App\Controllers\Dashboard;
class User extends \App\Controllers\BaseController
{
    public function index()
    {
        return $this->page_construct('dashboard/user',null,null);
    }
}