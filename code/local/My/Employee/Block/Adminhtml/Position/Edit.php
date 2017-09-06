<?php

/**
 * Class My_Employee_Block_Adminhtml_Position_Edit
 */
class My_Employee_Block_Adminhtml_Position_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * My_Employee_Block_Adminhtml_Position_Edit constructor.
     */
   public function __construct()
   {
        parent::__construct();
        $this->_objectId = 'id';
 
        $this->_blockGroup = 'employee';
 
        $this->_controller = 'adminhtml_position';
 
        $this->_updateButton('save', 'label', 'Save Position');
        $this->_updateButton('delete', 'label', 'Delete Position');
    }

    /**
     * Get header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if( Mage::registry('position_data') && Mage::registry('position_data')->getId())
         {
              return 'Edit '.$this->htmlEscape(
              Mage::registry('position_data')->getTitle()).'<br />';
         }
         else
         {
             return 'Add Position';
         }
    }
}