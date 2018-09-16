<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/benches/public/css/order.css">
    <title>Užsakymu peržiūra</title>
</head>
<body>
<div class="container mt-4">
<h2>Užsakymai</h2>
<div id="sorting" style="display: none;">
Rūšiuoti nuo:
<a href="?order=id&amp;sort=ASC">seniausiu <i class="fas fa-arrow-circle-down"></i></a>
|
<i class="fas fa-filter"></i> Filtras: 
    <a href="?order=id&amp;sort=DESC&amp;status=1">Įvykdyti <i class="fas fa-check"></i></a>
|
Įrašų per puslapi:
<a href="?order=id&amp;sort=DESC&amp;perpage=5" class=" ">5</a>
<a href="?order=id&amp;sort=DESC&amp;perpage=10" class="">10</a>
<a href="?order=id&amp;sort=DESC&amp;perpage=15" class="">15</a>

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
<tbody id="show-list" style="display: none;">
        <tr id="hide" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <td>29</td>
        <td>18091669E5</td>
        <td>Steve Jobs</td>
        <td>zykas91@gmail.com</td>
        <td>862245122</td>
        <td>Silicio slenis 55516, California USA 51515</td>
        <td class="text-center"><i class="fas fa-check"></i></td>
        <td>18-09-16 16:03</td>
    </tr>
    <tr id="hide" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <td>28</td>
        <td>1809160FBA</td>
        <td>Benita Žemgulyte</td>
        <td>benita@gmail.com</td>
        <td>864525244</td>
        <td>Kalno g. 88-65 Kedainiai 55161</td>
        <td class="text-center"><i class="fas fa-check"></i></td>
        <td>18-09-16 15:51</td>
    </tr>
    <tr id="hide" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <td>27</td>
        <td>1809165F8F</td>
        <td>Brad Doe</td>
        <td>braddoe@gmail.com</td>
        <td>84382442</td>
        <td>Malunininku 55484</td>
        <td class="text-center"><i class="fas fa-check"></i></td>
        <td>18-09-16 11:09</td>
    </tr>
    <tr id="hide" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <td>26</td>
        <td>180916E58E</td>
        <td>John Doe</td>
        <td>babunas911@gmail.com</td>
        <td>84382442</td>
        <td>Raudondvario pl. 45451</td>
        <td class="text-center"><i class="fas fa-check"></i></td>
        <td>18-09-16 11:05</td>
    </tr>
    <tr id="hide" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <td>25</td>
        <td>18091627A1</td>
        <td>linas Vait</td>
        <td>zykas911@gmail.co</td>
        <td>853545445</td>
        <td>Jurbarko g. 55555</td>
        <td class="text-center"><i class="fas fa-check"></i></td>
        <td>18-09-16 10:59</td>
    </tr>
</tbody>
<tbody id="hide-list">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/benches/public/css/order.css">
    <title>Užsakymu peržiūra</title>


<div class="container mt-4">
<h2>Užsakymai</h2>
<div id="sorting">
Rūšiuoti nuo:
<a href="?order=id&amp;sort=ASC">seniausiu <i class="fas fa-arrow-circle-down"></i></a>
|
<i class="fas fa-filter"></i> Filtras: 
    <a href="?order=id&amp;sort=DESC&amp;status=1">Įvykdyti <i class="fas fa-check"></i></a>
|
Įrašų per puslapi:
<a href="?order=id&amp;sort=DESC&amp;perpage=5" class=" ">5</a>
<a href="?order=id&amp;sort=DESC&amp;perpage=10" class="">10</a>
<a href="?order=id&amp;sort=DESC&amp;perpage=15" class="">15</a>

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
        <tr id="hide" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <td>29</td>
        <td>18091669E5</td>
        <td>Steve Jobs</td>
        <td>zykas91@gmail.com</td>
        <td>862245122</td>
        <td>Silicio slenis 55516, California USA 51515</td>
        <td class="text-center"><i class="fas fa-check"></i></td>
        <td>18-09-16 16:03</td>
    </tr>
    <tr id="hide" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <td>28</td>
        <td>1809160FBA</td>
        <td>Benita Žemgulyte</td>
        <td>benita@gmail.com</td>
        <td>864525244</td>
        <td>Kalno g. 88-65 Kedainiai 55161</td>
        <td class="text-center"><i class="fas fa-check"></i></td>
        <td>18-09-16 15:51</td>
    </tr>
    <tr id="hide" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <td>27</td>
        <td>1809165F8F</td>
        <td>Brad Doe</td>
        <td>braddoe@gmail.com</td>
        <td>84382442</td>
        <td>Malunininku 55484</td>
        <td class="text-center"><i class="fas fa-check"></i></td>
        <td>18-09-16 11:09</td>
    </tr>
    <tr id="hide" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <td>26</td>
        <td>180916E58E</td>
        <td>John Doe</td>
        <td>babunas911@gmail.com</td>
        <td>84382442</td>
        <td>Raudondvario pl. 45451</td>
        <td class="text-center"><i class="fas fa-check"></i></td>
        <td>18-09-16 11:05</td>
    </tr>
    <tr id="hide" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <td>25</td>
        <td>18091627A1</td>
        <td>linas Vait</td>
        <td>zykas911@gmail.co</td>
        <td>853545445</td>
        <td>Jurbarko g. 55555</td>
        <td class="text-center"><i class="fas fa-check"></i></td>
        <td>18-09-16 10:59</td>
    </tr>
</tbody>
<tbody id="hide-list">
</tbody>
</table>
<nav aria-label="Page navigation" id="paging">
  <ul class="pagination ">
<li class="page-item "><a class="page-link" href="?page=1&amp;order=id&amp;sort=DESC">1</a></li>
<li class="page-item "><a class="page-link" href="?page=2&amp;order=id&amp;sort=DESC">2</a></li>
<li class="page-item "><a class="page-link" href="?page=3&amp;order=id&amp;sort=DESC">3</a></li>
<li class="page-item "><a class="page-link" href="?page=4&amp;order=id&amp;sort=DESC">4</a></li>
<li class="page-item "><a class="page-link" href="?page=5&amp;order=id&amp;sort=DESC">5</a></li>
<li class="page-item "><a class="page-link" href="?page=6&amp;order=id&amp;sort=DESC">6</a></li>
  </ul>
</nav>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://localhost/benches/public/js/js.js"></script>


</tbody>
</table>
<nav aria-label="Page navigation" id="paging" style="display: none;">
  <ul class="pagination ">
<li class="page-item "><a class="page-link" href="?page=1&amp;order=id&amp;sort=DESC">1</a></li>
<li class="page-item "><a class="page-link" href="?page=2&amp;order=id&amp;sort=DESC">2</a></li>
<li class="page-item "><a class="page-link" href="?page=3&amp;order=id&amp;sort=DESC">3</a></li>
<li class="page-item "><a class="page-link" href="?page=4&amp;order=id&amp;sort=DESC">4</a></li>
<li class="page-item "><a class="page-link" href="?page=5&amp;order=id&amp;sort=DESC">5</a></li>
<li class="page-item "><a class="page-link" href="?page=6&amp;order=id&amp;sort=DESC">6</a></li>
  </ul>
</nav>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://localhost/benches/public/js/js.js"></script>


</body></html>