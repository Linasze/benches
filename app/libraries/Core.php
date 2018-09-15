<?php 
   session_start();
class Core {
    protected $currentController = 'Mains';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
       $url = $this->getUrl();

       // Look in controllers for first value
       if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')){
           // if exist, set as controller
           $this->currentController = ucwords($url[0]);

           // Unset 0 index
           unset($url[0]);

       }elseif(file_exists('../app/controllers/admin/' . ucwords($url[0]) . '.php')){
        // if exist, set as controller
        $this->currentController = ucwords($url[0]);

        // Unset 0 index
        unset($url[0]);
   }

       //Require the controller
       if(file_exists('../app/controllers/' .$this->currentController . '.php')){
       require_once '../app/controllers/'.$this->currentController . '.php';
        }else{
            require_once '../app/controllers/admin/'.$this->currentController . '.php';
        }

       // Instantiate constroller class
       $this->currentController = new $this->currentController;

       // Check for second part of url
       if(isset($url[1])){
           // Check to see if method exist in controller
           if(method_exists($this->currentController, $url[1])){
               $this->currentMethod = $url[1];

               unset($url[1]);
           }
       }
            // Get params
            $this->params = $url ? array_values($url) : [];

            // Call callback with array of params
 call_user_func_array([$this->currentController,$this->currentMethod],$this->params);
    }
    

    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
       }

    }

}


// Redirect function
function redirect($page){
    header('location: ' . URLROOT . '/' . $page);
}


function flash($name = '', $message = '', $class = 'success'){
    if(!empty($name)){
        if(!empty($message) && empty($_SESSION[$name])){
           if(!empty($_SESSION[$name])){
                 unset($_SESSION[$name]);      
           }
           if(!empty($_SESSION[$name. '_class'])){
            unset($_SESSION[$name. '_class']);      
      }
           
            $_SESSION[$name] = $message;
            $_SESSION[$name. '_class'] = $class;

        }elseif(empty($message) && !empty($_SESSION[$name])){
            $class = !empty( $_SESSION[$name. '_class']) ?  $_SESSION[$name. '_class'] : '';
            echo '<div class="'.$class.'"id="msg-flash">'.$_SESSION[$name].'</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name. '_class']);
            
        }
    }
}

