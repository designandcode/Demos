<?php include_once('php/helpers/functions.php'); ?>
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
<hr>
<?php $db = new Model("shop", "books" ); ?>
<h5>Print all column names</h5>
<?php print_r($db->columns); ?>
<h5>Print all columns</h5>
<?php print_r($db->rows); ?>
<h5>Removed [category_id] columm</h5>
<?php $db->filter('category_id'); print_r($db->rows); ?>
<h5>Removed another column [book_id] from the stack</h5>
<?php $db->filter('book_id'); print_r($db->rows); ?>
<h5>Print all column names after filters</h5>
<?php print_r($db->columns); ?>
<h5>Brought all the columns back</h5>
<!--?php $db->reset(); //print_r($db->rows); ?-->
<!-- Return first row -->
<h5>Print Row</h5>
<?php print_r($db->row); ?>
<h5>Print First Row</h5>
<?php print_r($db->first); ?>
<!-- Return random row -->
<h5>Print Random Row</h5>
<?php print_r($db->random); ?>
<!--h5>Print Random Row</h5-->
<!--?php print_r($db->getRandom()); ?-->
<h1>Rows and Columns returned at the time of class instantiation</h1>
<!-- Print all without assigning arrays to a variable -->
<?php foreach($db->rows as $books): ?>
	<!-- Iterate over all available columns -->
	<?php foreach($books as $column => $book): ?>
	<!-- Iterate over the selected columns -->
	<!--?php foreach($columns as $column): ?-->
	<p data-id="<?= $column; ?>"><?= $column; ?>: <?= $book; ?></p>
	<?php endforeach; ?>
	<p>&bull;</p>
<?php endforeach; ?>
<hr>
<!-- Return all rows and columns as a json string where price is greater than or equal to 8.95 and sanitize the inputs -->
<!--?php $books = $db->getAll("WHERE %s >= '%s'", "json", $column, $price); ?-->
<?php $column = 'price'; $price = 8.95; ?>
<?php $books = $db->getAll("WHERE %s >= '%s'", $column, $price);  print_r($db->rows); ?>
<!-- Return all rows and columns as a json string where price is greater than or equal to 8.95 -->
<!--?php $books = $db->getAll("WHERE $column >= '$price'", "json"); ?-->

<!-- Return all rows and columns as a json string -->
<!--?php $books = $db->getAll("", "json"); print_r($books); exit; ?-->

<!-- Return all column names -->
<!--?php $columns = $db->getColumns(); //print_r($columns); exit;?-->

<!-- **Deprecated - Use $db->getAll() instead then iterate over the rows part of the returned array ** Return all rows as an associative array -->
<!--?php $rows = $db->getRows(); //old $db->getAll() ?-->

<!-- Return all rows and columns as an associative array -->
<!--?php $books = $db->getAll(); //print_r($books); exit;?-->

<h1>$db->getAll() - 2</h1>
<!-- Iterate over the $books array and print specially formatted -->
<?php foreach($books as $book): ?>
<!--?php foreach(json_decode($books, true) as $book): ?-->
<!--?php foreach($db->rows as $book): ?-->
	<h2 data-id="<?= $book['book_id']; ?>"><?= $book['title']; ?></h2>
	<div data-id="<?= $book['book_id']; ?>">	<?= $book['author']; ?></div>
	<div data-id="<?= $book['book_id']; ?>">	<?= $book['price']; ?></div>
<?php endforeach; ?>
<hr>
<!--?php $db->format(); ?-->
<!--?php $db->getOne()->format() ?-->

<!--?php $db = new Model("shop", "books" ); ?-->
<h1>$db->getOne()->format()</h1>
<!-- Immediately print one row to the screen and format it as a table by default -->
<!--?php $db->getOne("WHERE %s = '%s'", $column, $bookid)->format(); //print_r($book); //exit; ?-->

<h1>$book = $db->getOne()</h1>
<!-- Return one row as an object ($this->rows) -->
<?php $column = 'author'; $author = 'Michael Crighton'; ?>
<?php $books = $db->getOne("WHERE %s = '%s'", $column, $author); print_r($db->row); //exit; ?>
<h1>$book->format()</h1>
<!-- Print the row instantiated previously and format it as a table by default -->
<!--?php $book->format(); ?-->

<h1>$book->format('table')</h1>
<!-- Print the row instantiated previously and format it as a table -->
<!--?php $book->format('table'); ?-->

<h1>$book->format('ul')</h1>
<!-- Print the row instantiated previously and format it as a ul(unordered list) -->
<!--?php $book->format('ul'); ?-->

<h1>$book->format('dl')</h1>
<!-- Print the row instantiated previously and format it as a dl(definition list) -->
<!--?php $book->format('dl'); ?-->
<!--?php
	
				foreach($book->rows['rows'] as $rows){
					echo $rows;
				}
?-->
<h1>$book->rows['rows']['title']</h1>
<!--?php $columns = array('title','author','price'); ?-->
<!-- Print individual rows and columns from $book array -->
<h5>Print $books</h5>
	<?php foreach($books as $column => $book): ?>
		<!--?php foreach($columns as $column): ?-->
			<!--div data-id="<!--?= $column; ?>"><!--?= $book[$column];  ?></div-->
			<div><span style="font-weight:bold"><?= $column; ?>: </span><?= $book;  ?></div>
		<!--?php endforeach; ?-->
	<?php endforeach; ?>

<?php $db->filter('author'); //unset($book['category_id']); ?>
<h5>Print $db->row</h5>
	<?php foreach($db->row as $column => $book): ?>
		<!--?php foreach($columns as $column): ?-->
			<!--div data-id="<!--?= $column; ?>"><!--?= $book[$column];  ?></div-->
			<div><span style="font-weight:bold"><?= $column; ?>: </span><?= $book;  ?></div>
		<!--?php endforeach; ?-->
	<?php endforeach; ?>
	
	
</body>
</html>