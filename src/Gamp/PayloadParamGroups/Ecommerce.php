<?php
/**
 * Class responsible of setting base PayloadParamGroups params
 * @package GaMP
 * @author Miroslaw Ratman
 * @since 2015-03-24
 */

//Set namespace
namespace Gamp\PayloadParamGroups;

use Gamp\PayloadParamGroups\Required\EcommerceRequired;

class Ecommerce extends EcommerceRequired
{

    /**
     * @var [string] - Transaction Affiliation
     */
    protected $ta;

    /**
     * @var [string] - Transaction Revenue (currency)
     */
    protected $tr = 0;

    /**
     * @var [string] - Transaction Shipping (currency)
     */
    protected $ts = 0;

    /**
     * @var [string] - Transaction Tax (currency)
     */
    protected $tt = 0;

    /**
     * @var [string] - Item Price (currency)
     */
    protected $ip = 0;

    /**
     * @var [integer] - Item Quantity
     */
    protected $iq = 0;

    /**
     * @var [string] - Item Code
     */
    protected $ic;

    /**
     * @var [string] - Item Category
     */
    protected $iv;

    /**
     * @var [integer] - Currency Code
     */
    protected $cu;

    /**
     * @param mixed $cu
     */
    public function setCu($cu)
    {
        $this->cu = $cu;
    }

    /**
     * @return mixed
     */
    public function getCu()
    {
        return $this->cu;
    }

    /**
     * @param mixed $ic
     */
    public function setIc($ic)
    {
        $this->ic = $ic;
    }

    /**
     * @return mixed
     */
    public function getIc()
    {
        return $this->ic;
    }

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
     * @param mixed $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param mixed $iq
     */
    public function setIq($iq)
    {
        $this->iq = $iq;
    }

    /**
     * @return mixed
     */
    public function getIq()
    {
        return $this->iq;
    }

    /**
     * @param mixed $iv
     */
    public function setIv($iv)
    {
        $this->iv = $iv;
    }

    /**
     * @return mixed
     */
    public function getIv()
    {
        return $this->iv;
    }

    /**
     * @param mixed $ta
     */
    public function setTa($ta)
    {
        $this->ta = $ta;
    }

    /**
     * @return mixed
     */
    public function getTa()
    {
        return $this->ta;
    }

    /**
     * @param mixed $tr
     */
    public function setTr($tr)
    {
        $this->tr = $tr;
    }

    /**
     * @return mixed
     */
    public function getTr()
    {
        return $this->tr;
    }

    /**
     * @param mixed $ts
     */
    public function setTs($ts)
    {
        $this->ts = $ts;
    }

    /**
     * @return mixed
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * @param mixed $tt
     */
    public function setTt($tt)
    {
        $this->tt = $tt;
    }

    /**
     * @return mixed
     */
    public function getTt()
    {
        return $this->tt;
    }


}
