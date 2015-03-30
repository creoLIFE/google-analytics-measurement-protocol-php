<?php
/**
 * Class responsible of setting base PayloadParamGroups params
 * @package GaMP
 * @author Miroslaw Ratman
 * @since 2015-03-24
 */

//Set namespace
namespace Gamp\PayloadParamGroups\Required;

use Gamp\PayloadParamGroups\Helpers\PayloadParams;

class SessionRequired extends PayloadParams
{
    /**
     * Method will return current class properietes
     * @param mixed $in
     */
    protected function getRequiredFields()
    {
        return parent::getRequiredFieldsFromClass($this, __CLASS__);
    }

}
