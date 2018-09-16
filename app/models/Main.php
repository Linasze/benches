<?php 


class Main {

    private $db;


    public function __construct(){
        $this->db = new Database();
    }

    public function order($data){   
        $this->db->query("INSERT INTO orders (name,last_name,email,phone_number,order_id,address, zip) VALUES (:name, :last_name, :email, :phone_number, :order_id, :address, :zip)");
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone_number', $data['phone_number']);
        $this->db->bind(':order_id', $data['order_id']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':zip', $data['zip']);
        if($this->db->execute()){
          return true;
        }else{
            return false;
        }
    }

    public function findOrderByEmail($email){
        $this->db->query("SELECT email FROM orders WHERE email = :email");
        $this->db->bind(':email', $email);
        $row = $this->db->single();
        if($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }

    }

}