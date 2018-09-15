<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/public/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title><?php echo SITE_NAME; ?></title>
</head>
<body>
<?php flash('order_message'); ?>
<header class="showcase">
<div class="content">
<i class="fas fa-dumbbell fa-10x" style="text-shadow: -1px 0 #2e2e2e, 0 1px #2e2e2e, 1px 0 #2e2e2e, 0 -1px #2e2e2e;
"></i>
<div class="title">
Henriko sporto suoliukai
</div>
</div>
</header>

<section class="about">
<div class="container">
    <h2>Apie mane</h2>
Sveiki aš Henrikas. Susidarius sunkiai finansinei padėčiai, nusprendžiau kaip nors prisidurti prie algos. 
Kadangi jaunystėje turėjau didelę aistrą sportui, sugalvojau gaminti ir pardavinėti sporto suoliukus. Juk namie su suoliuku ir keliais hanteliais
kiek visokiu pratimu gali atlikti, nereikia nei brangaus abonimento sporto klube. Tai štai ir pradėjau gaminti, apačioje imesiu kelias
 nuotraukas iš gamybos proceso.
</div>
</section>

<section class="services container">
    <h3 class="center">Gamybos procesas</h3>
<div class="grid-3" style="padding-top:20px;">
 <div>
<img src="<?php echo URLROOT;?>/public/img/bench-refurb-15.jpg" class="thumbnail"   alt="bench-refurb">
</div>
<div>
<img src="<?php echo URLROOT;?>/public/img/bench-refurb-17.jpg" class="thumbnail"  alt="bench-refurb">
</div>
<div>
<img src="<?php echo URLROOT;?>/public/img/bench-refurb-19.jpg" class="thumbnail" alt="bench-refurb">
</div>
</div>
<h3 class="center" style="padding-top:50px;"> O čia jau galutinis variantas</h3>
<div class="grid">
<img src="<?php echo URLROOT;?>/public/img/bench-refurb-26.jpg" class="thumbnail" alt="bench-refurb">
</div>
</section>
<div class="container center">
    <h1>Užsakymo forma</h1>
</div>
<div class="container" style="width:600px;">
    <div class="grid-2 row">
        <div>
        <label class="form-group padding" for="name">Jūsų vardas:</label>
        <label class="form-group padding" for="last_name">Jūsų pavardė:</label>
        <label class="form-group padding" for="email">Jūsų elektroninis paštas:</label>
        <label class="form-group padding" for="phone_number">Jūsų telefono numeris:</label>
        <label class="form-group padding" for="address">Pristatymo adresas:</label>
        </div>
        <div>
      <form action="<?php echo URLROOT;?>/main/order" method="POST">
   <input type="text" name="name" placeholder="Vardas" class="form-group input <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">

   <input type="text" name="last_name" placeholder="Pavardė" class="form-group input <?php echo (!empty($data['last_name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['last_name']; ?>">
  
   <input type="text" name="email" placeholder="Elektroninis paštas" class="form-group input <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">

   <input type="text" name="phone_number" placeholder="Telefonas" class="form-group input <?php echo (!empty($data['phone_number_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['phone_number']; ?>">

   <input type="text" name="address" placeholder="Pristatymo adresas" class="form-group input <?php echo (!empty($data['address_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['address']; ?>"><br>
    </div>
    </div>
    <input type="submit" class="form-group button" value="Užsakyti">
</form>
</div>


<footer class="footer center">
<p>Henriko suoliukai Copywrite &copy 2018</p>
</footer>
  </body>
</html>
