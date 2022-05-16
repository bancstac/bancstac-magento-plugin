<?php
require_once 'BaseFacade24.php';

final class AmexWallet24 extends BaseFacade24 {
   
    public function __construct($config) {
        parent::__construct($config);
    }
    
    public function init($request) {
        $amexWalletInitJsonHelper = new AmexWalletInitJsonHelper24();
        return parent::process($request, Operation24::$AMEX_WALLET_INIT, $amexWalletInitJsonHelper);
    }

    public function complete($request) {
        $paymentCompleteJsonHelper = new PaymentCompleteJsonHelper24();
        return parent::process($request, Operation24::$AMEX_WALLET_COMPLETE, $paymentCompleteJsonHelper);
    }
    
}
