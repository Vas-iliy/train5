<?php

 echo $_SERVER['REQUEST_METHOD'];
 echo "<pre>";
 var_dump($_POST);
 echo "<pre>";

 $id = $_GET['id'];
 echo (int)$id;

?>

<form method="post">
    <input type="text" name="a">
    <input type="text" name="b">
    <button>Отправить</button>
</form>
