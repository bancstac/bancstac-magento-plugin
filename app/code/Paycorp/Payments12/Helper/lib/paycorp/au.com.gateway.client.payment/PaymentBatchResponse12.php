<?php

class PaymentBatchResponse12 {
    
    private $batchReference;

    public function getBatchReference() {
        return $this->batchReference;
    }

    public function setBatchReference($batchReference) {
        $this->batchReference = $batchReference;
    }
}
