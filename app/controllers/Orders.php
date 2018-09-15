<?php 


class Orders extends Controller {
    public function __construct(){
        $this->orderModel = $this->model('Order');
    }

    public function index(){
        $total_results = $this->orderModel->rowCount();
        if (isset($_GET['perpage'])) {
            $limit = $_GET['perpage'];
        } else{
            $limit = 10;
        }
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

    public function searchOrder(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = ['search' => $_POST['search'] ];
            $orderSearch = $this->orderModel->searchOrder($data);          
           foreach($orderSearch as $order): ?>  
           <tr>
            <td><?php echo $order->id;?></td>
            <td><?php echo $order->order_id;?></td>
            <td><?php echo $order->name. " " . $order->last_name;?></td>
            <td><?php echo $order->email;?></td>
            <td><?php echo $order->phone_number;?></td>
            <td><?php echo $order->address;?></td>
            <td><?php echo ($order->status == 1) ? 'Įvykdytas' : 'Neįvykdytas';?></td>
            <td><?php echo $order->created_at;?></td>
           </tr>
               
           <?php endforeach;
               
        }
    }
}