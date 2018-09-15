<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php 
  // Get variables here, because url The link is receiving an error
  $getPage = $_GET['page']; 
  $getOrder = $_GET['order'];
  $getSort = $_GET['sort'];
  $getStatus = $_GET['status'];
  $sort = $data['sort'];
  $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';
?>
<div class="container">
<div class="card">
<div class="card-header">Uzsakymai <a href="orders">I pradzia</a></div>
<div class="card-body">
Rusiuoti nuo:
<?php if($_GET['sort'] == 'ASC'): ?>
<?php if(isset($_GET['status']) && isset($_GET['page'])): ?>
    <a href="?<?php echo "page=$getPage&order=id&sort=$sort&status=$getStatus";?>">Nuo naujausiu </a>
<?php elseif(isset($_GET['page'])):?>
<a href="?<?php echo "page=$getPage&order=id&sort=$sort";?>">Nuo naujausiu </a>
<?php elseif(isset($_GET['status'])):?>
    <a href="?<?php echo "order=id&sort=$sort&status=$getStatus";?>">Nuo naujausiu </a>
<?php else: ?>
<a href="?<?php echo "order=id&sort=$sort";?>">Nuo naujausiu </a>
<?php endif; ?>

<?php else: ?>
<?php if(isset($_GET['status']) && isset($_GET['page'])): ?>
<a href="?<?php echo "page=$getPage&order=id&sort=$sort&status=$getStatus";?>">Nuo seniausiu  </a>
<?php elseif(isset($_GET['page'])):?>
<a href="?<?php echo "page=$getPage&order=id&sort=$sort";?>">Nuo seniausiu  </a>
<?php elseif(isset($_GET['status'])):?>
    <a href="?<?php echo "order=id&sort=$sort&status=$getStatus";?>">Nuo seniausiu  </a>
<?php else: ?>
<a href="?<?php echo "order=id&sort=$sort";?>">Nuo seniausiu  </a>
<?php endif; ?>
<?php endif; ?>
Filtras:
<?php if($_GET['status'] == '1'): ?>
      <a href="?<?php echo (isset($_GET['page'])) ? "page=$getPage&order=id&sort=DESC&status=0" : 'order=id&sort=DESC&status=0' ;?>">Neįvykdyti </a>
<?php else: ?>
  <a href="?<?php echo (isset($_GET['page'])) ? "page=$getPage&order=id&sort=DESC&status=1" : 'order=id&sort=DESC&status=1' ;?>">Įvykdyti </a>
<?php endif; ?>

    <?php foreach($data['orders'] as $order):?>
    <ul class="card">
    <li><h3><?php echo $order->name . " " . $order->last_name. " --> " . $order->created_at . " | " . $order->id;?></h3></li>
    <p><?php echo $order->email . " " . $order->phone_number . " " . $order->address;?></p>
    </ul>
<?php endforeach; ?>  
<?php
?>
<?php if($data['listCount'] > $data['limit']):?>
<nav aria-label="Page navigation">
  <ul class="pagination ">
<?php for ($page=1; $page <= $data['total_pages']; $page++):?>
   <li class="page-item "><a class="page-link" href="?<?php echo (isset($_GET['status'])) ? "page=$page&order=$getOrder&sort=$getSort&status=$getStatus" : "page=$page&order=id&sort=DESC" ; ?>"><?php echo $page;?></a></li>
<?php endfor; ?>
  </ul>
</nav>
<?php endif; ?>
</div>
</div>
</div>

    
</body>
</html>