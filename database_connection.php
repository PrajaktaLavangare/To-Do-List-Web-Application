~
~
 <?php
 $dsn = 'mysql:host=sql2.njit.edu;dbname=psl9';
 $username = 'psl9';
 $password = 'g9HizRBk';
 try{
 $db = new PDO($dsn,$username,$password);
 }catch (PDOException $e){
 $error_message = $e->getMessage();
 echo $error_message;
 exit();
 }
 ?>
