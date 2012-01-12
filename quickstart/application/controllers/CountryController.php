<?php

class CountryController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $country = new Application_Model_CountryMapper();
		$this->view->countries = $country->fetchAll();
    }
<<<<<<< HEAD
	
	public function findAction()
    {
	
		$request = $this->getRequest();
		$form = new Application_Form_Country();
		$country = NULL;
		if ($this->getRequest()->isPost()) {
			if ($form->isValid($request->getPost())) {
				$Country = new Application_Model_Country($form->getValues());
				$_Country = new Application_Model_CountryMapper();
				
				$country = $_Country->find($Country->Code);
			}		
		}
		
        $this->view->form = $form;
		$this->view->country = $country;
    }
	
=======
>>>>>>> b85407df4e9c9e496794484206a20a1d61e90058


}

