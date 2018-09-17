<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/public/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title><?php echo SITE_NAME; ?></title>
</head>
<body>
<header class="showcase">
<div class="content">
<i class="fas fa-dumbbell fa-10x logo" style="text-shadow: -1px 0 #2e2e2e, 0 1px #2e2e2e, 1px 0 #2e2e2e, 0 -1px #2e2e2e;
"></i>
<div class="title">
Henriko sporto suoliukai
</div>
</div>
</header>
<?php flash('order_message'); ?>
<?php flash('fail_order_message'); ?>
<section class="about">
<div class="container">
    <h2>Apie mane</h2>
<span style="font-family: 'Montserrat', sans-serif;
"> Sveiki aš Henrikas. Susidarius sunkiai finansinei padėčiai, nusprendžiau kaip nors prisidurti prie algos.
Kadangi jaunystėje turėjau didelę aistrą sportui, sugalvojau gaminti ir pardavinėti sporto suoliukus.  Gaminu
juos iš patvaraus ir aukštos kokybės plieno. Šis aukštos klasės ir kokybės suolelis yra itin saugus, stabilus
bei daugiafunkcinis. Jis suteiks galimybę kiekvienam panorejusiam sporto entuziastui siekti dar geresnių rezultatų.</span>
</div>
</section>

<section class="container">
<div class="grid-3" style="padding-top:20px;">
 <div><img src="<?php echo URLROOT;?>/public/img/bench.jpg" class="thumbnail"   alt="bench-refurb"></div>
<div><img src="<?php echo URLROOT;?>/public/img/bench-refurb-17.jpg" class="thumbnail"  alt="bench-refurb"></div>
<div><img src="<?php echo URLROOT;?>/public/img/bench-refurb-19.jpg" class="thumbnail" alt="bench-refurb"></div>
</div>
<div class="grid-3">
<div><img src="<?php echo URLROOT;?>/public/img/bench1.jpg" class="thumbnail" alt="bench-refurb"></div>
<div><img src="<?php echo URLROOT;?>/public/img/bench2.jpg" class="thumbnail" alt="bench-refurb"></div>
<div><img src="<?php echo URLROOT;?>/public/img/bench3.jpg" class="thumbnail" alt="bench-refurb"></div>
</div>
</section>

<section class="properties">
<div class="container">
    <div class="grid-2-2">
<div>
    <h2>Savybės:</h2>
    <span style="font-family: 'Montserrat', sans-serif;
    ">
    Reguliuojamas aukštis;<br>
    Sulankstomas;<br>
    Svoris: 8 kg;<br>
    Suoliuko matmenys: 139 x 33 x 64 cm;<br>
    Lentos matmenys: 105 x 31 cm;<br>
    Maksimalus vartotojo svoris: 100 kg;<br>
    Pakuotės dydis: 129 x 38 x 13 cm;<br>
    Maksimalus naudotojo ūgis 185 cm.</span>
</div>
<div>
    <h2>Aprašymas:</h2>
    Naudojamas efektyviai treniruoti krūtinės, nugaros, pilvo raumenis. <br>
    Privalumas - galima nustatyti aukštį, o tai sudaro galimybę pakeisti atliekamus pratimus. <br>
    Tvirta plieno konstrukcija, galimas 4 lygių reguliavimas.
</div>
</div>
</div>
</section>

<div class="container center">
<div class="price">Kaina: 49.99 €</div>
</div>

<div id="endpoint">
<div class="container center">
    <span style="font-family: 'Montserrat', sans-serif;">Norint užsisakyti užpildykite forma ir mes su jumis susisieksime</span>
</div>

<div class="container" style="width:700px;">
<form action="<?php echo URLROOT;?>/main/order" method="POST">
       <div class="grid-4">
        <div>
            <label class="form-group padding" for="name">Vardas:</label>
        </div>

      <div>
          <input type="text" name="name" id="name" placeholder="Vardas" class="form-group input <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
        <span class="invalid-feedback"><?php echo $data['name_err'];?></span>
           </div>

           <div>
               <label class="form-group padding" for="last_name">Pavardė:</label>
           </div>

        <div>
        <input type="text" name="last_name" id="last_name" placeholder="Pavardė" class="form-group input  <?php echo (!empty($data['last_name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['last_name']; ?>">
        <span class="invalid-feedback"><?php echo $data['last_name_err'];?></span>
        </div></div>

        <div class="grid-4">
        <div>
            <label class="form-group padding" for="email">El. paštas:</label></div>
        <div>
        <input type="text" name="email" id="email" placeholder="El. paštas" class="form-group input <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
        <span class="invalid-feedback"><?php echo $data['email_err'];?></span>
        <span class="invalid-feedback"><?php echo $data['confirm_email_err'];?></span>
            </div>
            <div>
        <label class="form-group padding" for="email"> Pakartoti el. pašta:</label>
            </div><div>
        <input type="text" name="confirm_email" id="confirm_email" placeholder="Pakartoti el.pašta" class="form-group input <?php echo (!empty($data['confirm_email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_email']; ?>">
        <span class="invalid-feedback"><?php echo $data['confirm_email_err'];?></span>
        <span class="invalid-feedback"><?php echo $data['confirm_email_empty_err'];?></span>
            </div></div>

<div class="grid-4">
        <div>
         <label class="form-group padding" for="phone_number">Telefono numeris:</label>
    </div><div>
        <input type="text" name="phone_number" id="phone_number" placeholder="Telefonas" class="form-group input <?php echo (!empty($data['phone_number_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['phone_number']; ?>">
        <span class="invalid-feedback"><?php echo $data['phone_number_err'];?></span>
    </div>
       <div>
           <label class="form-group padding" for="zip">Pašto kodas:</label></div>
           <div>
        <input type="text" name="zip" id="zip" placeholder="Pašto kodas" class="form-group input <?php echo (!empty($data['zip_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['zip']; ?>">
        <span class="invalid-feedback"><?php echo $data['zip_err'];?></span>
    </div>
    </div>

       <div class="grid-2">
       <div>
           <label class="form-group padding" for="address">Pristatymo adresas:</label></div>
           <div>
        <input type="text" name="address" id="address" placeholder="Pvz. Kalno g. 55-12, Kaunas" class="form-group input-long <?php echo (!empty($data['address_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['address']; ?>">
          <span class="invalid-feedback"><?php echo $data['address_err'];?></span>
           </div>
</div>
        <br>
   <input type="submit" class="form-group button" value="Užsakyti">

</form>
</div>
</div>

<footer class="footer center">
<p>Henriko suoliukai  &copy Copyright 2018</p>
</footer>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type='text/javascript'>
if(document.querySelector(".order-fail")){ //if element with .Truncate exists
    $(document).ready(function(elements) {
    $('html, body').animate({scrollTop: $('#endpoint').offset().top}, 1000);
    });
}
</script>
</body>
</html>
