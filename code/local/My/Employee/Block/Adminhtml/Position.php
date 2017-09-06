<?php

/**
 * Class My_Employee_Block_Adminhtml_Position
 */
class My_Employee_Block_Adminhtml_Position extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * My_Employee_Block_Adminhtml_Position constructor.
     */
    public function __construct()
    {
	     //where is the controller
	     $this->_controller = 'adminhtml_position';
	     $this->_blockGroup = 'employee';
	     //text in the admin header
	     $this->_headerText = 'Store Employers: Positions Management';
	     //value of the add button
	     $this->_addButtonLabel = 'Add Position';
	     parent::__construct();
     }
}