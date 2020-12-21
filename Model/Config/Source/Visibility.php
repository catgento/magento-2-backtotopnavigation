<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Catgento\BackToTopNavigation\Model\Config\Source;

class Visibility implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [
            ['value' => 'desktop', 'label' => __('Desktop')],
            ['value' => 'mobile', 'label' => __('Mobile')],
            ['value' => 'both', 'label' => __('Both')]
        ];
    }

    public function toArray()
    {
        return ['desktop' => __('Desktop'), 'mobile' => __('Mobile'), 'both' => __('Both')];
    }
}
