<?php

/**
 * Currency filter form base class.
 *
 * @package    realstate
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCurrencyFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'    => new sfWidgetFormFilterInput(),
      'name_ar' => new sfWidgetFormFilterInput(),
      'code'    => new sfWidgetFormFilterInput(),
      'code_ar' => new sfWidgetFormFilterInput(),
      'symbol'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'    => new sfValidatorPass(array('required' => false)),
      'name_ar' => new sfValidatorPass(array('required' => false)),
      'code'    => new sfValidatorPass(array('required' => false)),
      'code_ar' => new sfValidatorPass(array('required' => false)),
      'symbol'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('currency_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Currency';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'name'    => 'Text',
      'name_ar' => 'Text',
      'code'    => 'Text',
      'code_ar' => 'Text',
      'symbol'  => 'Text',
    );
  }
}
