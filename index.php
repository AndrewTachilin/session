<?php

//Создать сайт из четырех страниц. На четвертой странице пользователь видит список страниц, которые он посещал.

$_COOKIE['page1'] = $_SERVER['PHP_SELF'];

?>

<a href="stranica3.php">str3</a></br>
<a href="stranica4.php">str4</a></br>
<a href="stranica5.php">str5</a></br>
</br><a href="<?php session_destroy();?>">Удалить Историю</a>




