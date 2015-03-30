<?php
/**
 * Class responsible of setting base PayloadParamGroups params
 * @package GaMP
 * @author Miroslaw Ratman
 * @since 2015-03-24
 */

//Set namespace
namespace Gamp\PayloadParamGroups\Required;

use Gamp\PayloadParamGroups\Helpers\UserHelper;

class UserRequired extends UserHelper
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
     * @var [string] - Client ID
     */
    protected $cid;


    /**
     * @param mixed $cid
     */
    public function setCid($cid)
    {
        $this->cid = $cid;
    }

    /**
     * @return mixed
     */
    public function getCid()
    {
        return $this->cid;
    }

}
