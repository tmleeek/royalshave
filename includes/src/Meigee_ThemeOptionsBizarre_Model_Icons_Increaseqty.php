<?php
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptionsBizarre_Model_Icons_Increaseqty
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'fa-plus-square-o', 'label'=>Mage::helper('ThemeOptionsBizarre')->__('fa-plus-square-o')),
            array('value'=>'fa-angle-right', 'label'=>Mage::helper('ThemeOptionsBizarre')->__('fa-angle-right')),
            array('value'=>'fa-arrow-right', 'label'=>Mage::helper('ThemeOptionsBizarre')->__('fa-arrow-right')),
            array('value'=>'fa-long-arrow-right', 'label'=>Mage::helper('ThemeOptionsBizarre')->__('fa-long-arrow-right')),
            array('value'=>'fa-step-forward', 'label'=>Mage::helper('ThemeOptionsBizarre')->__('fa-step-forward')),
            array('value'=>'fa-angle-double-right', 'label'=>Mage::helper('ThemeOptionsBizarre')->__('fa-angle-double-right'))
        );
    }

}