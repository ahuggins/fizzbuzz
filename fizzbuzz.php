<?php
/**
* The FizzBuzz Class
*/
class FizzBuzz
{
	protected $maxRange;
	protected $i;
	protected $firstDenominator;
	protected $secondDenominator;
	protected $beginRange;
	protected $print;
	
	function __construct($maxRange = 50, $firstDenominator = 3, $secondDenominator = 5, $beginRange = 1)
	{
		$this->maxRange = $maxRange;
		$this->firstDenominator = $firstDenominator;
		$this->secondDenominator = $secondDenominator;
		$this->beginRange = $beginRange;
		$this->FizzBuzz();
	}

	/**
	 * Create a loop based on the parameters passed in constructor, loop through the values and check
	 * if divisible by 3 or 5 (or passed denominators). Then print the value.
	 */
	public function FizzBuzz()
	{
		for ( $this->i = $this->beginRange; $this->i <= $this->maxRange; $this->i++ ) { 
			$this->print = $this->i;
			if ($this->divisible( $this->firstDenominator )) {
				$this->print = 'Fizz';
			}
			if ($this->divisible( $this->secondDenominator )) {
				$this->print = $this->both();
			}
			print $this->print . PHP_EOL;
		}
	}

	/**
	 * Check if the integer in the loop is divisible by the firstDenominator 
	 * @return string  Either FizzBuzz or Fizz.
	 */
	protected function both()
	{
		if ($this->print == 'Fizz') {
			return $this->print . 'Buzz';
		}
		return 'Buzz';
	}

	/**
	 * Check to see if the $i is divisible by the passed $m (modulus)
	 * @param  int $m 
	 * @return boolean    Whether or not the number is evenly divisble
	 */
	protected function divisible($m)
	{
		if (($this->i % $m) == 0) {
			return true;
		}
		return false;
	}

}

new FizzBuzz();
