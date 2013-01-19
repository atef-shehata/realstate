<?php

/**
 * State form base class.
 *
 * @method State getObject() Returns the current form's model object
 *
 * @package    realstate
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseStateForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'title'           => new sfWidgetFormInputText(),
      'title_ar'        => new sfWidgetFormInputText(),
      'summary'         => new sfWidgetFormInputText(),
      'price'           => new sfWidgetFormInputText(),
      'currency_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Currency'), 'add_empty' => true)),
      'start_time'      => new sfWidgetFormDateTime(),
      'end_time'        => new sfWidgetFormDateTime(),
      'published'       => new sfWidgetFormInputCheckbox(),
      'keywords'        => new sfWidgetFormInputText(),
      'video'           => new sfWidgetFormInputText(),
      'images'          => new sfWidgetFormInputText(),
      'user_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'category_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => false)),
      'payment_options' => new sfWidgetFormChoice(array('choices' => array(1 => '1', 2 => '2'))),
      'area'            => new sfWidgetFormInputText(),
      'website'         => new sfWidgetFormInputText(),
      'sale_type'       => new sfWidgetFormChoice(array('choices' => array(1 => '1', 2 => '2'))),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'           => new sfValidatorString(array('max_length' => 255)),
      'title_ar'        => new sfValidatorString(array('max_length' => 255)),
      'summary'         => new sfValidatorPass(array('required' => false)),
      'price'           => new sfValidatorInteger(),
      'currency_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Currency'), 'required' => false)),
      'start_time'      => new sfValidatorDateTime(array('required' => false)),
      'end_time'        => new sfValidatorDateTime(array('required' => false)),
      'published'       => new sfValidatorBoolean(array('required' => false)),
      'keywords'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'video'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'images'          => new sfValidatorPass(array('required' => false)),
      'user_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
      'category_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Category'))),
      'payment_options' => new sfValidatorChoice(array('choices' => array(0 => '1', 1 => '2'), 'required' => false)),
      'area'            => new sfValidatorNumber(array('required' => false)),
      'website'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'sale_type'       => new sfValidatorChoice(array('choices' => array(0 => '1', 1 => '2'), 'required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('state[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'State';
  }

}
