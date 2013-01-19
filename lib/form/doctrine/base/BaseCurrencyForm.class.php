<?php

/**
 * Currency form base class.
 *
 * @method Currency getObject() Returns the current form's model object
 *
 * @package    realstate
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCurrencyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'name'    => new sfWidgetFormInputText(),
      'name_ar' => new sfWidgetFormInputText(),
      'code'    => new sfWidgetFormInputText(),
      'code_ar' => new sfWidgetFormInputText(),
      'symbol'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'name_ar' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'code'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'code_ar' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'symbol'  => new sfValidatorString(array('max_length' => 3, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('currency[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Currency';
  }

}
