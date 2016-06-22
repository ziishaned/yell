#Yell
A php package that yells when you try to access a property that doesn't exist in a class.

##Requirement
PHP >= 5.3.0.

##Installation
You can install the library using the following:

- Copy <code>src</code> to your codebase, perhaps to the vendor directory.
- Add the <code>Zeeshanu\Yell\Scream</code> class to your autoloader or require the file directly.

##Getting Started
I'm going to create take an example to demonstrate the usage.

For example, you have a `Person` class like below:

```php
class Person
{
	public $name;
	public $age;
}

$person = new Person();

$person->name = 'John Doe';
$person->age = 23;

// Will silently set the property `profession` on `Person` without any issue 
$person->profession = 'Teacher';
```

And you would like to not allow any other properties being set on the class, except for the ones that the class has. Just `use Zeeshanu\Yell\Scream` trait in your class as follows

```php
class Person
{
	use Zeeshanu\Yell\Scream;

	public $name;
	public $age;
}

$person = new Person();

$person->name = 'John Doe';
$person->age = 23;

// An exception will be thrown when showing message "Trying to set undefined property $name in class Person"  
$person->profession = 'Teacher';
```



##Feedback
If you notice that there might be some improvements in code you can create a pull request or report an issue. You can also contact me at <a href="mailto:ziishaned@gmail.com">ziishaned@gmail.com</a>.

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.