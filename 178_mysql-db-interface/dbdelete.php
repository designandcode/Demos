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
<!-- More control over what comes in and what html to wrap it in -->
<!--?php $db = new Retrieve("shop", "books"); ?-->
<?php $db = new Model("shop", "books" ); ?>
<?php $books = $db->getAll("ORDER BY price"); ?>
<table>
<!--?php while ($row = mysql_fetch_assoc($db->getAll) ): ?-->
	<?php foreach($books as $book): ?>
	<tr>
	<td><?= $book['title']; ?></td>
	<td>	<?= $book['author']; ?></td>
	<td>	<?= $book['price']; ?></td>
	</tr>
<?php endforeach; ?>
<!--?php endwhile; ?-->
</table>
<?php $book = $db->getOne("WHERE title = 'Area11author=Maude Claudeprice=9.98'"); ?>
<hr>
<form method="post" action="php/dbdeleteone.php">
	<p>Title: <input type="text" name="title" value="<?= $book['title']; ?>"/></p>
	<p>Author: <input type="text" name="author"  value="<?= $book['author']; ?>"/></p>
	<p>Price <input type="text" name="price"  value="<?= $book['price']; ?>"/></p>
	<p><input type="hidden" name="book_id" value="<?= $book['book_id']; ?>"/><input type="submit" value="Delete"/></p>
</form>
</body>
</html>