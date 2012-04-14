<?php include('lib/retriever.php') ?>
<?php include('lib/define.php') ?>
<html>
<head>
<title>EMPTY</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jQuery/jquery-1.3.2.js"></script>
<script>
$(function(){
	$('textarea').focus(function(){
		$('div#preview').html($(this).val());
		$(this).keyup(function(){
			$('div#preview').html($(this).val());
		});
	});
});	
</script>
<!--script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script-->
</head>
<body class="editor">
<?php 
	//$var = 'header';
	//$txt = getTxt($var[0]);
	foreach ($var as $value){
	echo
	'<form action="lib/updater.php" method="get">
<div>#' . $value . '</div>
<textarea class="' . $value . '" name="newText">' . getTxt($value)  . '</textarea>
<input type="hidden" name="file" value="' . $value . '" />
<input type="hidden" name="page" value="index" />
<input type="submit" />
</form>';
}
?>
<div id="preview"></div>
</body>
</html>