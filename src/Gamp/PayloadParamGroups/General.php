<?php
/**
 * Class responsible of setting optional params for General PayloadParamGroups
 * @package GaMP
 * @author Miroslaw Ratman
 * @since 2015-03-24
 */

//Set namespace
namespace Gamp\PayloadParamGroups;

use Gamp\PayloadParamGroups\Required\GeneralRequired;

class General extends GeneralRequired
{

    /**
     * @var [boolean] - Anonymize IP
     */
    protected $aip;

    /**
     * @var [string] - Data Source
     */
    protected $ds;

    /**
     * @var [integer] - Queue Time
     */
    protected $qt;

    /**
     * @var [string] - Cache Buster
     */
    protected $z;

    /**
     * @param mixed $aip
     */
    public function setAip($aip)
    {
        $this->aip = $aip;
    }

    /**
     * @return mixed
     */
    public function getAip()
    {
        return $this->aip;
    }

    /**
     * @param mixed $ds
     */
    public function setDs($ds)
    {
        $this->ds = $ds;
    }

    /**
     * @return mixed
     */
    public function getDs()
    {
        return $this->ds;
    }

    /**
     * @param mixed $qt
     */
    public function setQt($qt)
    {
        $this->qt = $qt;
    }

    /**
     * @return mixed
     */
    public function getQt()
    {
        return $this->qt;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }


}
