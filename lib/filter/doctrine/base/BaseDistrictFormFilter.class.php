<?php

/**
 * District filter form base class.
 *
 * @package    realstate
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDistrictFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name_ar' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'city_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'name'    => new sfValidatorPass(array('required' => false)),
      'name_ar' => new sfValidatorPass(array('required' => false)),
      'city_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('City'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('district_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'District';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'name'    => 'Text',
      'name_ar' => 'Text',
      'city_id' => 'ForeignKey',
    );
  }
}
