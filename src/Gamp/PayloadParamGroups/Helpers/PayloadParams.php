<?php
/**
 * Class helper for payloads
 * @package GaMP
 * @author Miroslaw Ratman
 * @since 2015-03-24
 */

//Set namespace
namespace Gamp\PayloadParamGroups\Helpers;

abstract class PayloadParams
{
    const ERR_REQUIRED_PARAMS_NOT_FILLED = "Required property (%property%) not set.";

    /**
     * Method will return current class properietes
     * @param mixed $in
     */
    protected function getRequiredFieldsFromClass($classToReflect, $currentClassName)
    {
        $out = new \StdClass();
        $out->className = $currentClassName;

        $reflectionClass = new \ReflectionClass ($classToReflect);
        foreach ($reflectionClass->getProperties() as $property) {
            if ($property->class == $currentClassName) {
                $out->properties[] = $property->name;
            }
        }

        return $out;
    }

    /**
     * Method will return group of parameters as array
     * @return [array]
     */
    public function checkRequiredFields()
    {
        $r = $this->getRequiredFields();

        if (isset($r->properties) && count($r->properties) > 0) {
            foreach ($r->properties as $p) {
                if (!isset($this->$p)) {
                    Throw new \Exception(str_replace('%property%', $r->className . '::' . $p, self::ERR_REQUIRED_PARAMS_NOT_FILLED));
                    return false;
                }
            }
        }
        return true;
    }

    /**
     * Method will return group of parameters as array
     * @return [array]
     */
    public function toArray()
    {
        return (array)$this;
    }

    /**
     * Method will return only defined parameters from group of parameters as array
     * @return [array]
     */
    public function toFilteredArray()
    {
        $out = array();

        foreach ($this as $k => $v) {
            if (isset($this->$k) && !is_null($this->$k)) {
                $out[$k] = $v;
            }
        }
        return $out;
    }

}
