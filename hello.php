<?php
$title = "your PHP Site";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
</head>
<body>
   <?php for ($i =0; $i < 10; $i++) { ?>
   <h1><?php echo $title ?></h1> 
   <hr>
   <?php } ?>
</body>
</html>