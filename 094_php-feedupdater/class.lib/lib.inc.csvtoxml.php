<?php


class Update
{

	public $input1;
	public $input2;
	public $input3;

	function __construct($input1,$input2,$input3)
		{
		$this->input1 = $_GET['input1'];
		$this->input2 = $_GET['input2'];
		$this->input3 = $_GET['input3'];
		}


}
?>
<?php

class Create
{
	public $document;
	public $level1;
	public $level2;
	
	function __construct($document,$level1,$level2)
		{
		
		$this->document = new DOMDocument('1.0', 'utf-8');
		$this->level1 = $this->document->appendChild($this->document->createElement('rss',''));
		$this->level1->setAttribute('version', '2.0');
		$this->level2 = $this->level1->appendChild($this->document->createElement('channel',''));
		
		}
		
	function node1Printer($wom)	
		{
		
		
		
		
		
		$this->level2;

		$LEVEL3a = $this->document->createElement('title','Designtopx-Community News');
		$LEVEL3a = $this->level2->appendChild($LEVEL3a);

		$LEVEL3a = $this->document->createElement('link','http://www.designtopx.com/community-news/latest.php');
		$LEVEL3a = $this->level2->appendChild($LEVEL3a);

		$LEVEL3a = $this->document->createElement('description','Designtopx.com');
		$LEVEL3a = $this->level2->appendChild($LEVEL3a);
		
		$LEVEL3a = $this->document->createElement('lastBuildDate', $wom);
		$LEVEL3a = $this->level2->appendChild($LEVEL3a);

		$LEVEL3a = $this->document->createElement('language','en-us');
		$LEVEL3a = $this->level2->appendChild($LEVEL3a);
		
		}
		
		
		function node2Printer($foo,$bar,$baz,$bat,$fiz)	
		{
		
		
		
		
		$LEVEL3a = $this->document->createElement('item','');
		$LEVEL3a = $this->level2->appendChild($LEVEL3a);
		
		$LEVEL4a = $this->document->createElement('title',$foo);
		$LEVEL4a = $LEVEL3a->appendChild($LEVEL4a);

		$LEVEL4a = $this->document->createElement('link',$bar);
		$LEVEL4a = $LEVEL3a->appendChild($LEVEL4a);

		$LEVEL4a = $this->document->createElement('guid',$baz);
		$LEVEL4a = $LEVEL3a->appendChild($LEVEL4a);
		
		$LEVEL4a = $this->document->createElement('pubDate',$bat);
		$LEVEL4a = $LEVEL3a->appendChild($LEVEL4a);

		$LEVEL4a = $this->document->createElement('description',$fiz);
		$LEVEL4a = $LEVEL3a->appendChild($LEVEL4a);
		
		}
}

?>

<?php
$root =  new Create('','','');
$foo =  new Create('','','');
$bar = new Update('','','');


function arrPrintr()
{
$handle = @fopen('data.store.csv','r'); 
if ($handle) { 
   while (!feof($handle)) { 
	
	$rows[]=fgetcsv($handle,1000,',');
      } 
	  
	  return $rows;
	}  
	  fclose($handle);
	}



$node = arrPrintr();



$root->document;
$root->node1Printer($wom = 'Tue, 6 Apr 2010 18:37:00 GMT');

$count = count($node) - 1;
//count($node)

for ($row = 0; $row < $count; $row++)	
{
 
		
$root->node2Printer($node[$row][0],$node[$row][1],$node[$row][2],$node[$row][3],$node[$row][4]);

}




$root->document->save("designtopx-community-news-RSS2.xml");

$root->document->load("designtopx-community-news-RSS2.xml");


$root->document->formatOutput = true;	
$root->document->save("designtopx-community-news-RSS2.xml");

//echo 'Success! Insert another record? <a href="../new.php">Yes</a>';
echo 'Success!';
?>
