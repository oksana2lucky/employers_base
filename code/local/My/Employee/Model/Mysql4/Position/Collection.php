<?php
class My_Employee_Model_Mysql4_Position_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
     public function _construct()
     {
         parent::_construct();
         $this->_init('employee/position');
     }
	 
	 public function getFullItems() {
		 	
			 $this->getSelect()
			 		->distinct(true);
			  return $this;
			  
		 }
}