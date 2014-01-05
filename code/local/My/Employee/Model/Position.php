<?php
	class My_Employee_Model_Position extends Mage_Core_Model_Abstract
	{
	     public function _construct()
	     {
	         parent::_construct();
	         $this->_init('employee/position');
	     }
		 
	}