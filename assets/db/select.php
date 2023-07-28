<?php 

require_once('db.php') ;

$sql = 'SELECT * FROM `top` ORDER BY `lvl` DESC LIMIT 10';

$result = $conn->query($sql);


     $row['id']. '<br/>';
     $row['name']. '<br/>';
     $row['img']. '<br/>';
     $row['lvl']. '<br/>';
     $row['exp']. '<br/>';

?>