<?php
/**
 * Class responsible of setting base PayloadParamGroups params
 * @package GaMP
 * @author Miroslaw Ratman
 * @since 2015-03-24
 */

//Set namespace
namespace Gamp\PayloadParamGroups;

use Gamp\PayloadParamGroups\Required\SystemInfoRequired;

class SystemInfo extends SystemInfoRequired
{

    /**
     * @var [string] - Screen Resolution
     */
    protected $sr;

    /**
     * @var [string] - Viewport size
     */
    protected $vp;

    /**
     * @var [string] - Document Encoding
     */
    protected $de;

    /**
     * @var [string] - Screen Colors
     */
    protected $sd;

    /**
     * @var [string] - User Language
     */
    protected $ul;

    /**
     * @var [string] - Java Enabled
     */
    protected $je;

    /**
     * @var [string] - Flash Version
     */
    protected $fl;

    /**
     * @param mixed $de
     */
    public function setDe($de)
    {
        $this->de = $de;
    }

    /**
     * @return mixed
     */
    public function getDe()
    {
        return $this->de;
    }

    /**
     * @param mixed $fl
     */
    public function setFl($fl)
    {
        $this->fl = $fl;
    }

    /**
     * @return mixed
     */
    public function getFl()
    {
        return $this->fl;
    }

    /**
     * @param mixed $je
     */
    public function setJe($je)
    {
        $this->je = $je;
    }

    /**
     * @return mixed
     */
    public function getJe()
    {
        return $this->je;
    }

    /**
     * @param mixed $sd
     */
    public function setSd($sd)
    {
        $this->sd = $sd;
    }

    /**
     * @return mixed
     */
    public function getSd()
    {
        return $this->sd;
    }

    /**
     * @param mixed $sr
     */
    public function setSr($sr)
    {
        $this->sr = $sr;
    }

    /**
     * @return mixed
     */
    public function getSr()
    {
        return $this->sr;
    }

    /**
     * @param mixed $ul
     */
    public function setUl($ul)
    {
        $this->ul = $ul;
    }

    /**
     * @return mixed
     */
    public function getUl()
    {
        return $this->ul;
    }

    /**
     * @param mixed $vp
     */
    public function setVp($vp)
    {
        $this->vp = $vp;
    }

    /**
     * @return mixed
     */
    public function getVp()
    {
        return $this->vp;
    }

}
