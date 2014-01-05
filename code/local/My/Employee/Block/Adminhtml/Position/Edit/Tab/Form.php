<?php
class My_Employee_Block_Adminhtml_Position_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
   protected function _prepareForm()
   {
       $form = new Varien_Data_Form();
       $this->setForm($form);
       $fieldset = $form->addFieldset('position_form',
                                       array('legend'=>'Information'));
       $fieldset->addField('title', 'text',
		                       array(
		                          'label' => 'Title',
		                          'class' => 'required-entry',
		                          'required' => true,
		                          'name' => 'title',
		                    ));
	 if ( Mage::registry('position_data') )
	 {
	    $form->setValues(Mage::registry('position_data')->getData());
	  }
	  return parent::_prepareForm();
	 }
}