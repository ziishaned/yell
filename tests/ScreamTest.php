<?php

namespace Tests;

use Tests\Person;

class ScreamTest extends \PHPUnit_Framework_TestCase 
{
	public function testCanAssignValueForExistingProperties() {
		$person = new Person();

		$person->name = 'joh doe';	
		$person->age = 23;	
	}

	public function testCannotAssignValueForNonExistingProperties() {
		$this->setExpectedException('Zeeshanu\Yell\Exceptions\UndefinedPropertyException');
		
		$person = new Person();
		$person->profession = 'Teacher';
	}
}