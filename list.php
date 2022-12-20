<?php

require("db.php");

$pages = $db->query("SELECT * FROM pages")->fetchAll(PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страницы</title>
    <link rel="stylesheet" href="style.css"/>
    <style>
        .container{
            max-width: 1048px;
            margin: 0 auto;
            margin-top: 30px;
        }
        .pages{
           
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .page{

            padding: 10px;
            border: 1px solid rgb(59, 59, 59);
            border-radius: 10px;
            background-color: rgb(47, 47, 47);
            margin: 20px;
            
        }
        .name{
            display: flex;
            justify-content: left;
        }

        a{
            text-decoration: none;
            margin: 5px;
            border: 1px solid rgb(59, 59, 59);
            border-radius: 5px;
            background-color: rgb(255,255,255);
        }
        
    </style> 
</head>

<body>
    <div class="container">
        <a href="create.php">Создать новую страницу</a>
            <div class="pages">
                <?php foreach($pages as $page) { ?>
                    <div class="page">
                        <img src=" <?php echo $page["img"] ?>" width="50" height="50" alt="">
                        <div class="name"> Имя пользователя: <?php echo $page["name"] ?> </div>
                        <div class="city"> Город: <?php echo $page["city"] ?> </div>
                        <div class="dateofbirth"> Дата рождения: <?php echo $page["dateofbirth"] ?> </div>
                        <div class="position"> Семейное положение: <?php echo $page["position"] ?> </div>
                        <a href="index.php?id=<?php echo $page['id'] ?>">На страницу</a>
                        <a href="change.php?id=<?php echo $page['id'] ?>">Изменить</a>
                        <a href="delete.php?id=<?php echo $page['id'] ?>">Удалить</a>
                    </div>
                <?php } ?>
            </div>
    </div>
</body>

</html>