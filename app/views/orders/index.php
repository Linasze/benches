<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/public/css/order.css">
    <title>Užsakymu peržiūra</title>
</head>
<body>
<?php
  $getPage = $_GET['page'];
  $getOrder = $_GET['order'];
  $getSort = $_GET['sort'];
  $getStatus = $_GET['status'];
  $getPerpage = $_GET['perpage'];
  $sort = $data['sort'];
  $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';
  $urlroot = URLROOT;
?>
<div class="container mt-4">
<h2>Užsakymai</h2>
<div id="sorting">
Rūšiuoti nuo:
<?php if($_GET['sort'] == 'ASC'): ?>
<?php if(isset($_GET['perpage']) && isset($_GET['status']) && isset($_GET['page'])): ?>
    <a href="?<?php echo "page=$getPage&order=id&sort=$sort&status=$getStatus&perpage=$getPerpage";?>">naujausiu <i class="fas fa-arrow-circle-up"></i></a>
<?php elseif(isset($_GET['perpage']) && isset($_GET['page'])): ?>
    <a href="?<?php echo "page=$getPage&order=id&sort=$sort&perpage=$getPerpage";?>">naujausiu <i class="fas fa-arrow-circle-up"></i></a>
<?php elseif(isset($_GET['perpage'])): ?>
    <a href="?<?php echo "order=id&sort=$sort&perpage=$getPerpage";?>">naujausiu <i class="fas fa-arrow-circle-up"></i></a>
<?php elseif(isset($_GET['status']) && isset($_GET['page'])): ?>
    <a href="?<?php echo "page=$getPage&order=id&sort=$sort&status=$getStatus";?>">naujausiu <i class="fas fa-arrow-circle-up"></i></a>
<?php elseif(isset($_GET['page'])):?>
<a href="?<?php echo "page=$getPage&order=id&sort=$sort";?>">naujausiu <i class="fas fa-arrow-circle-up"></i></a>
<?php elseif(isset($_GET['status'])):?>
    <a href="?<?php echo "order=id&sort=$sort&status=$getStatus";?>">naujausiu <i class="fas fa-arrow-circle-up"></i></a>
<?php else: ?>
<a href="?<?php echo "order=id&sort=$sort";?>">naujausiu <i class="fas fa-arrow-circle-up"></i></a>
<?php endif; ?>
<?php else: ?>
<?php if(isset($_GET['perpage']) && isset($_GET['status']) && isset($_GET['page'])): ?>
    <a href="?<?php echo "page=$getPage&order=id&sort=$sort&status=$getStatus&perpage=$getPerpage";?>">seniausiu <i class="fas fa-arrow-circle-down"></i></a>
<?php elseif(isset($_GET['perpage']) && isset($_GET['page'])): ?>
    <a href="?<?php echo "page=$getPage&order=id&sort=$sort&perpage=$getPerpage";?>">seniausiu <i class="fas fa-arrow-circle-down"></i></a>
<?php elseif(isset($_GET['perpage'])): ?>
    <a href="?<?php echo "order=id&sort=$sort&perpage=$getPerpage";?>">seniausiu <i class="fas fa-arrow-circle-down"></i></a>
<?php elseif(isset($_GET['status']) && isset($_GET['page'])): ?>
<a href="?<?php echo "page=$getPage&order=id&sort=$sort&status=$getStatus";?>">seniausiu <i class="fas fa-arrow-circle-down"></i></a>
<?php elseif(isset($_GET['page'])):?>
<a href="?<?php echo "page=$getPage&order=id&sort=$sort";?>">seniausiu <i class="fas fa-arrow-circle-down"></i></a>
<?php elseif(isset($_GET['status'])):?>
    <a href="?<?php echo "order=id&sort=$sort&status=$getStatus";?>">seniausiu <i class="fas fa-arrow-circle-down"></i></a>
<?php else: ?>
<a href="?<?php echo "order=id&sort=$sort";?>">seniausiu <i class="fas fa-arrow-circle-down"></i></a>
<?php endif; ?>
<?php endif; ?>
|
<i class="fas fa-filter"></i> Filtras: 
<?php if($_GET['status'] == '1'): ?>
    <a href="?<?php echo (isset($_GET['page'])) ? "page=$getPage&order=id&sort=DESC&status=0" : 'order=id&sort=DESC&status=0' ;?>">Neįvykdyti <i class='fas fa-times'></i></a>
<?php else: ?>
    <a href="?<?php echo (isset($_GET['page'])) ? "page=$getPage&order=id&sort=DESC&status=1" : 'order=id&sort=DESC&status=1' ;?>">Įvykdyti <i class='fas fa-check'></i></a>
<?php endif; ?>
<?php if(isset($_GET['status'])): ?>
 <a href="orders"> Panaikinti filtrą</a>
