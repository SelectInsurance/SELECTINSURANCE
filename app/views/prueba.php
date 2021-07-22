<?php
//echo $_POST['name'];
//echo $_POST['date'];
//echo $_POST['description'];
//echo $_POST['type'];
//echo $_POST['everyYear'];
//echo $_POST['badge'];
//echo $_POST['color'];
//$prubadebooleano = true;
//var_dump($prubadebooleano);
$convertido = boolval($_POST['everyYear']);
var_dump($_POST);


$date = date_create($_POST['date']);


var_dump($convertido);

var_dump(date_format($date, 'm-d-y'));
