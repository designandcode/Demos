<?php




class Retriever
	{
		public $db;
		public $a;
		public $col_0;
		public $col_1;
		public $col_2;
		
		function __construct($db, $a, $col_0, $col_1, $col_2)
			{
				$this->db = $db;
				$this->a = $a;
				$this->col_0 = $col_0;
				$this->col_1 = $col_1;
				$this->col_2 = $col_2;
			}

		
	}


class Creator
	{
		public $db;
		public $a;
		public $col_0;
		public $col_1;
		public $col_2;
		
		function __construct($db, $a, $col_0, $col_1, $col_2)
			{
				$this->db = $db;
				$this->a = $a;
				$this->col_0 = $col_0;
				$this->col_1 = $col_1;
				$this->col_2 = $col_2;
			}

		
	}
/********** function retriever ****************/

function retriever($foo)
{

try {
	$dbh = new PDO ($foo->db);
	
	//echo 'Connected to database<br />';
	
	$sql = "SELECT * FROM primaryData";
	


	
foreach($dbh->query($sql) as $row)
	{
		
		
		echo '<span style="font-size:22px;">';
		echo $row[$foo->col_0] . "</span><br />";
		echo $row[$foo->col_1] . "<br />";
		echo $row[$foo->col_2] . "<br />";
		
		
		/*
		echo "<strong>";
		echo $row[$foo->col_0] . "<br />";
		echo "</strong>";
		echo $row[$foo->col_1] . "<br />";
		echo $row[$foo->col_2] . "<hr>" . "<br />";
		*/
	//echo "</tr>";
		//echo "<hr>";
	}
	



	$dbh=null;

}

catch(PDOException $e)
	{
	echo $e->getMessage();
	}
}



/*******************************************/
/********** function creator ****************/

function creator($foo)

{
	//$db = sqlite_open("data.db");
	//sqlite_query($db, "CREATE TABLE primaryData (name, email, comment)");

try {
    
    $dbh = new PDO($foo->db);
    
	echo 'Connected to database<br />';
	
//$sql="INSERT INTO PrimaryData (name,email,comment) VALUES (:name, :email, :comment)";

//$count=$dbh->prepare($sql);
//$count=exec(array(':name'=>$name,
//				 ':email'=>$email,
//				 ':comment'=>$title));

if (!empty($_POST['name']))
//if ($name !='')
{
	$count=$dbh->exec("INSERT INTO primaryData(
						name, 
						email, 
						comment) 
						VALUES (
						'$foo->col_0', 
						'$foo->col_1', 
						'$foo->col_2')");
}
echo "Records created:";
echo $count;
	
	$dbh=null;
	}
	catch(PDOException $e)
    {
    echo $e->getMessage();
    }	
	
}	





?>