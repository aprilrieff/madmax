<?php

class menus
{
    private $db; // will represent PHP Data Object (PDO) that talks to the database

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getItems($category)
    {
        $this->db->query("SELECT * FROM menu WHERE item_category = :item_category");
        $this->db->bind("item_category", $category);
        return $this->db->resultSet();
    }

    public function getItem($id)
    {
        $this->db->query("SELECT * FROM menu WHERE item_id = :item_id");
        $this->db->bind("item_id", $id);
        return $this->db->single();
    }


    public function addItem($data)
    {
        $this->db->query(
            "INSERT INTO menu (item_category, item_name, item_price, item_description)
            VALUES (:item_category, :item_name, :item_price, :item_description)");
//        $this->db->bind("item_id", $_SESSION["item_id"]);
        $this->db->bind("item_category", $data["item_category"]);
        $this->db->bind("item_name", $data["item_name"]);
        $this->db->bind("item_description", $data["item_description"]);
        $this->db->bind("item_price", $data["item_price"]);
        return $this->db->execute();
    }

    public function editItem($data)
    {
//        echo "<pre>" . print_r($data, 1) . "</pre>";
//        die();
//        UPDATE menu SET item_category = 'Dessert', item_name = 'Cheese Curds', item_description = 'Served with housemade ranch' , item_price = 11 WHERE item_id = 1;

        $this->db->query("UPDATE menu SET item_category = :item_category, item_name = :item_name, item_description = :item_description, item_price = :item_price WHERE item_id = :item_id");
        $this->db->bind(":item_id", $data["item_id"]);
        $this->db->bind(":item_category", $data["item_category"]);
        $this->db->bind(":item_name", $data["item_name"]);
        $this->db->bind(":item_description", $data["item_description"]);
        $this->db->bind(":item_price", $data["item_price"]);
        return $this->db->execute();
    }

    public function deleteItem($id)
    {
        $this->db->query("DELETE FROM menu WHERE item_id = :item_id");
        $this->db->bind(":item_id", $id);
        return $this->db->execute();
    }
}
