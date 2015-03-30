<?php
/**
 * Class responsible of setting base PayloadParamGroups params
 * @package Gamp
 * @author Miroslaw Ratman
 * @since 2015-03-24
 */

//Set namespace
namespace Gamp\PayloadParamGroups\Required;

use Gamp\PayloadParamGroups\Helpers\PayloadParams;

class HitRequired extends PayloadParams
{
    /**
     * Method will return current class properietes
     * @param mixed $in
     */
    protected function getRequiredFields()
    {
        return parent::getRequiredFieldsFromClass($this, __CLASS__);
    }

    /**
     * @var [string] - User ID
     */
    protected $t;

    /**
     * @param mixed $t
     */
    public function setT($t)
    {
        $this->t = $t;
    }

    /**
     * @return mixed
     */
    public function getT()
    {
        return $this->t;
    }

}
