<?php

class Magestore_Lesson5admin_Block_Lesson5_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('lesson5_form', array('legend'=>Mage::helper('lesson5')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('lesson5')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('lesson5')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('lesson5')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('lesson5')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('lesson5')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('lesson5')->__('Content'),
          'title'     => Mage::helper('lesson5')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getLesson5Data() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getLesson5Data());
          Mage::getSingleton('adminhtml/session')->setLesson5Data(null);
      } elseif ( Mage::registry('lesson5_data') ) {
          $form->setValues(Mage::registry('lesson5_data')->getData());
      }
      return parent::_prepareForm();
  }
}