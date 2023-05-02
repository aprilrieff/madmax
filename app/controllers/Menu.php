<?php

class Menu extends Controller
{

    public function __construct(){
        // Don't allow unregistered users from viewing this page
//        if(!isLoggedIn()) {
//            redirect("/page/login");
//        }
        $this->menuModel = $this->model("Menus");
    }


    public function add() {
        if(!isLoggedIn()) {
            redirect("/page/home");
            return;
        }
        $data = [
            "title" => "Add New Item",
            "item_name" => "",
            "item_category" => "",
            "item_price" => "",
            "item_description" => "",
            "item_name_error" => "",
            "item_category_error" => "",
            "item_price_error" => "",
            "item_description_error" => ""
        ];
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $data["item_name"] = sanitize($_POST["item_name"]);
            $data["item_category"] = sanitize($_POST["item_category"]);
            $data["item_description"] = sanitize($_POST["item_description"]);
            $data["item_price"] = sanitize($_POST["item_price"]);
            if(empty($data["item_name"])) {
                $data["item_name_error"] = "Name is required";
            }
            if(empty($data["item_category"])) {
                $data["item_category_error"] = "Category is required";
            }
            if(empty($data["item_description"])) {
                $data["item_description_error"] = "Description is required";
            }
            if(empty($data["item_price"])) {
                $data["item_price_error"] = "Price is required";
            }
            if(empty($data["item_name_error"]) && empty($data["item_category_error"]) && empty($data["item_description_error"]) && empty($data["item_price_error"])) {
                try {
                    if ($this->menuModel->addItem($data)) {
                        // data successfully added
                        flash("item_message", "Your item was created");
                        redirect("/page/menu");
                        return;
                    }
                } catch (PDOException $e) {
                    flash("item_message", "Your item could not be created. Try again later.", "alert alert-danger");

                }
            }
        }
        $this->view("page/add", $data);
    }

    public function edit($id) {
        $menu = $this->menuModel->getItem($id);
        if(!isLoggedIn()) {
            redirect("/page/home");
            return;
        }
        $data = [
            "title" => "Edit Item",
            "item_id" => $id,
            "item_name" => $menu->item_name,
            "item_category" => $menu->item_category,
            "item_description" => $menu->item_description,
            "item_price" => $menu->item_price,
            "item_name_error" => "",
            "item_category_error" => "",
            "item_description_error" => "",
            "item_price_error" => ""
        ];
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $data["item_name"] = sanitize($_POST["item_name"]);
            $data["item_category"] = sanitize($_POST["item_category"]);
            $data["item_description"] = sanitize($_POST["item_description"]);
            $data["item_price"] = sanitize($_POST["item_price"]);
            if(empty($data["item_name"])) {
                $data["item_name_error"] = "Name is required";
            }
            if(empty($data["item_category"])) {
                $data["item_category_error"] = "Category is required";
            }
            if(empty($data["item_description"])) {
                $data["item_description_error"] = "Description is required";
            }
            if(empty($data["item_price"])) {
                $data["item_price_error"] = "Price is required";
            }
            if(empty($data["item_name_error"]) && empty($data["item_category_error"]) && empty($data["item_description_error"]) && empty($data["item_price_error"])) {
//                echo "<pre>" . print_r($data, 1) . "</pre>";
//                die();
                try {
                    if ($this->menuModel->editItem($data)) {
                        // data successfully added
                        flash("item_message", "Your item was updated");
                        redirect("/page/menu");
                        return;
                    }
                } catch (PDOException $e) {
                    flash("item_message", "Your item could not be updated. Try again later.", "alert alert-danger");
//                    flash("item_message", $e->getMessage(), "alert alert-danger");

                }
            }
        }
        $this->view("page/edit", $data);
    }

    public function delete($id) {
        $menu = $this->menuModel->getItem($id);
        if(!isLoggedIn()) {
            redirect("/page/home");
            return;
        }
        try {
            if ($this->menuModel->deleteItem($id)) {
                flash("item_message", "Your item was deleted");
                redirect("/page/menu");
            }
        } catch (PDOException $e) {
            flash("item_message", "Your item could not be deleted. Try again later.");
//            $this->menu($id);
        }
    }
}