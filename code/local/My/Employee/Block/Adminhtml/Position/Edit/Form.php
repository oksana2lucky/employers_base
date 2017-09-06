<?php

/**
 * Class My_Employee_Block_Adminhtml_Position_Edit_Form
 */
class My_Employee_Block_Adminhtml_Position_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Add action to form
     *
     * @return mixed
     */
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form(
                array(
                  'id' => 'edit_form',
                  'action' => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))
                     ),
                  'method' => 'post',
                 )
              );
        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}