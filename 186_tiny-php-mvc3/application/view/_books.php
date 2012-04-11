<?php while ($row = mysql_fetch_assoc($books->getAll) ): ?>
	<!--?php foreach($rows as $row): ?-->
	<div>	<span style="text-decoration:underline; font-size:18px; font-weight:bold;"><?= $row['title']; ?></span></div>
	<div>	<?= $row['author']; ?></div>
	<div>	<?= $row['price']; ?></div>
	<!--?php endforeach; ?-->
<?php endwhile; ?>