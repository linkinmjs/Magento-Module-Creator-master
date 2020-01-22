<?php
class Magestore_Lesson5_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/lesson5?id=15 
    	 *  or
    	 * http://site.com/lesson5/id/15 	
    	 */
    	/* 
		$lesson5_id = $this->getRequest()->getParam('id');

  		if($lesson5_id != null && $lesson5_id != '')	{
			$lesson5 = Mage::getModel('lesson5/lesson5')->load($lesson5_id)->getData();
		} else {
			$lesson5 = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($lesson5 == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$lesson5Table = $resource->getTableName('lesson5');
			
			$select = $read->select()
			   ->from($lesson5Table,array('lesson5_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$lesson5 = $read->fetchRow($select);
		}
		Mage::register('lesson5', $lesson5);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}