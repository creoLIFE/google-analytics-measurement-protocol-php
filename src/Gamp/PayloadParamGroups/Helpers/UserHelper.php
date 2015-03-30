<?php
/**
 * Class responsible of setting base PayloadParamGroups params
 * @package GaMP
 * @author Miroslaw Ratman
 * @since 2015-03-24
 */

//Set namespace
namespace Gamp\PayloadParamGroups\Helpers;

class UserHelper extends PayloadParams
{

    /**
     * Method will generate random Client ID $cid number
     */
    public function generateCid()
    {
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand(0, 0xffff), mt_rand(0, 0xffff),

            // 16 bits for "time_mid"
            mt_rand(0, 0xffff),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand(0, 0x0fff) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand(0, 0x3fff) | 0x8000,

            // 48 bits for "node"
            mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }

    /**
     * Method will generate random Client ID $cid number
     */
    public function getCidNumber()
    {
        return self::checkCidInCookieExists() ? self::getCidFromCookie() : self::generateCid();
    }

    /**
     * Method will generate random Client ID $cid number
     */
    public function getCidFromCookie()
    {
        list($v, $d, $cid1, $cid2) = preg_split('[\.]', $_COOKIE["_ga"], 4);
        return $cid1 . '.' . $cid2;
    }

    /**
     * Method will check if Client ID $cid in cookie exists
     */
    public function checkCidInCookieExists()
    {
        if (isset($_COOKIE['_ga']) && !empty($_COOKIE['_ga'])) {
            return true;
        }
        return false;
    }

}
