<?php

/**
 * Category form base class.
 *
 * @method Category getObject() Returns the current form's model object
 *
 * @package    realstate
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCategoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'name'             => new sfWidgetFormInputText(),
      'name_ar'          => new sfWidgetFormInputText(),
      'category_icon'    => new sfWidgetFormInputText(),
      'category_icon_ar' => new sfWidgetFormInputText(),
      'status'           => new sfWidgetFormChoice(array('choices' => array('active' => 'active', 'inactive' => 'inactive'))),
      'featured'         => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'             => new sfValidatorString(array('max_length' => 255)),
      'name_ar'          => new sfValidatorString(array('max_length' => 255)),
      'category_icon'    => new sfValidatorString(array('max_length' => 255)),
      'category_icon_ar' => new sfValidatorString(array('max_length' => 255)),
      'status'           => new sfValidatorChoice(array('choices' => array(0 => 'active', 1 => 'inactive'))),
      'featured'         => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('category[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Category';
  }

}
