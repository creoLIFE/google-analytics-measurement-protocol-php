<?php
/**
 * Class responsible of setting base PayloadParamGroups params
 * @package GaMP
 * @author Miroslaw Ratman
 * @since 2015-03-24
 */

//Set namespace
namespace Gamp\PayloadParamGroups;

use Gamp\PayloadParamGroups\Required\EventRequired;

class Event extends EventRequired
{
    /**
     * @var [string] - Event Category
     */
    protected $ec;

    /**
     * @var [string] - Event Action
     */
    protected $ea;

    /**
     * @var [string] - Event Label
     */
    protected $el;

    /**
     * @var [integer] - Event Value
     */
    protected $ev;

    /**
     * @param mixed $ea
     */
    public function setEa($ea)
    {
        $this->ea = $ea;
    }

    /**
     * @return mixed
     */
    public function getEa()
    {
        return $this->ea;
    }

    /**
     * @param mixed $ec
     */
    public function setEc($ec)
    {
        $this->ec = $ec;
    }

    /**
     * @return mixed
     */
    public function getEc()
    {
        return $this->ec;
    }

    /**
     * @param mixed $el
     */
    public function setEl($el)
    {
        $this->el = $el;
    }

    /**
     * @return mixed
     */
    public function getEl()
    {
        return $this->el;
    }

    /**
     * @param mixed $ev
     */
    public function setEv($ev)
    {
        $this->ev = $ev;
    }

    /**
     * @return mixed
     */
    public function getEv()
    {
        return $this->ev;
    }

}
