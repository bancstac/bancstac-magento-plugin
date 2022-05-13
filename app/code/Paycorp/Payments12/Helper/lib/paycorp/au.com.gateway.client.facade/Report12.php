<?php

require_once 'BaseFacade12.php';

final class Report12 extends BaseFacade12 {
    
    public function __construct($config) {
        parent::__construct($config);
    }
    
    public function basic($request){
        $basicReportJsonHelper = new BasicReportJsonHelper12();
        return parent::process($request, Operation12::$REPORT_BASIC, $basicReportJsonHelper);
        
    }
    
    public function settlement($request){
        $settlementReportJsonHelper = new SettlementReportJsonHelper12();
        return parent::process($request, Operation12::$REPORT_SETTLEMENT, $settlementReportJsonHelper);
        
    }
    
}
