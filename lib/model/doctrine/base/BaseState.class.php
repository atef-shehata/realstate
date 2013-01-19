<?php

/**
 * BaseState
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property string $title_ar
 * @property text $summary
 * @property integer $price
 * @property integer $currency_id
 * @property timestamp $start_time
 * @property timestamp $end_time
 * @property boolean $published
 * @property string $keywords
 * @property string $video
 * @property text $images
 * @property integer $user_id
 * @property integer $category_id
 * @property enum $payment_options
 * @property float $area
 * @property string $website
 * @property enum $sale_type
 * @property Currency $Currency
 * @property sfGuardUser $User
 * @property Category $Category
 * @property Doctrine_Collection $StateSlug
 * 
 * @method integer             getId()              Returns the current record's "id" value
 * @method string              getTitle()           Returns the current record's "title" value
 * @method string              getTitleAr()         Returns the current record's "title_ar" value
 * @method text                getSummary()         Returns the current record's "summary" value
 * @method integer             getPrice()           Returns the current record's "price" value
 * @method integer             getCurrencyId()      Returns the current record's "currency_id" value
 * @method timestamp           getStartTime()       Returns the current record's "start_time" value
 * @method timestamp           getEndTime()         Returns the current record's "end_time" value
 * @method boolean             getPublished()       Returns the current record's "published" value
 * @method string              getKeywords()        Returns the current record's "keywords" value
 * @method string              getVideo()           Returns the current record's "video" value
 * @method text                getImages()          Returns the current record's "images" value
 * @method integer             getUserId()          Returns the current record's "user_id" value
 * @method integer             getCategoryId()      Returns the current record's "category_id" value
 * @method enum                getPaymentOptions()  Returns the current record's "payment_options" value
 * @method float               getArea()            Returns the current record's "area" value
 * @method string              getWebsite()         Returns the current record's "website" value
 * @method enum                getSaleType()        Returns the current record's "sale_type" value
 * @method Currency            getCurrency()        Returns the current record's "Currency" value
 * @method sfGuardUser         getUser()            Returns the current record's "User" value
 * @method Category            getCategory()        Returns the current record's "Category" value
 * @method Doctrine_Collection getStateSlug()       Returns the current record's "StateSlug" collection
 * @method State               setId()              Sets the current record's "id" value
 * @method State               setTitle()           Sets the current record's "title" value
 * @method State               setTitleAr()         Sets the current record's "title_ar" value
 * @method State               setSummary()         Sets the current record's "summary" value
 * @method State               setPrice()           Sets the current record's "price" value
 * @method State               setCurrencyId()      Sets the current record's "currency_id" value
 * @method State               setStartTime()       Sets the current record's "start_time" value
 * @method State               setEndTime()         Sets the current record's "end_time" value
 * @method State               setPublished()       Sets the current record's "published" value
 * @method State               setKeywords()        Sets the current record's "keywords" value
 * @method State               setVideo()           Sets the current record's "video" value
 * @method State               setImages()          Sets the current record's "images" value
 * @method State               setUserId()          Sets the current record's "user_id" value
 * @method State               setCategoryId()      Sets the current record's "category_id" value
 * @method State               setPaymentOptions()  Sets the current record's "payment_options" value
 * @method State               setArea()            Sets the current record's "area" value
 * @method State               setWebsite()         Sets the current record's "website" value
 * @method State               setSaleType()        Sets the current record's "sale_type" value
 * @method State               setCurrency()        Sets the current record's "Currency" value
 * @method State               setUser()            Sets the current record's "User" value
 * @method State               setCategory()        Sets the current record's "Category" value
 * @method State               setStateSlug()       Sets the current record's "StateSlug" collection
 * 
 * @package    realstate
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseState extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('state');
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
        $this->hasColumn('title_ar', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('summary', 'text', null, array(
             'type' => 'text',
             ));
        $this->hasColumn('price', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('currency_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('start_time', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('end_time', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('published', 'boolean', null, array(
             'type' => 'boolean',
             'default' => '0',
             ));
        $this->hasColumn('keywords', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('video', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('images', 'text', null, array(
             'type' => 'text',
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('payment_options', 'enum', 1, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => '1',
              1 => '2',
             ),
             'length' => 1,
             ));
        $this->hasColumn('area', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('website', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('sale_type', 'enum', 1, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => '1',
              1 => '2',
             ),
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Currency', array(
             'local' => 'currency_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $this->hasOne('Category', array(
             'local' => 'category_id',
             'foreign' => 'id'));

        $this->hasMany('StateSlug', array(
             'local' => 'id',
             'foreign' => 'state_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}