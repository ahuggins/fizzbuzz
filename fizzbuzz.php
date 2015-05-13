<?php
/**
* The FizzBuss Class
*/
class FizzBuzz
{
	protected $maxRange;
	protected $i;
	protected $firstDenominator;
	protected $secondDenominator;
	protected $beginRange;
	
	function __construct($maxRange = 50, $firstDenominator = 3, $secondDenominator = 5, $beginRange = 1)
	{
		$this->maxRange = $maxRange;
		$this->firstDenominator = $firstDenominator;
		$this->secondDenominator = $secondDenominator;
		$this->beginRange = $beginRange;
		$this->FizzBuzz();
	}

	public function FizzBuzz()
	{
		for ( $this->i = $this->beginRange; $this->i <= $this->maxRange; $this->i++ ) { 
			if ( $this->divisible( $this->firstDenominator ) && $this->divisible( $this->secondDenominator ) ) {
				print 'FizzBuzz' . PHP_EOL;
			} elseif ( $this->divisible( $this->firstDenominator ) ) {
				print 'Fizz' . PHP_EOL;
			} elseif ( $this->divisible( $this->secondDenominator ) ) {
				print 'Buzz' . PHP_EOL;
			} else {
				print $this->i . PHP_EOL;
			}
		}
	}

	protected function divisible($m)
	{
		if (($this->i % $m) == 0) {
			return true;
		}
		return false;
	}

}

new FizzBuzz();
