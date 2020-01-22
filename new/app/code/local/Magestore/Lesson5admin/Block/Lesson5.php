<?php
class Magestore_Lesson5admin_Block_Adminhtml_Lesson5 extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'lesson5admin';
    $this->_blockGroup = 'lesson5admin';
    $this->_headerText = Mage::helper('lesson5admin')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('lesson5admin')->__('Add Item');
    parent::__construct();
  }
}
