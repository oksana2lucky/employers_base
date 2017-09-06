<?php

/**
 * Class My_Employee_Adminhtml_PositionController
 */
class My_Employee_Adminhtml_PositionController extends Mage_Adminhtml_Controller_Action
{
    /**
     * Action initialization
     *
     * @return $this
     */
    protected function _initAction()
    {
        $this->loadLayout()->_setActiveMenu('employee/position')
                ->_addBreadcrumb('Employee Manager','Employee Manager');
        return $this;
    }

    /**
     * Index action
     */
    public function indexAction()
    {	
         $this->_initAction();
         $this->renderLayout();
    }

    /**
     * Edit action
     */
	public function editAction()
    {
         $thisId = $this->getRequest()->getParam('id');
         $thisModel = Mage::getModel('employee/position')->load($thisId);
         if ($thisModel->getId() || $thisId == 0)
         {
             Mage::register('position_data', $thisModel);
             $this->loadLayout();
             $this->_setActiveMenu('employee/position');
             $this->_addBreadcrumb('Employee Manager', 'Employee Manager');
             $this->_addBreadcrumb('Employee Description', 'Employee Description');
             $this->getLayout()->getBlock('head')
                  ->setCanLoadExtJs(true);
             $this->_addContent($this->getLayout()
                  ->createBlock('employee/adminhtml_position_edit'))
                  ->_addLeft($this->getLayout()
                  ->createBlock('employee/adminhtml_position_edit_tabs')
              );
             $this->renderLayout();
         }
         else
         {
             Mage::getSingleton('adminhtml/session')
                   ->addError('Test does not exist');
             $this->_redirect('*/*/');
          }
   }

    /**
     * New action
     */
    public function newAction()
    {
        $this->_forward('edit');
    }

    /**
     * Save action
     */
    public function saveAction()
    {
         if ($this->getRequest()->getPost())
         {
           try {
                 $postData = $this->getRequest()->getPost();
                 $thisModel = Mage::getModel('employee/position');
               if( $this->getRequest()->getParam('id') <= 0 )
                  $thisModel->setCreatedTime(
                     Mage::getSingleton('core/date')
                            ->gmtDate()
                    );
                  $thisModel
                    ->addData($postData)
                    ->setUpdateTime(
                             Mage::getSingleton('core/date')
                             ->gmtDate())
                    ->setId($this->getRequest()->getParam('id'))
                    ->save();
                 Mage::getSingleton('adminhtml/session')
                               ->addSuccess('successfully saved');
                 Mage::getSingleton('adminhtml/session')
                                ->settestData(false);
                 $this->_redirect('*/*/');
                return;
          } catch (Exception $e){
                Mage::getSingleton('adminhtml/session')
                                  ->addError($e->getMessage());
                Mage::getSingleton('adminhtml/session')
                 ->settestData($this->getRequest()
                                    ->getPost()
                );
                $this->_redirect('*/*/edit',
                            array('id' => $this->getRequest()
                                                ->getParam('id')));
                return;
                }
              }
              $this->_redirect('*/*/');
    }

    /**
     * Delete action
     */
    public function deleteAction()
    {
          if($this->getRequest()->getParam('id') > 0)
          {
            try
            {
                $thisModel = Mage::getModel('employee/position');
                $thisModel->setId($this->getRequest()
                                    ->getParam('id'))
                          ->delete();
                Mage::getSingleton('adminhtml/session')
                           ->addSuccess('successfully deleted');
                $this->_redirect('*/*/');
             }
             catch (Exception $e)
              {
                       Mage::getSingleton('adminhtml/session')
                            ->addError($e->getMessage());
                       $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
              }
         }
        $this->_redirect('*/*/');
    }
}