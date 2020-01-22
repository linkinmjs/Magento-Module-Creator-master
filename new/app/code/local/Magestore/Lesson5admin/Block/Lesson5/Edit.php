<?php

class Magestore_Lesson5admin_Block_Lesson5_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'lesson5admin';
        $this->_controller = 'lesson5admin';
        
        $this->_updateButton('save', 'label', Mage::helper('lesson5')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('lesson5')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('lesson5_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'lesson5_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'lesson5_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('lesson5_data') && Mage::registry('lesson5_data')->getId() ) {
            return Mage::helper('lesson5')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('lesson5_data')->getTitle()));
        } else {
            return Mage::helper('lesson5')->__('Add Item');
        }
    }
}
