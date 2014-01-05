<?php
class My_Employee_Block_Adminhtml_Index_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
   
   protected function _prepareForm()
   {
       $form = new Varien_Data_Form();
       $this->setForm($form);
       $fieldset = $form->addFieldset('worker_form',
                                       array('legend'=>'Information'));
									   
       $fieldset->addField('first_name', 'text',
		                       array(
		                          'label' => 'First Name',
		                          'class' => 'required-entry',
		                          'required' => true,
		                          'name' => 'first_name',
		                    ));
							
	   $fieldset->addField('last_name', 'text',
					   array(
						  'label' => 'Last Name',
						  'class' => 'required-entry',
						  'required' => true,
						  'name' => 'last_name',
					));
			
	    $positions = Mage::getModel('employee/position')->getCollection()->setOrder('title','asc');
		$positions_list = array();
		foreach($positions as $item) {
			$positions_list[] = array(
									'value' => $item->getData('id'),
									'label' => $item->getData('title'),
								);
		}
	    
	    $fieldset->addField('position_id', 'select', array(
	        'name'      => 'position_id',
	        'label'     => 'Position',
	        'required'  => true,
	        'values'    => $positions_list,
        ));
		
		$category = Mage::getModel('catalog/category');
		$tree = $category->getTreeModel();
		$tree->load();

		$ids = $tree->getCollection()->getAllIds();
		$categories = array();

		if ($ids){
			foreach ($ids as $id) {
				$cat = Mage::getModel('catalog/category');
				$cat->load($id);
				array_push($categories, $cat);
			} 
			$categories_list = array();
			$categories_list[] = array(
					'value' => '',
					'label' => 'Select category',
				);
			foreach($categories as $item) {
				$categories_list[] = array(
					'value' => $item->getId(),
					'label' => $item->getName(),
				);
			}
			
			$fieldset->addField('category_id', 'select', array(
				'name'      => 'category_id',
				'label'     => 'Catalog Category',
				'required'  => false,
				'values'    => $categories_list,
			));
		}


		
		 if ( Mage::registry('worker_data') )
		 {
		    $form->setValues(Mage::registry('worker_data')->getData());
		  }
		  return parent::_prepareForm();
		 }
}

