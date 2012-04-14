<?php include('lib/retriever.php') ?>
<?php include('lib/define.php') ?>
<html>
<head>
<title>EMPTY</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jQuery/jquery-1.3.2.js"></script>
<script type="text/javascript" >
$(function(){
	$('.button').toggle(function(){
		$('body').removeClass().addClass('page1');
		$(this).text('page1').css({'background-color':'#0af'});
	},function(){
		$('body').removeClass().addClass('page');
		$(this).text('page').css({'background-color':'#0fa','':''});;
	});

});
</script>
<!--script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script-->
</head>
<body class="page">
<div id="container">
<?php
	foreach ($var as $value){
	echo '<div id="' .  $value . '">';
	echo getTxt($value) . '</div>';
}
?>
<div class="button">page</div>
</div>
</body>
</html>