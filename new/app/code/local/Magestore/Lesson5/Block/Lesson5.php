<?php
class Magestore_Lesson5_Block_Lesson5 extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getLesson5()     
     { 
        if (!$this->hasData('lesson5')) {
            $this->setData('lesson5', Mage::registry('lesson5'));
        }
        return $this->getData('lesson5');
        
    }
}