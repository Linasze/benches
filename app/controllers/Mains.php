<?php


class Mains extends Controller{

    public function __construct(){
        $this->orderModel = $this->model('Main');

    }

    public function index(){
        $this->view('main/index');
    }
    

    public function order(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
             // Generate order id
                $today = date("ymd");
                $rand = strtoupper(substr(uniqid(sha1(time())),0,4));
                $unique = $today . $rand;
        
         $data = [
             'name' => trim($_POST['name']),
             'last_name' => trim($_POST['last_name']),
             'email' => trim($_POST['email']),
             'confirm_email' => trim($_POST['confirm_email']),
             'phone_number' => trim($_POST['phone_number']),
             'address' => trim($_POST['address']),
             'zip' => trim($_POST['zip']),
             'order_id' => $unique,
             'name_err' => '',
             'last_name_err' => '',
             'email_err' => '',
             'confirm_email_err' => '',
             'confirm_email_empty_err' => '',
             'phone_number_err' => '',
             'address_err' => '',
             'zip_err' => ''
         ];
      
         
         if(empty($data['name'])){
             $data['name_err'] = "Vardo laukas tuščias";
         }
         if(empty($data['last_name'])){
             $data['last_name_err'] = "Pavardės laukas tuščias";
         }
         
         if(empty($data['email'])){
             $data['email_err'] = "Elektroninio pašto laukas tuščias";
         }elseif($this->orderModel->findOrderByEmail($data['email']) == $data['email']){
            $data['email_err'] = "Elektroninis paštas jau naudojamas";
         }elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
            $data['email_err'] = "Elektroninis paštas ivestas neteisingai";
         }elseif(empty($data['confirm_email'])){
            $data['confirm_email_empty_err'] = "Elektroninio pašto laukas tuščias";
         }elseif($data['email'] != $data['confirm_email']){
            $data['confirm_email_err'] = "Elektroniniai paštai nesutampa";
         }

    
         if(empty($data['phone_number'])){
            $data['phone_number_err'] = "Telefono numerio laukas tuščias";
         }

         if(empty($data['address'])){
             $data['address_err'] = "Pristatymo adreso laukas tuščias";
         }

         if(empty($data['zip'])){
            $data['zip_err'] = "Pašto kodo laukas tuščias";
        }

        if(empty($data['name_err']) && empty($data['last_name_err']) && empty($data['email_err']) && empty($data['confirm_email_err'])
         && empty($data['phone_number_err']) && empty($data['address_err']) && empty($data['zip_err'])){
           
            if($this->orderModel->order($data)){
                flash('order_message', 'Užsakymas priimtas, netrukus su jumis susisieksime');
                redirect('main/index');
            }else{
                die('Something went wrong');
            }
           
        }else{
            flash('fail_order_message', 'Užsakymas nepavyko, patikrinkite ar teisingai suvedėte duomenis', 'order-fail');
            $this->view('main/index', $data);
        }  



        }else{
            redirect('main/index');
        }
    }
}