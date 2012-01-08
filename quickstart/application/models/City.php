<?php

class Application_Model_City
{

    protected $_Name;
    protected $_CountryCode;
    protected $_District;
    protected $_Population;
    protected $_ID;
 
    public function __construct(array $options = null)
    {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }
 
    public function __set($name, $value)
    {
        $method = 'set' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid City property');
        }
        $this->$method($value);
    }
 
    public function __get($name)
    {
        
        $method = 'get' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid City property');
        }
        return $this->$method();
    }
 
    public function setOptions(array $options)
    {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }
 
    public function getName() {
        return $this->_Name;
    }

    public function getCountryCode() {
        return $this->_CountryCode;
    }

    public function getDistrict() {
        return $this->_District;
    }

    public function getPopulation() {
        return $this->_Population;
    }

    public function getID() {
        return $this->_ID;
    }

    public function setName($_Name) {
        $this->_Name = $_Name;
    }

    public function setCountryCode($_CountryCode) {
        $this->_CountryCode = $_CountryCode;
    }

    public function setDistrict($_District) {
        $this->_District = $_District;
    }

    public function setPopulation($_Population) {
        $this->_Population = $_Population;
    }

    public function setID($_id) {
        $this->_ID = $_id;
    }


}

