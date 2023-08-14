<?php
namespace App\Helpers;

/**
 * [These Class Provides Main Operations on Helpers]
 * AbstractHelper
 * @package App\Helpers
 * @author Abdullah Alnahhal <abdullahalnahhal@gmail.com>
 * @abstract
 */

abstract class AbstractHelper
{

    public function __callStatic(string $name, array $args)
    {
        return $this->__call($name, $args);
    }

    public function __call(string $methodName, array $args = [])
    {
        $propertyName = trimAllSpaces($methodName);

        if (!$propertyName) {
            throw new \Exception("Method name can't be empty ... !");
        }

        $propertyName  = explode("get", $methodName);

        if (!empty($methodName)) {
            $propertyName = $propertyName[count($propertyName)-1];

        }

        if (!$propertyName) {
            throw new \Exception("Method name can't be empty ... !");
        }

        if (property_exists($this, lcfirst($propertyName))) {
            return $this->{lcfirst($propertyName)};
        }elseif(count(explodeCaps($methodName))){
            $propertyName = implodeToLower("_", $propertyName);
            if (property_exists($this, $propertyName)) {
                return $this->{$propertyName};
            }
        }

        if (!$propertyName) {
            throw new \Exception("These property doesn't exist ... !");
        }
    }
}
?>
