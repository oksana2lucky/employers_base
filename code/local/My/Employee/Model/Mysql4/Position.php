<?php
class My_Employee_Model_Mysql4_Position extends Mage_Core_Model_Mysql4_Abstract
{
     public function _construct()
     {
         $this->_init('employee/position', 'id');
     }
}