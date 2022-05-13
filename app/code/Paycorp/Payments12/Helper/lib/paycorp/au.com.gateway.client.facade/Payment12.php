<?php
require_once 'BaseFacade12.php';

final class Payment12 extends BaseFacade12 {

    public function __construct($config) {
        parent::__construct($config);
    }

    public function realTime($request) {
        $paymentRealTimeJsonHelper = new PaymentRealTimeJsonHelper12();
        return parent::process($request, Operation12::$PAYMENT_REAL_TIME, $paymentRealTimeJsonHelper);
    }

    public function init($request) {
        $paymentInitJsonHelper = new PaymentInitJsonHelper12();
        return parent::process($request, Operation12::$PAYMENT_INIT, $paymentInitJsonHelper);
    }
    
    public function create($request) {
        $paymentCreateJsonHelper = new PaymentCreateJsonHelper12();
        return parent::process($request, Operation12::$PAYMENT_CREATE, $paymentCreateJsonHelper);
    }

    public function complete($request) {
        $paymentCompleteJsonHelper = new PaymentCompleteJsonHelper12();
        return parent::process($request, Operation12::$PAYMENT_COMPLETE, $paymentCompleteJsonHelper);
    }
    
    public function batch($request){
           $paymentBatchJsonHelper = new PaymentBatchJsonHelper12();
           return parent::process($request, Operation12::$PAYMENT_BATCH, $paymentBatchJsonHelper);
    }

}
