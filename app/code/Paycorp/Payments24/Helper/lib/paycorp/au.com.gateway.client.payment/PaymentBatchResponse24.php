<?php

class PaymentBatchResponse24 {
    
    private $batchReference;

    public function getBatchReference() {
        return $this->batchReference;
    }

    public function setBatchReference($batchReference) {
        $this->batchReference = $batchReference;
    }
}
