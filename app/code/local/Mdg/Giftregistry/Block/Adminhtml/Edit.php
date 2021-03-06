<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 3/13/2016
 * Time: 7:22 PM
 */
class Mdg_Giftregistry_Block_Adminhtml_Registries_Edit extends
    Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct(){
        parent::__construct();
        $this->_objectId = 'id';
        $this->_blockGroup = 'registries';
        $this->_controller = 'adminhtml_giftregistry';
        $this->_mode = 'edit';
        $this->_updateButton('save', 'label', Mage::helper('mdg_giftregistry')->__('Save Registry'));
        $this->_updateButton('delete', 'label', Mage::helper('mdg_giftregistry')->__('Delete Registry'));
    }
    public function getHeaderText(){
        if(Mage::registry('registries_data') && Mage::registry('registries_data')->getId())
            return Mage::helper('mdg_giftregistry')->__("Edit Registry '%s'", $this->htmlEscape(Mage::registry('registries_data')->getTitle()));
        return Mage::helper('mdg_giftregistry')->__('Add Registry');
    }
}