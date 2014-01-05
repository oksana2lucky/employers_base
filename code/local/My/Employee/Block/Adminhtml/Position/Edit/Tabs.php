<?php
  class My_Employee_Block_Adminhtml_Position_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
  {
     public function __construct()
     {
          parent::__construct();
          $this->setId('position_tabs');
          $this->setDestElementId('edit_form');
          $this->setTitle('Position Information');
      }
      protected function _beforeToHtml()
      {
          $this->addTab('form_section', array(
		                   'label' => 'General',
		                   'title' => 'General',
		                   'content' => $this->getLayout()
						     ->createBlock('employee/adminhtml_position_edit_tab_form')
						     ->toHtml()
         				));
         return parent::_beforeToHtml();
    }
    }