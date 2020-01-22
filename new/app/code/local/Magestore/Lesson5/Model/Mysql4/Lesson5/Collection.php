<?php

class Magestore_Lesson5_Model_Mysql4_Lesson5_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('lesson5/lesson5');
    }
}