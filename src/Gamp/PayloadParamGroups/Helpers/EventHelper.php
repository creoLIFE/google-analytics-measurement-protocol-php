<?php
/**
 * Class responsible of setting base PayloadParamGroups params
 * @package GaMP
 * @author Miroslaw Ratman
 * @since 2015-03-24
 */

//Set namespace
namespace Gamp\PayloadParamGroups\Helpers;

use Gamp\PayloadParamGroups\Helpers\UserHelper;

class EventHelper extends PayloadParams
{

    /**
     * Method will return right EV value based on fact that CID (UUID) exists or not in cookies
     */
    public function setEvBasedOnCidFromCookie()
    {
        $cUser = new UserHelper;
        return (int)($cUser->checkCidInCookieExists() === false ? 1 : 0);
    }
}
