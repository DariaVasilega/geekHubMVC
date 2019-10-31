<?php

include 'controllers/viewController.php';
include 'model/productModel.php';

class Create
{
    protected $model, $view;
    function __construct()
    {
        $this->model = new productModel();
        $this->view = new viewController();
    }

    public function index()
    {
        $data = $this->model->all_records();

        $this->view->start_page($data);
    }

    public function add_page()
    {
        $this->view->add_page();
    }

    public function add_new_record($data)
    {
        $this->model->save_new_record($data);

        $data = $this->model->all_records();

        $this->view->start_page($data);
    }

    public function list_page()
    {
        $data = $this->model->all_records();

        $this->view->list_page($data);
    }

    public function delete_record($id)
    {
        $this->model->delete($id);

        $data = $this->model->all_records();

        $this->view->list_page($data);
    }

}