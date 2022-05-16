<?php
require_once 'BaseFacade12.php';

final class Vault12 extends BaseFacade12 {

    public function __construct($config) {
        parent::__construct($config);
    }

    public function storeCard($request) {
        $storeCardJsonHelper = new StoreCardJsonHelper12();
        return parent::process($request, Operation::$VAULT_STORE_CARD, $storeCardJsonHelper);
    }

    public function retrieveCard($request) {
        $retrieveCardJsonHelper = new RetrieveCardJsonHelper12();
        return parent::process($request, Operation::$VAULT_RETRIEVE_CARD, $retrieveCardJsonHelper);
    }

    public function updateCard($request) {
        $updateCardJsonHelper = new UpdateCardJsonHelper12();
        return parent::process($request, Operation::$VAULT_UPDATE_CARD, $updateCardJsonHelper);
    }

    public function verifyToken($request) {
        $verifyTokenJsonHelper = new VerifyTokenJsonHelper12();
        return parent::process($request, Operation::$VAULT_VERIFY_TOKEN, $verifyTokenJsonHelper);
    }

    public function deleteToken($request) {
        $deleteTokenJsonHelper = new DeleteTokenJsonHelper12();
        return parent::process($request, Operation::$VAULT_DELETE_TOKEN, $deleteTokenJsonHelper);
    }

}
