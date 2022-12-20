<?php
require("db.php");
$id = $_GET['id'];
$pages = $db->query("SELECT * FROM pages")->fetchAll(PDO::FETCH_ASSOC);

foreach($pages as $page) {
    $page = $db->query("SELECT * FROM pages")->fetchAll(PDO::FETCH_ASSOC);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    
    <title>Локал</title>
</head>
<body>
    <?php
        
    ?>

    <header class="header">
        <div class="header_logo">
            <img class="logo" src="img\Logo.png" alt="">
        </div>
        <div class="header_settings">
            <a href="list.php"><img class = "img_small" src="img\Settings.png"></a>
            <div class="settings_content">

            </div>
        </div>
    </header>
    
    <main class="main container">
        <div class="main_list">
            <ul class="list_items">
                <li class="list_item button">Профиль</li> 
                <li class="list_item button">Новости</li>
                <li class="list_item button">Сообщения</li>
                <li class="list_item button">Друзья</li>
                <li class="list_item button">Сообщества</li>
                <li class="list_item button">Фотографии</li>
                <li class="list_item button">Музыка</li>
                <li class="list_item button">Видео</li>
            </ul>
            <input type="checkbox" id="hmt" class="hidden_menu_b">
            <label class="btn_menu" for="hmt">
                <span class="first"></span>
                <span class="second"></span>
                <span class="third"></span>
            </label>
            <ul class="hidden_menu">
                <li class="hidden_menu_item button">Профиль</li> 
                <li class="hidden_menu_item button">Сообщения</li>
                <li class="hidden_menu_item button">Друзья</li>
                <li class="hidden_menu_item button">Сообщества</li>
                <li class="hidden_menu_item button">Фотографии</li>
                <li class="hidden_menu_item button">Музыка</li>
                <li class="hidden_menu_item button">Видео</li>
            </ul>
        </div>
        <div class="main_page">
            <section class="leftside">
                <div class="ava_actions">
                        <div class = "ava">
                            <img class = "img_big" src="
                                <?php foreach($pages as $page) 
                                        { 
                                            if($page['id'] == $id) 
                                            {
                                                echo $page['img'];
                                            } 
                                        }
                                ?>" alt="">
                        </div>
 
                    <div class="actions">
                        <div class="action button">Написать сообщение</div>
        
                            <div class="action button">Добавить в друзья</div>
                        
                    </div>
                </div>
                <div class="all_friends">
                    <div class="friends_main">
                        <div class="friends_amount button">
                            Друзья
                        </div>
                        <ul class="friends">
                            <?php foreach($pages as $page) { ?>
                                <li class="friend img_hover">
                                    <img class="img_small" src="<?php echo $page["img"] ?>" alt="">
                                        <div class="name">
                                            <?php echo $page['name'] ?>
                                        </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="friends_online_main">
                        <div class="friends_amount button">
                            Друзья онлайн
                        </div>
                        <ul class="friends_online">
                            <?php foreach($pages as $page) { ?>
                                <li class="friend img_hover">
                                    <img class="img_small" src="<?php echo $page["img"] ?>" alt=""> 
                                        <div class="name">
                                            <?php echo $page['name'] ?>
                                        </div>
                                </li>
                            <?php } ?> 
                        </ul>
                    </div>
                </div>
            </section>
            <section class="rightside">
                    <div class="about">
                        <div class="page_name">
                            <div class="nameofpage">  
                                <?php foreach($pages as $page) 
                                { 
                                    if($page['id'] == $id) 
                                    {
                                        echo $page['name'];
                                    } 
                                }
                                ?>
                            </div>
                            <div class="status text_hover">
                                установить статус
                            </div>
                        </div>   
                        <div class="online_status">
                            online
                        </div>
                    </div>
                    <div class="info">
                        <div class="inf">
                            <div class="inf1">
                                Город:
                            </div>
                            <div class="inf2">
                                <?php foreach($pages as $page) 
                                { 
                                    if($page['id'] == $id) 
                                    {
                                        echo $page['city'];
                                    } 
                                } 
                                ?>
                            </div>
                        </div>
                        <div class="inf">
                            <div class="inf1">
                                День рождения:
                            </div>
                            <div class="inf2">
                                <?php foreach($pages as $page) 
                                { 
                                        if($page['id'] == $id) 
                                        {
                                            echo $page['dateofbirth'];
                                        } 
                                } 
                                ?>
                            </div>
                        </div>
                        <div class="inf">
                            <div class="inf1">
                                Семейное положение:
                            </div>
                            <div class="inf2">
                                <?php foreach($pages as $page) 
                                    { 
                                        if($page['id'] == $id) 
                                        {
                                            echo $page['position'];
                                        } 
                                    }
                                ?>
                            </div>
                        </div>
                   
                    <div class="inf3 text_hover">
                        Показать подробную информацию
                    </div>
                </div>
                <div class="photos_main">
                    <div class="photos_amount text_hover">
                        Фотографии
                    </div>
                    <ul class = "photos">
                        <li class="photo">
                            
                        </li>
                        <li class="photo">
                           
                        </li>
                        <li class="photo">
                            
                        </li>
                    </ul>
                </div>
                <div class="records_main">
                    <ul class="records_amount">
                        <li class="record_amount button"> Все записи </li>
                        <li class="record_amount button"> Мои записи </li>
                        <li class="record_amount button"> Архив записей </li>
                        <li class="search button"> Поиск </li>
                    </ul>
                        <ul class="records">
                            <li class="record">
                                <div class="record_left">
                                    <img class="img_small" src="
                                        <?php foreach($pages as $page) 
                                        { 
                                            if($page['id'] == $id) 
                                            {
                                                echo $page['img'];
                                            } 
                                        }
                                    ?>" alt="">
                                </div>
                                <div class="record_right">
                                    <div class="record_name">
                                        <?php foreach($pages as $page) 
                                        { 
                                            if($page['id'] == $id) 
                                            {
                                                echo $page['name'];
                                            } 
                                        }
                                        ?>
                                    </div>
                                    <div class="record_post">
                                        
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </section>
        </div>
    </main>
</body>
</html>