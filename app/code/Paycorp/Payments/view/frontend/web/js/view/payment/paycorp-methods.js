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
                type: 'paycorp_cc',
                component: 'Paycorp_Payments/js/view/payment/method-renderer/paycorp-cc-method'
            }
        );
        /** Add view logic here if needed */
        return Component.extend({});
    }
);
