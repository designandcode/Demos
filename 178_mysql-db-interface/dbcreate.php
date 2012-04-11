<?php include('php/helpers/functions.php'); ?>
<html>
<head>
<title>EMPTY</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jQuery/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="tests/tests.js"></script>
<!--script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script-->
<script>
	$(function(){
		//$("body").tests(); Works if tests/01_qunit-test.js exists and has logic - else prints no tests (only test container)
		//$("body").tests({pages: ['CheckBoxState']}); //tests will be run in this order
		//$("body").tests(); //tests will be run in this order

		
	});
</script>
</head>
<body>
I CAN HAZ TDD?
<?php $db = new Model("shop", "books" ); ?>
<?php $books = $db->getAll("ORDER BY price"); ?>
<table>
	<?php foreach($books as $book): ?>
	<tr data-id="<?= $book['book_id']; ?>">
	<td><?= $book['title']; ?></td>
	<td>	<?= $book['author']; ?></td>
	<td>	<?= $book['price']; ?></td>
	</tr>
<?php endforeach; ?>
</table>
<hr>
<form method="post" action="php/dbcreateone.php">
<!--form method="post"-->
	<p>Title: <input type="text" name="title"/></p>
	<p>Author: <input type="text" name="author" /></p>
	<p>Price <input type="text" name="price" /></p>
	<p><input type="submit" value="Create"/></p>
</form>
<!--?php $_SESSION['post'] = $_POST; ?-->
<!--?php $db->createOne($_SESSION['post']); ?-->
<!--?php $db->createOne($_POST); ?-->

<!-- dbcreate.php?title=Area11&author=Maude+Claude&price=9.98 -->
<!--?php $db->createOne($_GET); ?-->
</body>
</html>