<?php endif;?>
|
Įrašų per puslapi:
<a href="?<?php if (isset($_GET['status']) && isset($_GET['page'])){ echo "page=$getPage&order=$getOrder&sort=$getSort&status=$getStatus&perpage=5";}elseif (isset($_GET['page'])){ echo "page=$getPage&order=id&sort=$getSort&perpage=5"; }elseif(isset($_GET['status'])){ echo "order=$getOrder&sort=$getSort&status=$getStatus&perpage=5"; }else{ echo "order=id&sort=DESC&perpage=5";}?>" class="<?php echo ($_GET['perpage'] == 5) ? "selected" : " ";?>">5</a>
<a href="?<?php if (isset($_GET['status']) && isset($_GET['page'])){ echo "page=$getPage&order=$getOrder&sort=$getSort&status=$getStatus&perpage=10";}elseif (isset($_GET['page'])){ echo "page=$getPage&order=id&sort=$getSort&perpage=10";}elseif(isset($_GET['status'])){ echo "order=$getOrder&sort=$getSort&status=$getStatus&perpage=10"; }else{ echo "order=id&sort=DESC&perpage=10";}?>" class="<?php echo ($_GET['perpage'] == 10) ? "selected" : "";?>">10</a>
<a href="?<?php if (isset($_GET['status']) && isset($_GET['page'])){ echo "page=$getPage&order=$getOrder&sort=$getSort&status=$getStatus&perpage=15";}elseif (isset($_GET['page'])){ echo "page=$getPage&order=id&sort=$getSort&perpage=15";}elseif(isset($_GET['status'])){ echo "order=$getOrder&sort=$getSort&status=$getStatus&perpage=15";}else{ echo "order=id&sort=DESC&perpage=15";}?>" class="<?php echo ($_GET['perpage'] == 15) ? "selected" : "";?>">15</a>

</div>
<input type="search" name="search" id="search" class="form-control" placeholder="Užsakymo paieška, įveskite vardą pavardę arba užsakymo numerį">

<table class="table table-condensed table-hover">
<thead>
<tr>
<th class="text-center">#</th>
<th>Order id</th>
<th>Pirkėjo vardas</th>
<th>El. paštas</th>
<th>Telefonas</th>
<th>Adresas</th>
<th>Status</th>
<th>Data</th>
</tr>
</thead>
<tbody id="show-list">
    <?php foreach($data['orders'] as $order):?>
    <tr id="hide">
        <td><?php echo $order->id;?></td>
        <td><?php echo $order->order_id;?></td>
        <td><?php echo $order->name. " " . $order->last_name;?></td>
        <td><?php echo $order->email;?></td>
        <td><?php echo $order->phone_number;?></td>
        <td><?php echo $order->address . " " . $order->zip;?></td>
        <td class="text-center"><?php echo ($order->status == 1) ? "<i class='fas fa-check'></i>" : 
        "<a data-toggle='confirmation' data-title=Įvykdytas? href='$urlroot/orders/confirmOrder/$order->id'><i title='Patvirtinti' class='fas fa-times'></i></a>";?></td>
        <td><?php echo date("y-m-d H:i", strtotime($order->created_at));?></td>
    </tr>
<?php endforeach; ?>
</tbody>
<tbody id="hide-list">
</tbody>
</table>
<?php
?>
<?php if($data['listCount'] > $data['limit']):?>
<nav aria-label="Page navigation" id="paging">
  <ul class="pagination ">
<?php for ($page=1; $page <= $data['total_pages']; $page++):?>
<?php if(isset($_GET['status']) && isset($_GET['perpage'])): ?>
  <li class="page-item "><a class="page-link" href="?<?php echo "page=$page&order=$getOrder&sort=$getSort&status=$getStatus&perpage=$getPerpage"; ?>"><?php echo $page;?></a></li>
<?php elseif(isset($_GET['status'])): ?>
  <li class="page-item "><a class="page-link" href="?<?php echo "page=$page&order=$getOrder&sort=$getSort&status=$getStatus"; ?>"><?php echo $page;?></a></li>
  <?php elseif(isset($_GET['sort'])): ?>
  <li class="page-item "><a class="page-link" href="?<?php echo "page=$page&order=$getOrder&sort=$getSort"; ?>"><?php echo $page;?></a></li>
  <?php elseif(isset($_GET['perpage'])): ?>
  <li class="page-item "><a class="page-link" href="?<?php echo "page=$page&order=$getOrder&sort=$getSort&perpage=$getPerpage"; ?>"><?php echo $page;?></a></li>
<?php else : ?>
<li class="page-item "><a class="page-link" href="?<?php echo "page=$page&order=id&sort=DESC"; ?>"><?php echo $page;?></a></li>
<?php endif; ?>
<?php endfor; ?>
  </ul>
</nav>
<?php endif; ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-confirmation2/dist/bootstrap-confirmation.min.js"></script>
<script src="<?php echo URLROOT;?>/public/js/js.js"></script>
<script>
$('[data-toggle=confirmation]').confirmation({
  rootSelector: '[data-toggle=confirmation]'
});
</script>
</body>
</html>
