<?php
namespace Ves\CustomWidget\Model\Config\Source;
 
class Gender implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
        ['value' => 'male', 'label' => __('Male')],
        ['value' => 'female', 'label' => __('Female')]];
    }
}
