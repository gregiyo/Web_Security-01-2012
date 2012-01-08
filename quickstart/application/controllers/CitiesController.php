<?php

class CitiesController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $City = new Application_Model_CityMapper();
        $this->view->cities = $City->fetchAll();
    }

    public function addAction()
    {
        $request = $this->getRequest();
        $form    = new Application_Form_City();
 
        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {
                $City = new Application_Model_City($form->getValues());
                $_City  = new Application_Model_CityMapper();
                $_City->save($City);
                return $this->_helper->redirector('index');
            }
        }
 
        $this->view->form = $form;
    }


}



