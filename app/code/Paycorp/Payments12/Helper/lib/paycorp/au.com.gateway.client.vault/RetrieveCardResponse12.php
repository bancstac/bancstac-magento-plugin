<?php

class RetrieveCardResponse12 {

    private $creditCard;
    private $clientRef;
    private $responseCode;
    private $responseText;
    private $completed;

    public function __construct() {
        
    }

    public function getCreditCard() {
        return $this->creditCard;
    }

    public function setCreditCard($creditCard) {
        $this->creditCard = $creditCard;
    }

    public function getClientRef() {
        return $this->clientRef;
    }

    public function setClientRef($clientRef) {
        $this->clientRef = $clientRef;
    }

    public function getResponseCode() {
        return $this->responseCode;
    }

    public function setResponseCode($responseCode) {
        $this->responseCode = $responseCode;
    }

    public function getResponseText() {
        return $this->responseText;
    }

    public function setResponseText($responseText) {
        $this->responseText = $responseText;
    }

    public function getCompleted() {
        return $this->completed;
    }

    public function setCompleted($completed) {
        $this->completed = $completed;
    }

}
