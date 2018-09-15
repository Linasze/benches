<?php 


class Orders extends Controller {
    public function __construct(){
        $this->orderModel = $this->model('Order');
    }

    public function index(){
        $total_results = $this->orderModel->rowCount();
        $limit = 5;
        $total_pages = ceil($total_results/$limit);
        if (!isset($_GET['page'])) {
            $page = 1;
        } else{
            $page = $_GET['page'];
        }

        if(isset($_GET['order'])){
            $order = $_GET['order'];
        }else{
            $order = 'id';
        }

        if(isset($_GET['sort'])){
            $sort = $_GET['sort'];
        }else{
            $sort = 'DESC';
        }

        if(isset($_GET['status'])){
            $status = $_GET['status'];
        }
    
        $starting_limit = ($page-1)*$limit;
        $sorting = ['limit' => $limit, 'starting_limit' => $starting_limit, 'order' => $order, 'sort'=> $sort, 'status' => $status];   
        $filter = ['status' => $status];
        $orders = $this->orderModel->showList($sorting);
        $listCount = $this->orderModel->listCount($filter);
        $data = [
            'total_pages' => $total_pages,
            'listCount' => $listCount,
            'orders' => $orders,
            'sort' => $sort,
            'limit' => $limit        
           
        ];
        $this->view('orders/index', $data);
    }
}