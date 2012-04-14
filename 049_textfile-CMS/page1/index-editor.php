<?php include('../lib/retriever.php') ?>
<html>
<head>
<title>EMPTY</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<!--script type="text/javascript" src="jQuery/jquery-1.3.2.js"></script-->
<!--script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script-->
</head>
<body class="editor">
<form action="../lib/updater.php" method="get">
<div>#Header</div>
<textarea class="header" name="newText"><?php getTxt('header');  ?></textarea>
<input type="hidden" name="file" value="header" />
<input type="hidden" name="page" value="page1" />
<input type="submit" />
</form>

<form action="../lib/updater.php" method="get">
<div>#Nav</div>
<textarea class="nav" name="newText"><?php getTxt('nav');  ?></textarea>
<input type="hidden" name="file" value="nav" />
<input type="hidden" name="page" value="page1" />
<input type="submit" />
</form>

<form action="../lib/updater.php" method="get">
<div>#Content</div>
<textarea class="content" name="newText"><?php getTxt('content');  ?></textarea>
<input type="hidden" name="file" value="content" />
<input type="hidden" name="page" value="page1" />
<input type="submit" />
</form>

<form action="../lib/updater.php" method="get">
<div>#Sidebar</div>
<textarea class="sidebar" name="newText"><?php getTxt('sidebar');  ?></textarea>
<input type="hidden" name="file" value="sidebar" />
<input type="hidden" name="page" value="page1" />
<input type="submit" />
</form>

<form action="../lib/updater.php" method="get">
<div>#Footer</div>
<textarea class="footer" name="newText"><?php getTxt('footer');  ?></textarea>
<input type="hidden" name="file" value="footer" />
<input type="hidden" name="page" value="page1" />
<input type="submit" />
</form>
</body>
</html>