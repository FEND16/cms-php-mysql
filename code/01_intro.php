<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pandas!</title>
</head>
<body>
  
  <!-- Everything in a php-statement -->
  <?php 
    if(true){
      echo "<h1>Hej!</h1>";
    }else {
      echo "<h1> Inte hej! </h1>"; 
  }?>

  <?php 
  //Define an associative array
  $panda = array(
    "name" => "Panda",
    "weight" => "3000"
  );
  ?>
  <div>
    <!-- Loop through values and print each 
    key and value -->
    <?php foreach($panda as $key => $value) { ?>
      <!--HTML mixed with PHP -->
      <h1><?= $key?></h1><p><?= $value?></p>

    <!--We have to close the foreach -->
    <?php } ?>
  </div> 
</body>
</html>