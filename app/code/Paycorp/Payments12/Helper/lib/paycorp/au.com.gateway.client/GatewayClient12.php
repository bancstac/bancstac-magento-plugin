<?php
 
class GatewayClient12 {

    private $payment;
    private $vault;
    private $report;
    private $amexWallet;

    public function __construct(ClientConfig12 $config) {
        
        $this->payment = new Payment12($config);
        $this->vault = new Vault12($config);
        $this->report = new Report12($config);
        $this->amexWallet = new AmexWallet12($config);
    }

    public function payment() {
        return $this->payment;
    }

    public function vault() {
        
        return $this->vault;
    }

    public function report() {
        return $this->report;
    }
    
    public function amexWallet() {
        return $this->amexWallet;
    }

}
