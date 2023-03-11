<?php
// header("HTTP/1.0 404 Not Found");
?>
<!doctype html>
<html lang="ru">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>title</title> 


<!-- unnecessary -->
<meta name="description" content="bla-bla">
<!-- https://html.spec.whatwg.org/multipage/semantics.html#meta-theme-color -->
<meta name="theme-color" content="#abcdef">
<!-- Open Graph -->
<meta property="og:locale" content="ru_RU"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="xxx"/>
<meta property="og:description" content="xxx"/>
<meta property="og:url" content="https://xxx"/>
<meta property="og:site_name" content="xxx"/>
<meta property="og:image" content="https://xxx/og.png"/>
<!-- unnecessary -->


<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
<?
$tempArr = ['https://fonts.gstatic.com/','https://use.fontawesome.com/','https://code.jquery.com'];
foreach($tempArr as $item){
?>
<link rel="preconnect" href="<?=$item?>" crossorigin>
<link rel="dns-prefetch" href="<?=$item?>">
<?}?>


<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,700&amp;subset=cyrillic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

<link href="/assets/style.css?<?=date('his')?>" rel="stylesheet" />


<div class="root">

	<div class="">
		<div class="cwidth">
			<div class="">text</div>
		</div>
	</div>

	<img src="assets/img/example.png" class="">
	
	<a href="mailto:example@example.com" class="">example@example.com</a>
	<a href="tel:+79111111111" class="">+7911-111-11-11</a>
	<a href="" class="" target="_blank" rel="noopener noreferrer">Внешняя ссылка</a>
	
	<button type="text" class=" button1">Действие</button>

	<?foreach(range(1, 33) as $i){?>
		<img src="assets/img/example<?=$i?>.png" class="">
	<?}?>

	<label class="">
		<div class="">Название:</div>
		<input id="" type="text" class="input1" name="" placeholder="">				
	</label>

</div>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="/assets/script.js?<?=date('his')?>"></script>


</html>

	
			

















