<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Top System</title>
</head>
<body>
    <?php require_once('assets/db/select.php') ?>
    <div class="MainArea">
        <div class="areaWithItems">
            
            <div class="blockAboutTable">
                <div class="Data">#</div>
                <div class="Data">name</div>
                <div class="Data">lvl</div>
            </div>

            <?php 
            if ($result->num_rows >0){
                while($row = $result->fetch_assoc()){

                    ?> 
                    
            <div class="blockItem">
                <div class="rank"></div>
                <div class="blockLogoName">
                    <div class="imgProfile"><img src="<?php echo $row['img']?>" alt=""></div>
                    <div class="blockNameProgile"><?php echo $row['name'] ?> <span class="idMini">#<?php echo $row['id']?></span></div>
                   
                </div>
                <div class="experianceBlock">
                    <div class="blockBorderExp">
                        <div class="blockbackBlack"></div>
                        <div class="blockbackGreen" style="height: <?php echo $row['exp'] ?>px;"></div>
                        <span class="numRank"><?php echo $row['lvl'] ?></span>

                    </div>
                </div>
            </div>


<?php     
            }
        }
?>
            
        </div>
    </div>


    <div class="blockForm">
        <form action="assets/db/exp.php" method="post">
            <input class='input' type="text" placeholder="Введите id" name="id">
            <input class='input' type="text" placeholder="Количество опыта" name="exp">

            <button class="btnF" type="submit">Выдать опыт</button>
        </form>
    </div>
<script src="assets/js/app.js"></script>
</body>
</html>