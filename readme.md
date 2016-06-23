#Yell
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/zeeshanu/yell/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/zeeshanu/yell/?branch=master)
[![Code Climate](https://codeclimate.com/repos/576ab2d18955b300900019bc/badges/17ee5ae2c2c22651d6f9/gpa.svg)](https://codeclimate.com/repos/576ab2d18955b300900019bc/feed)
[![Latest Stable Version](https://poser.pugx.org/zeeshanu/yell/v/stable.svg)](https://packagist.org/packages/zeeshanu/yell)
[![License](https://poser.pugx.org/zeeshanu/yell/license)](https://packagist.org/packages/zeeshanu/yell)

PHP package to make your objects strict and throw exception when you try to access or set some undefined property in your objects.

##Requirement
PHP >= 5.4.0.

##Installation
You can install the library using the following ways:

##Using Composer
You can install this through <a href="http://getcomposer.org/">Composer</a>, a dependency manager for PHP. Just run the below command:

```
composer require zeeshanu/yell
```

For further details you can find the package at <a href="https://packagist.org/packages/zeeshanu/yell">Packagist</a>.

##Manual way
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

Here is how you can make your object strict i.e. not allow any other properties except `$name` and `$age` and throw exceptions for any other properties. Just `use Zeeshanu\Yell\Scream` trait in your class as follows

```php
use Zeeshanu\Yell\Scream;

class Person
{
    use Scream;

    public $name;
    public $age;
}

$person = new Person();

$person->name = 'John Doe';
$person->age = 23;

// An exception will be thrown when showing message "Trying to set undefined property $profession in class Person"  
$person->profession = 'Teacher';
```



##Feedback
If you notice that there might be some improvements in code you can create a pull request or report an issue. You can also contact me at <a href="mailto:ziishaned@gmail.com">ziishaned@gmail.com</a>.

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
