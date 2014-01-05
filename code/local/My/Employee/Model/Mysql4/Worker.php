<?php
class My_Employee_Model_Mysql4_Worker extends Mage_Core_Model_Mysql4_Abstract
{
     public function _construct()
     {
         $this->_init('employee/worker', 'id');
     }
}