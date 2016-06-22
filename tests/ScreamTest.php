<?php

namespace Tests;

use Zeeshanu\Yell\Exceptions\UndefinedPropertyException;

class ScreamTest extends \PHPUnit_Framework_TestCase 
{
	public function testCanAssignValueForExistingProperties() {
		$person = new Person();

		$person->name = 'joh doe';	
		$person->age = 23;	
	}

	public function testCannotAssignValueForNonExistingProperties() {
		$person = new Person();
		$person->profession = 'Teacher';

		$this->setExpectedException("UndefinedPropertyException");
	}
}