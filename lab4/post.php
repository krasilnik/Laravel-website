<?php
  if( $_POST["name"] || $_POST["surname"] ) {
     echo "Welcome ".$_POST['name'].' '.$_POST['surname'].'!';
     exit();
  }
?>

<html>
  <body>
     <form action = "<?php $_PHP_SELF ?>" method = "POST">
        Name: <input type = "text" name = "name" />
        Surname: <input type = "text" name = "surname" />
        <input type = "submit" />
     </form>
  </body>
</html>