<?php
/**
 * Class responsible of setting base PayloadParamGroups params
 * @package GaMP
 * @author Miroslaw Ratman
 * @since 2015-03-24
 */

//Set namespace
namespace Gamp\PayloadParamGroups;

use Gamp\PayloadParamGroups\Required\ContentInformationRequired;

class ContentInformation extends ContentInformationRequired
{

    /**
     * @var [string] - Document location URL
     */
    protected $dl;

    /**
     * @var [string] - Document Host Name
     */
    protected $dh;

    /**
     * @var [string] - Document Path
     */
    protected $dp;

    /**
     * @var [string] - Document Title
     */
    protected $dt;

    /**
     * @var [string] - Screen Name
     */
    protected $cd;

    /**
     * @var [string] - Link ID
     */
    protected $linkid;

    /**
     * @param mixed $cd
     */
    public function setCd($cd)
    {
        $this->cd = $cd;
    }

    /**
     * @return mixed
     */
    public function getCd()
    {
        return $this->cd;
    }

    /**
     * @param mixed $dh
     */
    public function setDh($dh)
    {
        $this->dh = $dh;
    }

    /**
     * @return mixed
     */
    public function getDh()
    {
        return $this->dh;
    }

    /**
     * @param mixed $dl
     */
    public function setDl($dl)
    {
        $this->dl = $dl;
    }

    /**
     * @return mixed
     */
    public function getDl()
    {
        return $this->dl;
    }

    /**
     * @param mixed $dp
     */
    public function setDp($dp)
    {
        $this->dp = $dp;
    }

    /**
     * @return mixed
     */
    public function getDp()
    {
        return $this->dp;
    }

    /**
     * @param mixed $dt
     */
    public function setDt($dt)
    {
        $this->dt = $dt;
    }

    /**
     * @return mixed
     */
    public function getDt()
    {
        return $this->dt;
    }

    /**
     * @param mixed $linkid
     */
    public function setLinkid($linkid)
    {
        $this->linkid = $linkid;
    }

    /**
     * @return mixed
     */
    public function getLinkid()
    {
        return $this->linkid;
    }


}
