<?php
if ($_POST) {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $err = '';
    $isSet = false;

    if ($name === '' || $phone === '') {
        $err = 'Заполните все поля';
    }
    else if (mb_strlen($name, 'UTF8')<2) {
        $err = 'Имя не короче двух символов';
    }
    else {
        $data = date('Y:d:m H:i:s');
        $mainBody = "$data\n$name\n$phone";
        mail("vkolyasev1999@mail.ru", 'Информация с поста', $mainBody);
        $isSet = true;
    }
} else {
    $name = '';
    $phone = '';
}


?>

<div class="form">
    <? if ($isSet == true):?>
    <p>Ваша форма отправлена</p>
    <?else:?>
    <form method="post">
        Name: <input type="text" name="name" value="<?=$name?>"> <br/>
        Phone: <input type="text" name="phone" value="<?=$phone?>"> <br/>
        <button>Отправить</button>
        <p><?=$err?></p>
    </form>
    <?endif;?>
</div>