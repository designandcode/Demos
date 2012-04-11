<!--?php while ($row = mysql_fetch_assoc($book->getAll) ): ?-->
	<h1> <?= $metatitle; ?> </h1>
<?php foreach($books as $book): ?>
	<div>	<span style="text-decoration:underline; font-size:18px; font-weight:bold;"><?= $book['title']; ?></span></div>
	<div>	<?= $book['author']; ?></div>
	<div>	<?= $book['price']; ?></div>
<?php endforeach; ?>
<!--?php endwhile; ?-->