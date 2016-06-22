<?php 

namespace Zeeshanu;

use Zeeshanu\Exceptions\UndefinedPropertyException;

trait Yell 
{
	/**
	 * Property name that user trying to set or get.
	 * @var mixed
	 */
	protected $propertyName;

	/**
	 * Check if the property that user trying to get exists or not. If the property
	 * doesn't exist then throw an exception.
	 * 
	 * @param  string $propertyName
	 * @throws Exception
	 * 
	 * @return void
	 */
	public function __get($propertyName) {
		$this->propertyName = $propertyName;

		if(!property_exists($this, $propertyName)) {
			throw new UndefinedPropertyException($this->getError("get"));
		}
	}

	/**
	 * Check if the property that user trying to set exists or not. If the property
	 * doesn't exist then throw an exception.
	 * 
	 * @param  string $propertyName
	 * @param  mixed $value
	 * @throws Exception
	 * 
	 * @return void
	 */
	public function __set($propertyName, $value) {
		$this->propertyName = $propertyName;
		
		if(!property_exists($this, $propertyName)) {
			throw new UndefinedPropertyException($this->getError("set"));
		}	
	}

	/**
	 * Generates an exception message.
	 * 
	 * @param  string $errorType 
	 * @return string Exception
	 */
	public function getError($errorType)
	{
 		$message = 'Trying to ' . $errorType . ' undefined property $' . $this->propertyName . ' in class ' . get_class($this);
		return $message;
	}	

}