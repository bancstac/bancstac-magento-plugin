define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'paycorp_cc12',
                component: 'Paycorp_Payments12/js/view/payment/method-renderer/paycorp-cc-method'
            }
        );
        /** Add view logic here if needed */
        return Component.extend({});
    }
);
