<?php
    require("db.php");

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $db->query("DELETE FROM pages WHERE id=$id");

        echo "<script>location.href='list.php';</script>";

    }
?>