<?php 
$currentEXP = '';
$currentLvl = '';
$id = $_POST['id'];
$expGet = $_POST['exp'];

require_once('db.php') ;

$sql = "SELECT * FROM `top` WHERE `id`= $id";
$result = $conn->query($sql);

if ($result->num_rows >0){
    while($row = $result->fetch_assoc()){
       $row['id'];
       $row['name'];
       $currentEXP = $row['exp'];
       $currentLvl = $row['lvl'];
    }
}

$currentEXP += $expGet;

if ($currentEXP>= 50){
    while($currentEXP>= 50){
        $currentLvl++;
        $currentEXP = $currentEXP - 50;
    
        $sqlUpdate = "UPDATE `top` SET `exp` = $currentEXP, `lvl` = $currentLvl WHERE `id` = $id";
        $resultUpdate = $conn->query($sqlUpdate);
    }
   

} else if ($currentEXP <= 50) {
    $sqlUpdate = "UPDATE `top` SET `exp` = $currentEXP WHERE `id` = $id";
    $resultUpdate = $conn->query($sqlUpdate);
}



header('location: /');




?>