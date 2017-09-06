<?php

/**
 * Class My_Employee_Block_Adminhtml_Index_Renderer_Category
 */
class My_Employee_Block_Adminhtml_Index_Renderer_Category extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    /**
     * Render category row
     *
     * @param Varien_Object $row
     * @return mixed
     */
	public function render(Varien_Object $row)
	{
		$value = $row->getData($this->getColumn()->getIndex());
		return Mage::getModel('catalog/category')->load($value)->getName();
	}
}