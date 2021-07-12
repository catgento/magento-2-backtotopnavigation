<?php
/**
 *
 * @package     Brildor_Theme
 * @author      Pau Iranzo
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        https://catgento.com
 */

namespace Catgento\BackToTopNavigation\Block;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\Template;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class BackToTopNavigation extends Template implements \Magento\Widget\Block\BlockInterface
{
    /** @var ScopeConfigInterface  */
    private $scopeConfig;

    /**
     * Whatsapp constructor.
     * @param StoreManagerInterface $storeManager
     * @param ScopeConfigInterface $scopeConfig
     * @param Template\Context $context
     */
    public function __construct(
        StoreManagerInterface $storeManager,
        ScopeConfigInterface $scopeConfig,
        Template\Context $context
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->_storeManager = $storeManager;

        parent::__construct($context);
    }

    /**
     * Returns whatsapp number
     * @param $field
     * @return mixed
     */
    public function getConfigValue($field)
    {
        return $this->scopeConfig->getValue(
            $field,
            ScopeInterface::SCOPE_STORE,
            $this->getStoreId()
        );
    }

    /**
     * @return string
     */
    public function getButtonText()
    {
        return $this->getConfigValue('design/back_to_top_navigation/button_text');
    }

    /**
     * Returns the styles for the back to top button
     *
     * @return string
     */
    public function getStyle()
    {
        $style = '';
        $background = $this->getConfigValue('design/back_to_top_navigation/background_color');
        $textColor = $this->getConfigValue('design/back_to_top_navigation/text_color');
        $topOffset = $this->getConfigValue('design/back_to_top_navigation/top_offset');

        if ($background) {
            $style .= 'background-color: ' . $background . ';';
        }

        if ($textColor) {
            $style .= 'color: ' . $textColor . ';';
        }

        if ($topOffset) {
            $style .= 'top: ' . $topOffset . 'px;';
        }

        return $style;
    }
}
