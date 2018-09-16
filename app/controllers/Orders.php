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
            $limit = 5;
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
            $urlroot = URLROOT;
            $orderSearch = $this->orderModel->searchOrder($data);          
           foreach($orderSearch as $order): ?>  
           <tr>
            <td><?php echo $order->id;?></td>
            <td><?php echo $order->order_id;?></td>
            <td><?php echo $order->name. " " . $order->last_name;?></td>
            <td><?php echo $order->email;?></td>
            <td><?php echo $order->phone_number;?></td>
            <td><?php echo $order->address . " " . $order->zip;?></td>
            <td class="text-center"><?php echo ($order->status == 1) ? "<i class='fas fa-check'></i>" : "<i class='fas fa-times'></i>";?></td>
            <td><?php echo date("y-m-d H:i", strtotime($order->created_at));?></td>
           </tr>               
           <?php endforeach;               
        }
    }

    public function confirmOrder($data){
        if(is_numeric($data)){
            if($this->orderModel->confirmOrder($data)){
                redirect('orders/index');
            }else{
                die('Something went wrong');
            }
        }

    }
}