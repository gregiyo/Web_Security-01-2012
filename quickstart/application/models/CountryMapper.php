<?php

class Application_Model_CountryMapper
{

    protected $_dbTable;
 
    public function setDbTable($dbTable)
    {
        if (is_string($dbTable)) {
            $dbTable = new $dbTable();
        }
        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception('Invalid table data gateway provided');
        }
        $this->_dbTable = $dbTable;
        return $this;
    }
 
    public function getDbTable()
    {
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_DbTable_Country');
        }
        return $this->_dbTable;
    }
 
    public function save(Application_Model_Country $country)
    {
        $data = array(
            'Name'   => $city->getName(),
            'Continent'=> $city->getContinent(),
            'Region'   => $city->getRegion(),
            'SurfaceArea' => $city->getSurfaceArea(),
			'Population' => $city->getPopulation(),
			'GNPOld' => $city->getGNPOld(),
			'LocalName' => $city->getLocalName(),
			'GovernmentForm' => $city->getGovernmentForm(),
			'Code2' => $city->getCode2()
			
        );
 
        if (null === ($id = $country->getCode())) {
            unset($data['Code']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('Code = ?' => $id));
        }
    }
 
    public function find($id)
    {
        $result = $this->getDbTable()->find($id);
        if (0 == count($result)) {
            return;
        }
        $row = $result->current();
		$country = new Application_Model_Country();
        $country->setCode($row->Code);
		
                  $country->setName($row->Name);
                  $country->setContinent($row->Continent);
                  $country->setRegion($row->Region);
                  $country->setSurfaceArea($row->SurfaceArea);
				  $country->setPopulation($row->Population);
				  $country->setGNPOld($row->GNPOld);
				  $country->setLocalName($row->LocalName);
				  $country->setGovernmentForm($row->GovernmentForm);
				  $country->setCode2($row->Code2);
				  
				  return $country;
    }
 
    public function fetchAll()
    {
	
        $resultSet = $this->getDbTable()->fetchAll();
        
        $countries   = array();
		
        foreach ($resultSet as $row) {
            $country = new Application_Model_Country();
$country->setCode($row->Code);
$country->setName($row->Name);
$country->setContinent($row->Continent);
$country->setRegion($row->Region);
$country->setSurfaceArea($row->SurfaceArea);
$country->setPopulation($row->Population);
$country->setGNPOld($row->GNPOld);
$country->setLocalName($row->LocalName);
$country->setGovernmentForm($row->GovernmentForm);
$country->setCode2($row->Code2);
$countries[] = $country;
        }
        return $countries;
		
    }

}

