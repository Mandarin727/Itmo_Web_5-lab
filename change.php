<?php
    require("db.php");

    if($_SERVER['REQUEST_METHOD'] === 'GET')
    {
        $id = $_GET['id'];
        $page = $db->query("SELECT * FROM pages WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);

        if (count($page) > 0)
        {
            $page = $page[0];
        }
    }
    else if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $id = $_POST['id'];
        $img = $_POST['img'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $dateofbirth = $_POST['dateofbirth'];
        $position = $_POST['position'];
        
        $db->query("UPDATE pages SET img = '$img', name = '$name', city = '$city', dateofbirth = '$dateofbirth', position = '$position' WHERE id=$id");

        echo "<script>
        alert('Данные о странице были изменены');
        location.href='list.php';
        </script>";
           
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Изменить страницу</title>
    <style>
        .forma{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh; 
        }
        form{
            padding: 10px;
            border: 1px solid rgb(59, 59, 59);
            border-radius: 10px;
            background-color: rgb(47, 47, 47);
        }
        .inputa{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        input {
            margin: 5px;
            border: 1px solid rgb(59, 59, 59);
            border-radius: 5px;
            background-color: rgb(255,255,255);
        }
        select{
            margin: 5px;
            border: 1px solid rgb(59, 59, 59);
            border-radius: 5px;
            background-color: rgb(255,255,255);
        }
    </style>
</head>
<body>
<div class="forma">
<form  action="" method="POST">
    <div class="inputa">
            Вставьте url-ссылку картинки: <input type="text" name="img" value="<?= $page['img'] ?>">
            Имя пользователя: <input type = "text" name="name" required value="<?= $page['name'] ?>">
            <br>
            Город: <input type="text" name="city" value="<?= $page['city'] ?>">
            <br>
            Дата рождения: <input type="date" name="dateofbirth" value="<?= $page['dateofbirth'] ?>">
            Семейное положение: <select name="position" value="<?= $page['position'] ?>">
                                    <option value="">Не выбрано</option>
                                    <option value="Не женат">Не женат(-а)</option>
                                    <option value="Встречаюсь">Встречаюсь</option>
                                    <option value="Помолвлен">Помолвлен(-а)</option>
                                    <option value="Женат">Женат(-а)</option>
                                    <option value="В гражданском браке">В гражданском браке</option>
                                    <option value="Влюблён">Влюблён(-на)</option>
                                    <option value="Всё сложно">Всё сложно</option>
                                    <option value="В активном поиске">В активном поиске</option>
                                </select>
            <input type="hidden" value="<?= $page['id'] ?>" name="id"/>
            <input type="submit" name="submit" value="Сохранить">

    </div>
    </form>
</div>
</body>
</html>