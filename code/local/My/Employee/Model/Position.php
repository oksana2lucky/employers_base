<?php

/**
 * Class My_Employee_Model_Position
 */
class My_Employee_Model_Position extends Mage_Core_Model_Abstract
{
    /**
     * Native Magento construct function
     */
     public function _construct()
     {
         parent::_construct();
         $this->_init('employee/position');
     }

}