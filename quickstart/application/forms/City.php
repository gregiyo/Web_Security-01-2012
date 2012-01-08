<?php

class Application_Form_City extends Zend_Form
{

    public function init()
    {
        // Set the method for the display form to POST
        $this->setMethod('post');
 
        $this->addElement('text', 'Name', array(
            'label'      => 'City Name:',
            'required'   => true,
            'filters'    => array('StringTrim'),
        ));
 
        $this->addElement('text', 'CountryCode', array(
            'label'      => 'Country Code:',
            'required'   => true,
            'validators' => array(
                array('validator' => 'StringLength', 'options' => array('min'=>3, 'max' =>3))
            )
        ));
 
 
        $this->addElement('text', 'District', array(
            'label'      => 'District:',
            'required'   => true,
            'filters'    => array('StringTrim'),
        ));
 
 
        $this->addElement('text', 'Population', array(
            'label'      => 'Population:',
            'required'   => true,
            'validators' => array(
                array('validator' => 'Int')
            )
        ));
 
        // Add a captcha
        $this->addElement('captcha', 'captcha', array(
            'label'      => 'Please enter the 5 letters displayed below:',
            'required'   => true,
            'captcha'    => array(
                'captcha' => 'Figlet',
                'wordLen' => 5,
                'timeout' => 300
            )
        ));
 
        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Add a City',
        ));
 
        // And finally add some CSRF protection
        $this->addElement('hash', 'csrf', array(
            'ignore' => true,
        ));
    }


}

