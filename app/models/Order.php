<?php


class Order {

    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function rowCount(){
        $this->db->query('SELECT * FROM orders');
        return $this->db->rowCount();
      
    }

    public function showList($data){
        // Get variables here, because bind function not working on this variables
        $order = $data['order'];
        $sort = $data['sort'];
        $limit = $data['limit'];
    
        if(!isset($data['status'])){
        $this->db->query("SELECT * FROM orders  ORDER BY $order $sort LIMIT :starting_limit, $limit");
        }elseif($data['status'] == 1){
        $this->db->query("SELECT * FROM orders WHERE status = 1  ORDER BY $order $sort LIMIT :starting_limit, $limit");
        }else{
            $this->db->query("SELECT * FROM orders WHERE status = 0  ORDER BY $order $sort LIMIT :starting_limit, $limit");
        }
        $this->db->bind(':starting_limit', $data['starting_limit']);      
     
        return $this->db->resultSet();
    }

    public function listCount($data) {
        if(!isset($data['status'])){
            $this->db->query("SELECT * FROM orders");
        }elseif($data['status'] == 1){
            $this->db->query("SELECT * FROM orders WHERE status = 1");
        }else{
            $this->db->query("SELECT * FROM orders WHERE status = 0");
        }
        return $this->db->rowCount();
        
    }

    public function searchOrder($data){
        $this->db->query("SELECT * FROM orders WHERE (name LIKE :search) OR (last_name LIKE :search) OR 
        (order_id LIKE :search) OR CONCAT(name, ' ', last_name) LIKE :search OR CONCAT(last_name, ' ', name) LIKE :search ORDER BY created_at DESC LIMIT 10");
        $this->db->bind(':search', $data['search'] . '%');
        return $this->db->resultSet();
    }

}