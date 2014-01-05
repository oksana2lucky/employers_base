<?php
  class My_Employee_Block_Adminhtml_Index_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
  {
     public function __construct()
     {
          parent::__construct();
          $this->setId('worker_tabs');
          $this->setDestElementId('edit_form');
          $this->setTitle('Employee Information');
      }
      protected function _beforeToHtml()
      {
          $this->addTab('form_section', array(
		                   'label' => 'General',
		                   'title' => 'General',
		                   'content' => $this->getLayout()
						     ->createBlock('employee/adminhtml_index_edit_tab_form')
						     ->toHtml()
         				));
         return parent::_beforeToHtml();
    }
    }