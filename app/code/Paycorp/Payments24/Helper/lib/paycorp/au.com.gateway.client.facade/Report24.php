<?php

require_once 'BaseFacade24.php';

final class Report24 extends BaseFacade24 {
    
    public function __construct($config) {
        parent::__construct($config);
    }
    
    public function basic($request){
        $basicReportJsonHelper = new BasicReportJsonHelper24();
        return parent::process($request, Operation24::$REPORT_BASIC, $basicReportJsonHelper);
        
    }
    
    public function settlement($request){
        $settlementReportJsonHelper = new SettlementReportJsonHelper24();
        return parent::process($request, Operation24::$REPORT_SETTLEMENT, $settlementReportJsonHelper);
        
    }
    
}
