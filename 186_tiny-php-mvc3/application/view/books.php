<!--?php while ($row = mysql_fetch_assoc($book->getAll) ): ?-->
	<h1> <?= $metatitle; ?> </h1>
	<form method="post" action="add/">
	<p><label>Title</label><input type="text" name="title" /></p>
	<p><label>Author</label><input type="text" name="author" /></p>
	<p><label>Price</label><input type="text" name="price" /></p>
	<p><label></label><input type="submit" value="Add New" /></p>
	</form>
<?php foreach($books as $book): ?>
	<div>	<span style="text-decoration:underline; font-size:18px; font-weight:bold;"><?= $book['title']; ?></span></div>
	<div>	<?= $book['author']; ?></div>
	<div>	<?= $book['price']; ?></div>
<?php endforeach; ?>
<!--?php endwhile; ?-->