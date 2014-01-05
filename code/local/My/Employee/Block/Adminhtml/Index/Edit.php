<?php
class My_Employee_Block_Adminhtml_Index_Edit extends Mage_Adminhtml_Block_Widget_Form_Container{
  
   public function __construct()
   {
        parent::__construct();
        $this->_objectId = 'id';
 
        $this->_blockGroup = 'employee';
 
        $this->_controller = 'adminhtml_index';
 
        $this->_updateButton('save', 'label', 'Save Employee');
        $this->_updateButton('delete', 'label', 'Delete Employee');

    }
 
    public function getHeaderText()
    {
        if( Mage::registry('worker_data') && Mage::registry('worker_data')->getId())
         {
              return 'Edit '.$this->htmlEscape(
              Mage::registry('worker_data')->getLastName()).'<br />';
         }
         else
         {
             return 'Add Employee';
         }
    }
}