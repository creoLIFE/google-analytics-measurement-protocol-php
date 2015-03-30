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

class EcommerceRequired extends PayloadParams
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
     * @var [string] - Transaction ID
     * @category [required]
     */
    protected $ti;

    /**
     * @var [string] - Item Name
     */
    protected $in;

    /**
     * @param mixed $in
     */
    public function setIn($in)
    {
        $this->in = $in;
    }

    /**
     * @return mixed
     */
    public function getIn()
    {
        return $this->in;
    }

    /**
     * @param mixed $ti
     */
    public function setTi($ti)
    {
        $this->ti = $ti;
    }

    /**
     * @return mixed
     */
    public function getTi()
    {
        return $this->ti;
    }


}
