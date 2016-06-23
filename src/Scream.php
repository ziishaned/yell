<?php 

namespace Zeeshanu\Yell;

use Zeeshanu\Yell\Exceptions\UndefinedPropertyException;

trait Scream
{
    /**
     * Check if the property that user trying to get exists or not. If the property
     * doesn't exist then throw an exception.
     * 
     * @param  string $propertyName
     * @throws UndefinedPropertyException
     * 
     * @return void
     */
    public function __get($propertyName)
    {
        if (! property_exists($this, $propertyName)) {
            throw new UndefinedPropertyException($this->getScreamErrorMessage("get"));
        }
    }

    /**
     * Check if the property that user trying to set exists or not. If the property
     * doesn't exist then throw an exception.
     * 
     * @param  string $propertyName
     * @param  mixed $value
     * @throws UndefinedPropertyException
     * 
     * @return void
     */
    public function __set($propertyName, $value)
    {
        if (! property_exists($this, $propertyName)) {
            throw new UndefinedPropertyException($this->getScreamErrorMessage("set", $propertyName));
        }   
    }

    /**
     * Generates an exception message.
     * 
     * @param  string $errorType
     * @param  string $propertyName
     * @return string Exception message
     */
    public function getScreamErrorMessage($errorType, $propertyName)
    {
        return 'Trying to ' . $errorType . ' undefined property $' . $propertyName . ' in class ' . get_class($this);
    }
}
