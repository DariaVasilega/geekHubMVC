<?php

include 'controllers/Create.php';

$func = filter_input(INPUT_GET, 'func');

$post = filter_input(INPUT_POST, 'func');


$human = new Create();

if(!$func)
{
    if (!$post)
    {
        $human->index();
    }
    else
    {
            $human->index();
    }
}
else
{
    switch ($func)
    {
        case 'add_page':
            {
                $human->add_page();
                break;
            }
        case 'add_new_record':
            {
                $get_data['name'] = $_GET['name'];
                $get_data['surname'] = $_GET['surname'];
                $get_data['age'] = $_GET['age'];
                $get_data['salary'] = $_GET['salary'];

                $human->add_new_record($get_data);
                break;
            }
        case 'list':
            {
                $human->list_page();
                break;
            }
        case 'delete':
            {
                $id = $_GET['id'];

                $human->delete_record($id);
                break;
            }
    }
}
