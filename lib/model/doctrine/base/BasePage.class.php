<?php

/**
 * BasePage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property text $body
 * @property boolean $menu_item
 * @property integer $num_of_hits
 * 
 * @method integer getId()          Returns the current record's "id" value
 * @method string  getTitle()       Returns the current record's "title" value
 * @method text    getBody()        Returns the current record's "body" value
 * @method boolean getMenuItem()    Returns the current record's "menu_item" value
 * @method integer getNumOfHits()   Returns the current record's "num_of_hits" value
 * @method Page    setId()          Sets the current record's "id" value
 * @method Page    setTitle()       Sets the current record's "title" value
 * @method Page    setBody()        Sets the current record's "body" value
 * @method Page    setMenuItem()    Sets the current record's "menu_item" value
 * @method Page    setNumOfHits()   Sets the current record's "num_of_hits" value
 * 
 * @package    realstate
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cms_pages');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('body', 'text', null, array(
             'type' => 'text',
             ));
        $this->hasColumn('menu_item', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('num_of_hits', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}