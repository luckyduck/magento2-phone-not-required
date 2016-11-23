<?php
namespace Codex\PhoneNotRequired\Plugin\Model\Customer;

class Address
{
    public function afterValidate(\Magento\Customer\Model\Address $subject, $result)
    {
        if (is_array($result)) {
            $blacklist = array(
                __('Please enter the phone number.')
            );
            return array_diff($result, $blacklist);
        }

        return $result;
    }
}