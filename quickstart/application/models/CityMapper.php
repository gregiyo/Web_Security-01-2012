<?php

class Application_Model_CityMapper
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
            $this->setDbTable('Application_Model_DbTable_City');
        }
        return $this->_dbTable;
    }
 
    public function save(Application_Model_City $city)
    {
        $data = array(
            'Name'   => $city->getName(),
            'CountryCode'=> $city->getCountryCode(),
            'District'   => $city->getDistrict(),
            'Population' => $city->getPopulation(),
        );
 
        if (null === ($id = $city->getID())) {
            unset($data['ID']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('ID = ?' => $id));
        }
    }
 /*
    public function find($id, Application_Model_City $city)
    {
        $result = $this->getDbTable()->find($id);
        if (0 == count($result)) {
            return;
        }
        $row = $result->current();
        $city->setID($row->ID)
                  ->setName($row->Name)
                  ->setCountryCode($row->CountryCode)
                  ->setDistrict($row->District)
                  ->setPopulation($row->Population);
    }
 */
    public function fetchAll()
    {
        $resultSet = $this->getDbTable()->fetchAll();
        
        $cities   = array();
        foreach ($resultSet as $row) {
            $city = new Application_Model_City();
            $city->setID($row->ID);
                  $city->setName($row->Name);
                  $city->setCountryCode($row->CountryCode);
                  $city->setDistrict($row->District);
                  $city->setPopulation($row->Population);
            $cities[] = $city;
        }
        return $cities;
    }
}

