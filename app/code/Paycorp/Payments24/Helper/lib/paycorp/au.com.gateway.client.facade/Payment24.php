<?php
require_once 'BaseFacade24.php';

final class Payment24 extends BaseFacade24 {

    public function __construct($config) {
        parent::__construct($config);
    }

    public function realTime($request) {
        $paymentRealTimeJsonHelper = new PaymentRealTimeJsonHelper24();
        return parent::process($request, Operation24::$PAYMENT_REAL_TIME, $paymentRealTimeJsonHelper);
    }

    public function init($request) {
        $paymentInitJsonHelper = new PaymentInitJsonHelper24();
        return parent::process($request, Operation24::$PAYMENT_INIT, $paymentInitJsonHelper);
    }
    
    public function create($request) {
        $paymentCreateJsonHelper = new PaymentCreateJsonHelper24();
        return parent::process($request, Operation24::$PAYMENT_CREATE, $paymentCreateJsonHelper);
    }

    public function complete($request) {
        $paymentCompleteJsonHelper = new PaymentCompleteJsonHelper24();
        return parent::process($request, Operation24::$PAYMENT_COMPLETE, $paymentCompleteJsonHelper);
    }
    
    public function batch($request){
           $paymentBatchJsonHelper = new PaymentBatchJsonHelper24();
           return parent::process($request, Operation24::$PAYMENT_BATCH, $paymentBatchJsonHelper);
    }

}
