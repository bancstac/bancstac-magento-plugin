<?php
require_once 'BaseFacade12.php';

final class AmexWallet12 extends BaseFacade12 {
   
    public function __construct($config) {
        parent::__construct($config);
    }
    
    public function init($request) {
        $amexWalletInitJsonHelper = new AmexWalletInitJsonHelper12();
        return parent::process($request, Operation12::$AMEX_WALLET_INIT, $amexWalletInitJsonHelper);
    }

    public function complete($request) {
        $paymentCompleteJsonHelper = new PaymentCompleteJsonHelper12();
        return parent::process($request, Operation12::$AMEX_WALLET_COMPLETE, $paymentCompleteJsonHelper);
    }
    
}
