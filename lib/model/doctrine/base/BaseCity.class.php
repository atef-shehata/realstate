<?php

/**
 * BaseCity
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $name_ar
 * @property integer $country_id
 * @property Country $Country
 * @property Doctrine_Collection $District
 * 
 * @method integer             getId()         Returns the current record's "id" value
 * @method string              getName()       Returns the current record's "name" value
 * @method string              getNameAr()     Returns the current record's "name_ar" value
 * @method integer             getCountryId()  Returns the current record's "country_id" value
 * @method Country             getCountry()    Returns the current record's "Country" value
 * @method Doctrine_Collection getDistrict()   Returns the current record's "District" collection
 * @method City                setId()         Sets the current record's "id" value
 * @method City                setName()       Sets the current record's "name" value
 * @method City                setNameAr()     Sets the current record's "name_ar" value
 * @method City                setCountryId()  Sets the current record's "country_id" value
 * @method City                setCountry()    Sets the current record's "Country" value
 * @method City                setDistrict()   Sets the current record's "District" collection
 * 
 * @package    realstate
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCity extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('city');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('name_ar', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('country_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Country', array(
             'local' => 'country_id',
             'foreign' => 'id'));

        $this->hasMany('District', array(
             'local' => 'id',
             'foreign' => 'city_id'));
    }
}