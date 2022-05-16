<?php

namespace Paycrop\Payments12\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

if (class_exists('\\Paycrop\\Payments12\\Model\\Config\\Source\\TransactionType', false)) {
    //return;
}

class TransactionType implements ArrayInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function toOptionArray()
	{
		return [
			['value' => 'AUTHORISATION', 'label' => __('Authorization')],
			['value' => 'PURCHASE', 'label' => __('Purchase')]
		];
	}
}
