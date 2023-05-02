<?php

class Page extends Controller {
    public function __construct() {
        $this->menuModel = $this->model("Menus");

    }
    public function home()
    {

        $data = [
            "title" => "Home"
        ];
        $this->view("page/home", $data);

    }

    public function about()
    {

        $data = [
            "title" => "About Us"
        ];
        $this->view("page/about", $data);

    }

    public function menu()
    {
        $appetizers = $this->menuModel->getItems("Appetizers");
        $entrees = $this->menuModel->getItems("Entrees");
        $drinks = $this->menuModel->getItems("Drinks");
        $dessert = $this->menuModel->getItems("Dessert");
        $data = [
            "appetizers" => $appetizers,
            "entrees" => $entrees,
            "drinks" => $drinks,
            "dessert" => $dessert,
            "title" => "Mad Max menus"
        ];
        $this->view("page/menu", $data);

    }

//    public function register()
//    {
//
//        $data = [
//            "title" => "Register"
//        ];
//        $this->view("page/register", $data);
//
//    }

//    public function login()
//    {
//
//        $data = [
//            "title" => "Login"
//        ];
//        $this->view("page/login", $data);
//
//    }

    public function contact()
    {

        $data = [
            "title" => "Contact"
        ];
        $this->view("page/contact", $data);

    }

//    public function add()
//    {
//
//        $data = [
//            "title" => "Add Item"
//        ];
//        $this->view("page/add", $data);
//
//    }

//    public function edit(){
//        $data = [
//            "title" => "Edit Item"
//        ];
//        $this->view("page/edit", $data);
//    }
//
//    public function delete()
//    {
//
//        $data = [
//            "title" => "Delete Item"
//        ];
//        $this->view("page/delete", $data);
//
//    }
}