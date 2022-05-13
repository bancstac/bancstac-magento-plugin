<?php
require_once 'BaseFacade24.php';

final class Vault24 extends BaseFacade24 {

    public function __construct($config) {
        parent::__construct($config);
    }

    public function storeCard($request) {
        $storeCardJsonHelper = new StoreCardJsonHelper24();
        return parent::process($request, Operation::$VAULT_STORE_CARD, $storeCardJsonHelper);
    }

    public function retrieveCard($request) {
        $retrieveCardJsonHelper = new RetrieveCardJsonHelper24();
        return parent::process($request, Operation::$VAULT_RETRIEVE_CARD, $retrieveCardJsonHelper);
    }

    public function updateCard($request) {
        $updateCardJsonHelper = new UpdateCardJsonHelper24();
        return parent::process($request, Operation::$VAULT_UPDATE_CARD, $updateCardJsonHelper);
    }

    public function verifyToken($request) {
        $verifyTokenJsonHelper = new VerifyTokenJsonHelper24();
        return parent::process($request, Operation::$VAULT_VERIFY_TOKEN, $verifyTokenJsonHelper);
    }

    public function deleteToken($request) {
        $deleteTokenJsonHelper = new DeleteTokenJsonHelper24();
        return parent::process($request, Operation::$VAULT_DELETE_TOKEN, $deleteTokenJsonHelper);
    }

}
