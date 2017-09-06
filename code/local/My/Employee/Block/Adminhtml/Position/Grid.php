<?php

/**
 * Class My_Employee_Block_Adminhtml_Position_Grid
 */
class My_Employee_Block_Adminhtml_Position_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    /**
     * My_Employee_Block_Adminhtml_Position_Grid constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('positionGrid');
        $this->setDefaultSort('title');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);
    }

    /**
     * Prepare employee collection
     *
     * @return mixed
     */
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('employee/position')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    /**
     * Prepare employee columns
     *
     * @return mixed
     */
    protected function _prepareColumns()
    {
        $this->addColumn('id', array(
         'header'    => 'ID',
         'align'     => 'right',
         'width'     => '50px',
         'index'     => 'id',
        ));

        $this->addColumn('title', array(
         'header'    => 'Position',
         'align'     => 'left',
         'index'     => 'title',
        ));

        return parent::_prepareColumns();
    }

    /**
     * Get row url
     *
     * @param $row
     * @return mixed
     */
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}