<?php

namespace Paycorp\Payments12\Model;

use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Payment\Helper\Data as PaymentHelper;
use Magento\Framework\UrlInterface;
use Magento\Framework\App\ObjectManager;

use Paycorp\Payments12\Model\Method\Cc as PaymentMethod;

class ConfigProvider implements ConfigProviderInterface
{
    /**
     * @var \Magento\Framework\App\State
     */
    private $appState;

    /**
     * @var \Magento\Checkout\Helper\Data
     */
    private $checkoutHelper;

    /**
     * @var PaymentHelper
     */
    private $paymentHelper;

    /**
     * @var UrlInterface
     */
    private $urlBuilder;

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Checkout\Helper\Data $checkoutHelper
     * @param PaymentHelper $paymentHelper
     * @param UrlInterface $urlBuilder
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Checkout\Helper\Data $checkoutHelper,
        PaymentHelper $paymentHelper,
        UrlInterface $urlBuilder
    ) {
        $this->appState = $context->getAppState();
        $this->checkoutHelper = $checkoutHelper;
        $this->paymentHelper = $paymentHelper;
        $this->urlBuilder = $urlBuilder;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {
        try {
            /** @var PaymentMethod $method */
            $method = $this->paymentHelper->getMethodInstance(PaymentMethod::METHOD_CODE);
            if ($method->isAvailable()) {
                $redirectUrl = $method->getCheckoutRedirectUrl();
            } else {
                return [];
            }
        } catch (\Exception $e) {
            return [];
        }

        return [
            'payment' => [
                PaymentMethod::METHOD_CODE => [
                    'redirect_url' => $redirectUrl
                ],
            ],
        ];
    }
}
