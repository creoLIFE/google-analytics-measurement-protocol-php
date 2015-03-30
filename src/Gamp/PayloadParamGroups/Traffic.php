<?php
/**
 * Class responsible of setting base PayloadParamGroups params
 * @package GaMP
 * @author Miroslaw Ratman
 * @since 2015-03-24
 */

//Set namespace
namespace Gamp\PayloadParamGroups;

use Gamp\PayloadParamGroups\Required\TrafficRequired;

class Traffic extends TrafficRequired
{

    /**
     * @var [text] - Document Referrer
     */
    protected $dr;

    /**
     * @var [text] - Campaign Name
     */
    protected $cn;

    /**
     * @var [text] - Campaign Source
     */
    protected $cs;

    /**
     * @var [text] - Campaign Medium
     */
    protected $cm;

    /**
     * @var [text] - Campaign Keyword
     */
    protected $ck;

    /**
     * @var [text] - Campaign Content
     */
    protected $cc;

    /**
     * @var [text] - Campaign ID
     */
    protected $ci;

    /**
     * @var [text] - Google AdWords ID
     */
    protected $gclid;

    /**
     * @var [text] - Google Display Ads ID
     */
    protected $dclid;

    /**
     * @param mixed $cc
     */
    public function setCc($cc)
    {
        $this->cc = $cc;
    }

    /**
     * @return mixed
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * @param mixed $ci
     */
    public function setCi($ci)
    {
        $this->ci = $ci;
    }

    /**
     * @return mixed
     */
    public function getCi()
    {
        return $this->ci;
    }

    /**
     * @param mixed $ck
     */
    public function setCk($ck)
    {
        $this->ck = $ck;
    }

    /**
     * @return mixed
     */
    public function getCk()
    {
        return $this->ck;
    }

    /**
     * @param mixed $cm
     */
    public function setCm($cm)
    {
        $this->cm = $cm;
    }

    /**
     * @return mixed
     */
    public function getCm()
    {
        return $this->cm;
    }

    /**
     * @param mixed $cn
     */
    public function setCn($cn)
    {
        $this->cn = $cn;
    }

    /**
     * @return mixed
     */
    public function getCn()
    {
        return $this->cn;
    }

    /**
     * @param mixed $cs
     */
    public function setCs($cs)
    {
        $this->cs = $cs;
    }

    /**
     * @return mixed
     */
    public function getCs()
    {
        return $this->cs;
    }

    /**
     * @param mixed $dclid
     */
    public function setDclid($dclid)
    {
        $this->dclid = $dclid;
    }

    /**
     * @return mixed
     */
    public function getDclid()
    {
        return $this->dclid;
    }

    /**
     * @param mixed $dr
     */
    public function setDr($dr)
    {
        $this->dr = $dr;
    }

    /**
     * @return mixed
     */
    public function getDr()
    {
        return $this->dr;
    }

    /**
     * @param mixed $gclid
     */
    public function setGclid($gclid)
    {
        $this->gclid = $gclid;
    }

    /**
     * @return mixed
     */
    public function getGclid()
    {
        return $this->gclid;
    }


}
