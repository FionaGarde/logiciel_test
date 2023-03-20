<?php
namespace Test;
class CalculTest extends Calcul {


	public function testAdd($a=3, $b=2)
	{
		$result = new Calcul(add(3+2));
	}


	public function testSous($a=3, $b=2)
	{
		$result = new Calcul(sous(3-2));
	}


	public function testMulti($a=3, $b=2)
	{
		$result = new Calcul(multi(3*2));
	}


	public function testDiv($a=3, $b=2)
	{
		$result = new Calcul(div(3/2));
	}


	public function testDic($a=3, $b=0)
	{
		$result = new Calcul(div(3/0);
	}


}