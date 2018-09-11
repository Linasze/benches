<?php


class Mains extends Controller{

    public function index(){
        $this->view('main/index');
    }

    public function order(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
         die('veik');
        }else{
            redirect('main/index');
        }
    }
}