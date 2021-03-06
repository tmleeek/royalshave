<?php

/*
 * @copyright  Copyright (c) 2013 by  ESS-UA.
 */

class Ess_M2ePro_Block_Adminhtml_Common_Amazon_Listing extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    // ####################################

    public function __construct()
    {
        parent::__construct();

        // Initialization block
        //------------------------------
        $this->setId('amazonListing');
        $this->_blockGroup = 'M2ePro';
        $this->_controller = 'adminhtml_common_amazon_listing';
        //------------------------------

        // Set header text
        //------------------------------
        $this->_headerText = '';
        //------------------------------

        // Set buttons actions
        //------------------------------
        $this->removeButton('back');
        $this->removeButton('reset');
        $this->removeButton('delete');
        $this->removeButton('add');
        $this->removeButton('save');
        $this->removeButton('edit');
        //------------------------------

        //------------------------------

        $backUrl = Mage::helper('M2ePro')->makeBackUrlParam(
            '*/adminhtml_common_listing/index',
            array(
                'tab' => Ess_M2ePro_Block_Adminhtml_Common_Component_Abstract::TAB_ID_AMAZON
            )
        );

        //------------------------------
        $url = $this->getUrl(
            '*/adminhtml_common_log/listing',
            array(
                'channel' => Ess_M2ePro_Block_Adminhtml_Common_Log_Tabs::TAB_ID_AMAZON
            )
        );
        $this->_addButton('view_log', array(
            'label'     => Mage::helper('M2ePro')->__('View Log'),
            'onclick'   => 'window.open(\'' . $url . '\')',
            'class'     => 'button_link'
        ));
        //------------------------------

        //------------------------------
        $url = $this->getUrl(
            '*/adminhtml_common_amazon_listing/search',
            array(
                'back' => $backUrl
            )
        );
        $this->_addButton('search_amazon_products', array(
            'label'     => Mage::helper('M2ePro')->__('Search'),
            'onclick'   => 'setLocation(\'' . $url . '\')',
            'class'     => 'button_link search'
        ));
        //------------------------------

        //------------------------------
        $url = $this->getUrl('*/adminhtml_common_listing_create/index', array(
            'step' => '1',
            'clear' => 'yes',
            'component' => Ess_M2ePro_Helper_Component_Amazon::NICK
        ));
        $this->_addButton('add', array(
            'label'     => Mage::helper('M2ePro')->__('Add Listing'),
            'onclick'   => 'setLocation(\'' . $url . '\')',
            'class'     => 'add'
        ));
        //------------------------------
    }

    // ####################################

    public function getTemplatesButtonJavascript()
    {
        $dropDownBlock = $this->getLayout()->createBlock('M2ePro/adminhtml_widget_button_dropDown', '', array(
            'target_css_class' => 'amazon-templates-drop-down',
            'items' => $this->getTemplatesButtonDropDownItems()
        ));

        return $dropDownBlock->toHtml();
    }

    protected function getTemplatesButtonDropDownItems()
    {
        $items = array();

        $filter = base64_encode('component_mode=' . Ess_M2ePro_Helper_Component_Amazon::NICK);

        //------------------------------
        $url = $this->getUrl('*/adminhtml_common_template_sellingFormat/index', array('filter' => $filter));
        $items[] = array(
            'url' => $url,
            'label' => Mage::helper('M2ePro')->__('Selling Format Policies'),
            'target' => '_blank'
        );
        //------------------------------

        //------------------------------
        $url = $this->getUrl('*/adminhtml_common_template_synchronization/index', array('filter' => $filter));
        $items[] = array(
            'url' => $url,
            'label' => Mage::helper('M2ePro')->__('Synchronization Policies'),
            'target' => '_blank'
        );
        //------------------------------

        return $items;
    }

    // ####################################
}