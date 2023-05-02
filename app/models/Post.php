<?php

class Post {
    private $db; // will represent PHP Data Object (PDO) that talks to the database

    public function __construct(){
        $this->db = new Database();
    }

    public function getPostCount(){
        $this->db->query("SELECT count(*) FROM posts");
        return $this->db->rowCount();
    }

    public function getAllPosts(){
        $this->db->query("SELECT * FROM posts");
        return $this->db->resultSet();
    }

    public function getPost($post_id){
        $this->db->query("SELECT * FROM posts WHERE post_id = :post_id");
        $this->db->bind("post_id", $post_id);
        return $this->db->single();
    }
}
