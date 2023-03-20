<?php
namespace Test;
class Calcul {


	public function add($a, $b)
	{
		$this->a =$a;
		$this->b =$b;
		$add = $a+$b;
		return $add;
	}

	public function sous($a, $b)
	{
		$this->a =$a;
		$this->b =$b;
		$sous = $a-$b;
		return $sous;
	}

	public function multi($a, $b)
	{
		$this->a =$a;
		$this->b =$b;
		$multi = $a*$b;
		return $multi;
	}

	public function div($a, $b)
	{
		$this->a =$a;
		$this->b =$b;
		$div = $a/$b;
		return $div;
	}

}