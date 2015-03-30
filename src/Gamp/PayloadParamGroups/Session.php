<?php
/**
 * Class responsible of setting optional params for Session PayloadParamGroups
 * @package GaMP
 * @author Miroslaw Ratman
 * @since 2015-03-24
 */

//Set namespace
namespace Gamp\PayloadParamGroups;

use Gamp\PayloadParamGroups\Required\SessionRequired;

class Session extends SessionRequired
{

    /**
     * @var [string] - Session Control
     */
    protected $sc;

    /**
     * @var [string] - User ID
     */
    protected $uid;


    /**
     * @param mixed $sc
     */
    public function setSc($sc)
    {
        $this->sc = $sc;
    }

    /**
     * @return mixed
     */
    public function getSc()
    {
        return $this->sc;
    }

    /**
     * @param mixed $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }

}
