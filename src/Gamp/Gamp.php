<?php
/**
 * PHP implementation of Google Analytics Measurement Protocol
 * @package GaMP
 * @author Miroslaw Ratman
 * @since 2014-08-05
 */

//Set namespace
namespace Gamp;

class Gamp
{

    /**
     * @var [string] - Error codes
     */
    const ERR_WRONG_RESPONSE = 'Wrong response from Google Analytics Measurement Protocol request. Response code %code%';

    /**
     * @var [string] - Google Analytics Measurement Protocol Endpoint
     */
    const GA_ENDPOINT_SSL = 'https://ssl.google-analytics.com/collect';

    /**
     * @var [string] - Google Analytics Measurement Protocol Endpoint
     */
    const GA_ENDPOINT_NOSSL = 'http://www.google-analytics.com/collect';

    /**
     * @var [string] - payload param
     */
    const GA_ENDPOINT_PAYLOAD = '?payload_data&';

    /**
     * @var [string] - GA Measurement Protocol endpoint
     */
    private $endpoint;

    /**
     * @var [mixed] - GA Measurement Protocol request
     */
    private $requestArray = array();

    /**
     * @var [string] - payload param
     */
    private $requestType = 'POST';

    /**
     * @var [string] - Endpoint protosol
     */
    private $requestProtocol = 'noSSL';

    /**
     * @var [string] - define if empty values from object will be removed (true) or no (false)
     */
    private $filtered = true;

    /**
     * Method will add params to params array
     * @param [mixed] $group - params group to add
     * @return void
     */
    public function addGroup($group)
    {
        $name = get_class($group);
        $group->checkRequiredFields();
        self::setRequestArray(array_merge(self::getRequestArray(), array($name => $group)));
    }

    /**
     * Method will return params added to payload
     * @return [mixed]
     */
    public function getParams()
    {
        $r = array();

        foreach ($this->requestArray as $el) {
            $arr = self::getFiltered() ? $el->toFilteredArray() : $el->toArray();
            foreach ($arr as $k => $v) {
                $r[$k] = $v;
            }
        }

        return $r;
    }

    /**
     * Method will return formatted url request
     * @return [string]
     */
    public function getPayload()
    {
        return http_build_query(self::getParams());
    }

    /**
     * Method will get instance of added group of params
     * @param [mixed] $name - name of group
     * @return [mixed]
     */
    public function getInstanceOfGroup($name)
    {
        $l = self::getRequestArray();
        return isset($l[$name]) ? $l[$name] : false;
    }

    /**
     * Method will execute tracking
     * @return void
     */
    public function track()
    {
        try {
            self::sendRequest();
        } catch (Exception $e) {
            //Log errors
        }
    }

    /**
     * Method will get instance of added group of params
     * @param [string] $requestType - type of request (GET/POST)
     * @return [integer]
     */
    public function sendRequest()
    {
        self::setEndpoint(self::getRequestProtocol() === 'SSL' ? self::GA_ENDPOINT_SSL : self::GA_ENDPOINT_NOSSL);
        $code = strtolower(self::getRequestType()) == 'post' ? self::sendPostRequest() : self::sendGetRequest();

        if ($code !== 200) {
            throw new \Exception(str_replace('%code%', $code, self::ERR_WRONG_RESPONSE));
        };
        return $code;
    }

    /**
     * Method will send POST request to GA
     * @return void
     */
    public function sendPostRequest()
    {
        $url = self::getEndpoint();
        $data = self::getPayload();

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($ch, CURLOPT_NOPROGRESS, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_POST, count($data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        curl_exec($ch);

        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return $httpcode;
    }

    /**
     * Method will send GET request to GA
     * @return void
     */
    public function sendGetRequest()
    {
        $url = self::getEndpoint();
        $url .= self::GA_ENDPOINT_PAYLOAD;
        $url .= self::getPayload();

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($ch, CURLOPT_NOPROGRESS, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return $httpcode;
    }


    /**
     * @param mixed $requestArray
     */
    public function setRequestArray($requestArray)
    {
        $this->requestArray = $requestArray;
    }

    /**
     * @return mixed
     */
    public function getRequestArray()
    {
        return $this->requestArray;
    }

    /**
     * @param mixed $requestType
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;
    }

    /**
     * @return mixed
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * @param mixed $endpoint
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * @return mixed
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param mixed $requestProtocol
     */
    public function setRequestProtocol($requestProtocol)
    {
        $this->requestProtocol = $requestProtocol;
    }

    /**
     * @return mixed
     */
    public function getRequestProtocol()
    {
        return $this->requestProtocol;
    }

    /**
     * Method will set filtering parameter which is used by toArray method to filter-out unset params
     * @param [bolean] $filtered
     */
    public function setFiltered($filtered)
    {
        $this->filtered = $filtered;
    }

    /**
     * @return mixed
     */
    public function getFiltered()
    {
        return $this->filtered;
    }

}
