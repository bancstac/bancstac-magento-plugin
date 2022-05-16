<?php
 
class GatewayClient24 {

    private $payment;
    private $vault;
    private $report;
    private $amexWallet;

    public function __construct(ClientConfig24 $config) {
        
        $this->payment = new Payment24($config);
        $this->vault = new Vault24($config);
        $this->report = new Report24($config);
        $this->amexWallet = new AmexWallet24($config);
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
