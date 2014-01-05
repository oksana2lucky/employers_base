<?php
	class My_Employee_Model_Worker extends Mage_Core_Model_Abstract
	{
	     public function _construct()
	     {
	         parent::_construct();
	         $this->_init('employee/worker');
	     }
		 
	}