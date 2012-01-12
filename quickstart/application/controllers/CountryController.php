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


}

