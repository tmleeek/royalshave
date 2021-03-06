<?php
/**
 * aheadWorks Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://ecommerce.aheadworks.com/AW-LICENSE.txt
 *
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This software is designed to work with Magento community edition and
 * its use on an edition other than specified is prohibited. aheadWorks does not
 * provide extension support in case of incorrect edition use.
 * =================================================================
 *
 * @category   AW
 * @package    AW_Sarp2
 * @version    2.1.1
 * @copyright  Copyright (c) 2010-2012 aheadWorks Co. (http://www.aheadworks.com)
 * @license    http://ecommerce.aheadworks.com/AW-LICENSE.txt
 */

class AW_Sarp2_Block_Adminhtml_Widget_Grid_Column_Renderer_Customer
    extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {
        $data = $this->_getValue($row);
        $value = $this->helper('core')->escapeHtml(
            is_null($data) ? $this->getColumn()->getDefault() : $data
        );
        if (is_null($value)) {
            return Mage::helper('aw_sarp2')->__('Guest');
        }
        return $value;
    }
}