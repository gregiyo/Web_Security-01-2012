<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
        
        /*
         * Change layout on runtime
         */
        //$this->_helper->layout->setLayout('quickstart');
        
        /*
         * Disabled layouts on runtime
         */
        //$this->_helper->layout->disableLayout();
    }

    public function indexAction()
    {
        // action body
    }


}

