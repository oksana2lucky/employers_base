<?php
class My_Employee_Block_Adminhtml_Index_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('workerGrid');
        $this->setDefaultSort('position_id');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('employee/worker')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('id', array(
         'header'    => 'ID',
         'align'     => 'right',
         'width'     => '50px',
         'index'     => 'id',
        ));

        $this->addColumn('first_name', array(
         'header'    => 'First Name',
         'align'     => 'left',
         'index'     => 'first_name',
        ));
		
		$this->addColumn('last_name', array(
         'header'    => 'Last Name',
         'align'     => 'left',
         'index'     => 'last_name',
        ));
		
		$this->addColumn('position', array(
         'header'    => 'Position',
         'align'     => 'left',
         'index'     => 'position',
        ));
		
		$this->addColumn('category', array(
         'header'    => 'Category',
         'align'     => 'left',
         'index'     => 'category_id',
		 'renderer'  => 'My_Employee_Block_Adminhtml_Index_Renderer_Category',
        ));
		

        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}