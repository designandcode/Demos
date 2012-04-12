
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>EMPTY</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!--script type="text/javascript" src="jQuery/jquery-1.3.2.js"></script-->
<!--script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script-->
</head>
<body>

<?php

// Create or open new database (if exists)
$db = sqlite_open("db.sqlite");

// Create table foo - uncomment when complete
//sqlite_query($db, "CREATE TABLE foo(id INTEGER PRIMARY KEY, name CHAR(255))");

// Insert sample data
sqlite_query($db, "INSERT INTO foo (name) VALUES ('Bill')");
//sqlite_query($db, "INSERT INTO foo (name) VALUES ('Sue')");
//sqlite_query($db, "INSERT INTO foo (name) VALUES ('Richard')");


// Delete data
//sqlite_query($db, "DELETE FROM foo");

// Update data
//sqlite_query($db, "UPDATE foo SET name = 'Robert' WHERE name = 'Bill'");

// Retrieve data
$result = sqlite_query($db, "SELECT * FROM foo");


// Iterate through the retrieved rows
echo "<ul>";
foreach (sqlite_fetch_all($result) as $row)
	{
		echo "<li>" . $row['name'] . "</li>";
	}
echo "</ul>";

sqlite_close($db);

?>
</div>
</body>
</html>