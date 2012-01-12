<?php

class Application_Model_Country
{


    protected $_Name;
    protected $_Continent;
    protected $_Region;
    protected $_SurfaceArea;
	protected $_Population;
	protected $_GNPOld;
	protected $_LocalName;
	protected $_GovernmentForm;
	protected $_Code2;
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
            throw new Exception('Invalid Country property');
        }
        $this->$method($value);
    }
 
    public function __get($name)
    {
        
        $method = 'get' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid Country property');
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

    public function getContinent() {
        return $this->_Continent;
    }

    public function getRegion() {
        return $this->_Region;
    }

    public function getSurfaceArea() {
        return $this->_SurfaceArea;
    }
	
	public function getPopulation() {
        return $this->_Population;
    }
	
	public function getGNPOld() {
        return $this->_GNPOld;
    }
	
	public function getLocalName() {
        return $this->_LocalName;
    }
	
	public function getGovernmentForm() {
        return $this->_GovernmentForm;
    }
	
	public function getCode2() {
        return $this->_Code2;
    }

    public function getID() {
        return $this->_ID;
    }

    public function setName($_Name) {
        $this->_Name = $_Name;
    }

    public function setContinent($_Continent) {
        $this->_Continent = $_Continent;
    }

    public function setRegion($_Region) {
        $this->_Region = $_Region;
    }

    public function setSurfaceArea($_SurfaceArea) {
        $this->_SurfaceArea = $_SurfaceArea;
    }
	
	public function setPopulation($_Population) {
        $this->_Population = $_Population;
    }
	
	public function setGNPOld($_GNPOld) {
        $this->_GNPOld = $_GNPOld;
    }
	
	public function setLocalName($_LocalName) {
        $this->_LocalName = $_LocalName;
    }
	
	public function setGovernmentForm($_GovernmentForm) {
        $this->_GovernmentForm = $_GovernmentForm;
    }
	
	public function setCode2($_Code2) {
        $this->_Code2 = $_Code2;
    }

    public function setID($_id) {
        $this->_ID = $_id;
    }
}

