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
<meta name="description" content="xxx">
<!-- https://html.spec.whatwg.org/multipage/semantics.html#meta-theme-color -->
<meta name="theme-color" content="#xxx">
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

<link href="/assets/style.css?<?=date('his')?>" rel="stylesheet" />


<div class="root">

	<div class="hp1">
		<div class="hp2 cwidth">

		</div>
	</div>

</div>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script src="/assets/script.js?<?=date('his')?>"></script>


</html>

	
			

















