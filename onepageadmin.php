<?php
exit;
$key = '_xxx';
if(empty($_GET['key']) || $_GET['key']!=$key){
	exit('Zugriff gewährt!');
}
if (!empty($_POST)) {
    file_put_contents('onepageadmin.json', json_encode($_POST));
}
$data = json_decode(file_get_contents('onepageadmin.json'),true);
?>
<!doctype html>
<html lang="ru">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Панель управления</title> 


<form method="POST">
  <label for="text1">Текст1</label>
  <input type="text" id="text1" name="text1" value="<?=$data['text1']?>"><br><br>
  <label for="text2">Текст2</label>
  <input type="text" id="text2" name="text2" value="<?=$data['text2']?>"><br><br>
  <input type="checkbox" id="checkbox1" name="checkbox1" value="1" <?if(!empty($data['checkbox1'])){echo 'checked';}?>>
  <label for="checkbox1">Галочка</label><br>  
  <button type="submit" class="">Отправить</button>
</form>






</html>