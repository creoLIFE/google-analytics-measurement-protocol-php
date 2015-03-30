<?php
/**
 * Class responsible of setting base PayloadParamGroups params
 * @package GaMP
 * @author Miroslaw Ratman
 * @since 2015-03-24
 */

//Set namespace
namespace Gamp\PayloadParamGroups;

use Gamp\PayloadParamGroups\Required\ContentInformation;

class AppTracking extends AppTrackingRequired
{

    /**
     * @var [string] - Application Name
     */
    protected $an;

    /**
     * @var [string] - Application ID
     */
    protected $aid;

    /**
     * @var [string] - Application Version
     */
    protected $av;

    /**
     * @var [string] - Application Installer ID
     */
    protected $aiid;

    /**
     * @param mixed $aid
     */
    public function setAid($aid)
    {
        $this->aid = $aid;
    }

    /**
     * @return mixed
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * @param mixed $aiid
     */
    public function setAiid($aiid)
    {
        $this->aiid = $aiid;
    }

    /**
     * @return mixed
     */
    public function getAiid()
    {
        return $this->aiid;
    }

    /**
     * @param mixed $an
     */
    public function setAn($an)
    {
        $this->an = $an;
    }

    /**
     * @return mixed
     */
    public function getAn()
    {
        return $this->an;
    }

    /**
     * @param mixed $av
     */
    public function setAv($av)
    {
        $this->av = $av;
    }

    /**
     * @return mixed
     */
    public function getAv()
    {
        return $this->av;
    }


}
