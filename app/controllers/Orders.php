<?php 


class Orders extends Controller {
   
    public function __construct(){
        $this->orderModel = $this->model('Order');
    }

    public function index(){
        // Fetch all records count from db
        $total_results = $this->orderModel->rowCount();

        // If status SET, get status id
        if(isset($_GET['status'])){
            $status = $_GET['status'];
        }

        // Filter query by status id
        $filter = ['status' => $status];
        $listCount = $this->orderModel->listCount($filter);

        // Get perpage id, if perpage not SET use default limit 5
        if (isset($_GET['perpage'])) {
            $limit = $_GET['perpage'];
        } else{
            $limit = 5;
        }

        // Count total page
       $total_pages = ceil($listCount/$limit);

        // Get page id
        if (!isset($_GET['page'])) {
            $page = 1;
        } else{
            $page = $_GET['page'];
        }

        // Get desc/asc order settings
        if(isset($_GET['order'])){
            $order = $_GET['order'];
        }else{
            $order = 'id';
        }

        // Get sorting settings
        if(isset($_GET['sort'])){
            $sort = $_GET['sort'];
        }else{
            $sort = 'DESC';
        }

        // Count default limit
        $starting_limit = ($page-1)*$limit;
        // Create sorting array
        $sorting = ['limit' => $limit, 'starting_limit' => $starting_limit, 'order' => $order, 'sort'=> $sort, 'status' => $status];   
        // Get first records
        $orders = $this->orderModel->showList($sorting);
        // Make array with status=1 
        $status1 = ['status' => 1];
        // Paging query by records count
        $listStatus1 = ceil($this->orderModel->listCount($status1)/$limit);
       // die($listperpage);
        $data = [
            'total_pages' => $total_pages,
            'listCount' => $listCount,
            'orders' => $orders,
            'sort' => $sort,
            'limit' => $limit,
            'listStatus1' => $listStatus1,        
            'total_results' => $total_results        
           
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
            <td style="width: 150px"><?php echo $order->name. " " . $order->last_name;?></td>
            <td><?php echo $order->email;?></td>
            <td><?php echo $order->phone_number;?></td>
            <td><?php echo $order->address . " " . $order->zip;?></td>
            <td class="text-center"><?php echo ($order->status == 1) ? "<i class='fas fa-check'></i>" : 
        "<a data-toggle='confirmation' data-title=Įvykdytas? href='$urlroot/orders/confirmOrder/$order->id'><i title='Patvirtinti' class='fas fa-times'></i></a>";?></td>
            <td><?php echo date("y-m-d H:i", strtotime($order->created_at));?></td>
           </tr>               
           <?php endforeach;  
           echo "<script type='text/javascript'>$('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]'
            });</script>";             
        }
    }

    public function confirmOrder($data){
        if(is_numeric($data)){
            $getpage = $_GET['page'];
            $getperpage = $_GET['perpage'];
            $getorder = $_GET['order'];
            $getsort = $_GET['sort'];
            $getstatus = $_GET['status'];
            if($this->orderModel->confirmOrder($data)){
                if(isset($_GET['page']) && isset($_GET['status']) && isset($_GET['perpage'])){
                    redirect("orders?page=$getpage&order=$getorder&sort=$getsort&status=$getstatus&perpage=$getperpage");
                }elseif(isset($_GET['page']) && isset($_GET['status'])){
                    redirect("orders?page=$getpage&order=$getorder&sort=$getsort&status=$getstatus");
                }elseif(isset($_GET['page']) && isset($_GET['perpage'])){
                    redirect("orders?page=$getpage&order=$getorder&sort=$getsort&perpage=$getperpage");
                }elseif(isset($_GET['page'])){
                    redirect("orders?page=$getpage&order=$getorder&sort=$getsort");
                }elseif(isset($_GET['status'])){
                    redirect("orders?order=$getorder&sort=$getsort&status=$getstatus");
                }else{
                    redirect('orders/index');
                }
            }else{
                die('Something went wrong');
            }
        }

    }

    public function unconfirmOrder($data){
        if(is_numeric($data)){
            $getpage = $_GET['page'];
            $getperpage = $_GET['perpage'];
            $getorder = $_GET['order'];
            $getsort = $_GET['sort'];
            $getstatus = $_GET['status'];
            if($this->orderModel->unconfirmOrder($data)){
                if(isset($_GET['page']) && isset($_GET['status']) && isset($_GET['perpage'])){
                    redirect("orders?page=$getpage&order=$getorder&sort=$getsort&status=$getstatus&perpage=$getperpage");
                }elseif(isset($_GET['page']) && isset($_GET['status'])){
                    redirect("orders?page=$getpage&order=$getorder&sort=$getsort&status=$getstatus");
                }elseif(isset($_GET['page']) && isset($_GET['perpage'])){
                    redirect("orders?page=$getpage&order=$getorder&sort=$getsort&perpage=$getperpage");
                }elseif(isset($_GET['page'])){
                    redirect("orders?page=$getpage&order=$getorder&sort=$getsort");
                }elseif(isset($_GET['status'])){
                    redirect("orders?order=$getorder&sort=$getsort&status=$getstatus");
                }else{
                    redirect('orders/index');
                }
            }else{
                die('Something went wrong');
            }
        }

    }
}