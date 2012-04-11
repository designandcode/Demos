<?php


require_once 'php/simpletest/autorun.php';
class Foo
	{			
		public function run($arg = '')
			{
				return $arg;
			}
	}
$one = new Foo;
$foo = $one->run();
//$foo = $one->run(array(1));
$bar = $one->run(array());
//$bar = $one->run(array(1));
$baz = $one->run(array(1));


class TestThatArraysReturned extends UnitTestCase
	{
		function testFooIsAnArrayWithValues(){
			global $foo;
			$this->assertTrue($foo[0]);
		}
		function testBarIsAnArrayWithValues(){
			global $bar;
			$this->assertTrue($bar[0]);
		}
		function testBazIsAnArrayWithValues(){
			global $baz;
			$this->assertTrue($baz[0]);
		}

	}



?>