<?php

class PaycorpRequest24 {
    
    private $api;
    private $version;
    private $msgId;
    private $operation;
    private $requestDate;
    private $validateOnly;
    private $requestData;
    
    public function __construct() {
        $this->api = "PHP";
        $this->version = Version24::$VERSION_LATEST;
        $this->msgId = CommonUtils24::generateGUID();
        $this->validateOnly = FALSE;
    }
    
     public function getApi() {
        return $this->api;
    }

    public function setApi($api) {
        $this->api =$api;
    }
    
    public function getVersion() {
        return $this->version;
    }

    public function setVersion($version) {
        $this->version = $version;
    }
    
    public function getMsgId() {
        return $this->msgId;
    }

    public function setMsgId($msgId) {
        $this->msgId = $msgId;
    }

    public function getOperation() {
        return $this->operation;
    }

    public function setOperation($operation) {
        $this->operation = $operation;
    }

    public function getRequestDate() {
        return $this->requestDate;
    }

    public function setRequestDate($requestDate) {
        $this->requestDate = $requestDate;
    }

    public function getValidateOnly() {
        return $this->validateOnly;
    }

    public function setValidateOnly($validateOnly) {
        $this->validateOnly = $validateOnly;
    }

    public function getRequestData() {
        return $this->requestData;
    }

    public function setRequestData($requestData) {
        $this->requestData = $requestData;
    }

}
