<?php

class Magestore_Lesson5admin_Block_Lesson5_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('lesson5admin_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('lesson5')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('lesson5')->__('Item Information'),
          'title'     => Mage::helper('lesson5')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('lesson5/adminhtml_lesson5_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}
