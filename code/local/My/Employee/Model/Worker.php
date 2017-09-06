<?php

/**
 * Class My_Employee_Model_Worker
 */
class My_Employee_Model_Worker extends Mage_Core_Model_Abstract
{
    /**
     * Native Magento construct function
     */
    public function _construct()
    {
        parent::_construct();
        $this->_init('employee/worker');
    }

}