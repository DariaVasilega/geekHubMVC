<?php
class viewController
{
    public function start_page($data)
    {
        include "view/home.php";
    }

    public function add_page()
    {
        include "view/add.php";
    }

    public function list_page($data)
    {
        include 'view/list.php';
    }
}