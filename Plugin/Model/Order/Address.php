<?php

namespace Codex\PhoneNotRequired\Plugin\Model\Order;

class Address
{
    public function afterValidateForCustomer( \Magento\Sales\Model\Order\Address\Validator $subject, $result )
    {
        if(is_array($result))
        {
            $blacklist = array(
                __('Please enter the phone number.')
            );
            return array_diff( $result, $blacklist );
        }

        return $result;
    }
}