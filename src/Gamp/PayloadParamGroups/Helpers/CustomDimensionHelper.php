<?php
/**
 * Class responsible of setting base PayloadParamGroups params
 * @package GaMP
 * @author Miroslaw Ratman
 * @since 2015-03-24
 */

//Set namespace
namespace Gamp\PayloadParamGroups\Helpers;

class CustomDimensionHelper extends PayloadParams
{

    /**
     * Method will set custom dinension id and add in to it value
     */
    public function setCd($id, $value)
    {
        $property = 'cd' . $id;
        $this->$property = $value;
    }


    /**
     * Method will get custom dimention value based of dimension key ID
     */
    public function getCd($id)
    {
        $property = 'cd' . $id;
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return false;
    }

}
