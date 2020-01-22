<?php

class Magestore_Lesson5_Model_Mysql4_Lesson5 extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the lesson5_id refers to the key field in your database table.
        $this->_init('lesson5/lesson5', 'lesson5_id');
    }
}