<?php

abstract class BaseFacade12 {

    protected $config;

    protected function __construct($config) {
        $this->config = $config;
    }

    protected function process($request, $operation, $jsonHelper) {
        $jsonRequest = $this->buildRequest($request, $operation, $jsonHelper);
        //echo '<br><br>Raw request : ' . $jsonRequest;

        $headers = $this->buildHeaders($jsonRequest);
        
        
        $jsonResponse = RestClient12::sendRequest($this->config, $jsonRequest, $headers);
        //echo '<br><br>Raw response : ' . $jsonResponse;

        return $this->buildResponse($jsonResponse, $jsonHelper);
    }

    private function buildHeaders($request) {
        $header = new RequestHeader12();
        $header->setAuthToken($this->config->getAuthToken());
        $header->setHmac(HmacUtils12::genarateHmac($this->config->getHmacSecret(), $request));

        $headers = array();
        $headers[] = 'HMAC: ' . $header->getHmac() . '';
        $headers[] = 'AUTHTOKEN: ' . $header->getAuthToken() . '';
        $headers[] = 'Content-Type: application/json';

        return $headers;
    }

    private function buildRequest($requestData, $operation, $jsonHelper) {
        $paycorpRequest = new PaycorpRequest12();
        $paycorpRequest->setOperation($operation);
        $paycorpRequest->setRequestDate(date('Y-m-d H:i:s'));
        $paycorpRequest->setValidateOnly($this->config->isValidateOnly());
        $paycorpRequest->setRequestData($requestData);

        $jsonRequest = $jsonHelper->toJson($paycorpRequest);
        return json_encode($jsonRequest);
    }

    private function buildResponse($response, $jsonHelper) {
        $paycorpResponse = $jsonHelper->fromJson(json_decode($response, TRUE));
        return $paycorpResponse;
    }

}
