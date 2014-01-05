<?php
class My_Employee_Model_Mysql4_Worker_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
     public function _construct()
     {
         parent::_construct();
         $this->_init('employee/worker');
     }
	 
	 public function _initSelect()
     {
         parent::_initSelect();
         $this->getSelect()
              ->joinInner(
	                array('p' => $this->getTable('employee/position')),
	                'main_table.position_id = p.id',
	                array('position' => 'title')
              );
			  
         return $this;
     } 
}