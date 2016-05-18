<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 3/13/2016
 * Time: 1:57 PM
 */
class Mdg_Giftregistry_Block_Adminhtml_Registries extends Mage_Adminhtml_Block_Widget_Grid_Container{

    public function __construct(){
        $this->_controller = 'adminhtml_registries';
        $this->_blockGroup = 'mdg_giftregistry';
        $this->_headerText = Mage::helper('mdg_giftregistry')->__('Gift Registry Manager');
        parent::__construct();
    }
}