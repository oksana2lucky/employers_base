<?php

/**
 * Class My_Employee_Block_Adminhtml_Index
 */
class My_Employee_Block_Adminhtml_Index extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * My_Employee_Block_Adminhtml_Index constructor.
     */
    public function __construct()
    {
	     //where is the controller
	     $this->_controller = 'adminhtml_index';
	     $this->_blockGroup = 'employee';
	     //text in the admin header
	     $this->_headerText = 'Store Employers: Employers Management';
	     //value of the add button
	     $this->_addButtonLabel = 'Add Employee';
	     parent::__construct();
     }
}