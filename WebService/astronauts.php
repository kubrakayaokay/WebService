
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head.php");?>
  <?php include("customcss.php");?>
  <style>

body {
  background-image: url('images/yes.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>

<body>
 

</head>

<body>
  <?php include("services.php");?>

<?php include("includes/navbar.php"); ?>



<div style="text-align: center; width: 1500px;">
<h1><strong><br>How many people are in space at any point in time?</strong></h1>
<h3><strong><br>(If you want to get information about astronauts, you can click their name.)</strong></h3>

</div>

<div class="card">
  <img src="images/amerika.png"alt="<?php echo  $data->people[0]->name; ?>" style="width:100%">
  <h1><a href="https://en.wikipedia.org/wiki/Mark_T._Vande_Hei"> <?php echo  $data->people[0]->name; ?></a></h1>
  </div>

<div class="card" >
  <img src="images/rusya.png"alt="<?php echo  $data->people[1]->name; ?>" style="width:100%">
  <h1><a href="https://en.wikipedia.org/wiki/Oleg_Novitsky"> <?php echo  $data->people[1]->name; ?></a></h1>
</div>

<div class="card" >
  <img src="images/rusya.png"alt="<?php echo  $data->people[2]->name; ?>" style="width:100%">
  <h1><a href="https://en.wikipedia.org/wiki/Pyotr_Dubrov"> <?php echo  $data->people[2]->name; ?></a></h1>
</div>

<div class="card" >
  <img src="images/fransa.png"alt="<?php echo  $data->people[3]->name; ?>" style="width:100%">
  <h1><a href="https://en.wikipedia.org/wiki/Thomas_Pesquet"> <?php echo  $data->people[3]->name; ?></a></h1>
</div>

<div class="card" >
  <img src="images/amerika.png"alt="<?php echo  $data->people[4]->name; ?>" style="width:100%">
  <h1><a href="https://en.wikipedia.org/wiki/K._Megan_McArthur"> <?php echo  $data->people[4]->name; ?></a></h1>
</div>

<div class="card" >
  <img src="images/amerika.png"alt="<?php echo  $data->people[5]->name; ?>" style="width:100%">
  <h1><a href="https://en.wikipedia.org/wiki/Shane_Kimbrough"> <?php echo  $data->people[5]->name; ?></a></h1>
</div>

<div class="card" >
  <img src="images/japonya.png"alt="<?php echo  $data->people[6]->name; ?>" style="width:100%">
  <h1><a href="https://en.wikipedia.org/wiki/Akihiko_Hoshide"> <?php echo  $data->people[6]->name; ?></a></h1>
</div>





<!-- <div class="column" style="margin-top: 100px">
        <div class="card">
            <h3 >UZAYDAKİ İNSAN SAYISI</h3>

           <h1><?php  echo  $sayi; ?></h1>
       
   <?php for($i=0;$i<$sayi;$i++){ ?>
      <?php $name=$data->people[$i]->name; ?>
      <?php echo $name; ?>
      <?php }?>     
              
        </div>
    </div>-->



<?php include("includes/script.php"); ?> 

<footer>
<p> Copyright © 2021 Kübra Kayaokay. All rights reserved.</p>
</footer>

</body>
</html>