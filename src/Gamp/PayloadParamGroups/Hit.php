<?php
/**
 * Class responsible of setting base PayloadParamGroups params
 * @package GaMP
 * @author Miroslaw Ratman
 * @since 2015-03-24
 */

//Set namespace
namespace Gamp\PayloadParamGroups;

use Gamp\PayloadParamGroups\Required\HitRequired;

class Hit extends HitRequired
{

    /**
     * @var [boolean] - Non-Interaction Hit
     */
    protected $ni;

    /**
     * @param mixed $ni
     */
    public function setNi($ni)
    {
        $this->ni = $ni;
    }

    /**
     * @return mixed
     */
    public function getNi()
    {
        return $this->ni;
    }


}
