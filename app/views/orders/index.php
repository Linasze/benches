<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    a{
      color: #6c5757;
    }

    a:hover {
      color: #3b2c2c;
    }

    .page-link {
      color: #6c5757;
    }

     .page-link:hover {
      color: #3b2c2c;
    }
    </style>
    <title>Užsakymu peržiūra</title>
</head>
<body>
<?php 
  // Get variables here, because in link is receiving an error
  $getPage = $_GET['page']; 
  $getOrder = $_GET['order'];
  $getSort = $_GET['sort'];
  $getStatus = $_GET['status'];
  $sort = $data['sort'];
  $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';
?>
<div class="container mt-4">
<h2>Užsakymai</h2>
Rūšiuoti nuo:
<?php if($_GET['sort'] == 'ASC'): ?>
<?php if(isset($_GET['status']) && isset($_GET['page'])): ?>
    <a href="?<?php echo "page=$getPage&order=id&sort=$sort&status=$getStatus";?>">naujausiu </a>
<?php elseif(isset($_GET['page'])):?>
<a href="?<?php echo "page=$getPage&order=id&sort=$sort";?>">naujausiu </a>
<?php elseif(isset($_GET['status'])):?>
    <a href="?<?php echo "order=id&sort=$sort&status=$getStatus";?>">naujausiu </a>
<?php else: ?>
<a href="?<?php echo "order=id&sort=$sort";?>">naujausiu </a>
<?php endif; ?>

<?php else: ?>
<?php if(isset($_GET['status']) && isset($_GET['page'])): ?>
<a href="?<?php echo "page=$getPage&order=id&sort=$sort&status=$getStatus";?>">seniausiu  </a>
<?php elseif(isset($_GET['page'])):?>
<a href="?<?php echo "page=$getPage&order=id&sort=$sort";?>">seniausiu  </a>
<?php elseif(isset($_GET['status'])):?>
    <a href="?<?php echo "order=id&sort=$sort&status=$getStatus";?>">seniausiu  </a>
<?php else: ?>
<a href="?<?php echo "order=id&sort=$sort";?>">seniausiu  </a>
<?php endif; ?>
<?php endif; ?>
Filtras:
<?php if($_GET['status'] == '1'): ?>
      <a href="?<?php echo (isset($_GET['page'])) ? "page=$getPage&order=id&sort=DESC&status=0" : 'order=id&sort=DESC&status=0' ;?>">Neįvykdyti </a>
<?php else: ?>
  <a href="?<?php echo (isset($_GET['page'])) ? "page=$getPage&order=id&sort=DESC&status=1" : 'order=id&sort=DESC&status=1' ;?>">Įvykdyti </a>
<?php endif; ?>
<?php if(isset($_GET['status'])): ?>
 <a href="orders"> Panaikinti filtrą</a>
<?php endif;?>
<input type="search" name="search" id="search" class="form-control" placeholder="Užsakymo paieška, įveskite vardą pavardę arba užsakymo numerį">
<table class="table table-striped">
<thead>
<tr>
<th>Užsakymo id</th>
<th>Pirkėjo vardas</th>
<th>El. paštas</th>
<th>Telefonas</th>
<th>Adresas</th>
<th>Statusas</th>
<th>Data</th>
</tr>
</thead>
<tbody id="show-list">
    <?php foreach($data['orders'] as $order):?>   
    <tr id="hide">
    <td><?php echo $order->order_id;?></td>
    <td><?php echo $order->name. " " . $order->last_name;?></td>
    <td><?php echo $order->email;?></td>
    <td><?php echo $order->phone_number;?></td>
    <td><?php echo $order->address;?></td>
    <td><?php echo ($order->status == 1) ? 'Įvykdytas' : 'Neįvykdytas';?></td>
    <td><?php echo $order->created_at;?></td>
    </tr>
<?php endforeach; ?> 
</tbody>
<tbody id="hide-list">
</tbody>
</table>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php echo URLROOT;?>/public/js/js.js"></script>
</body>
</html>