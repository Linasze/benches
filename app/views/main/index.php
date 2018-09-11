<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/public/css/style.css">
    <title><?php echo SITE_NAME; ?></title>
</head>
<body>
    <div class="container"></div>

   <form action="mains/order" class="form-group">
   <input type="text" name="name" class="form-control">
   <input type="text" name="last_name" class="form-control">
   <input type="text" name="company" class="form-control">
   <input type="email" name="email" class="form-control">
   <input type="text" name="phone_number" class="form-control">
   <input type="text" name="address" class="form-control">
   <select name="count">
   <?php for($i=1; $i<=10; $i++): ?>
   <option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php endfor; ?>
   </select>
<input type="submit" value="Užsakyti" class="btn btn-primary">


   </form>

  </body>
</html>
