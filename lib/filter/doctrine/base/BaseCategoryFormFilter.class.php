<?php

/**
 * Category filter form base class.
 *
 * @package    realstate
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCategoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name_ar'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'category_icon'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'category_icon_ar' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'           => new sfWidgetFormChoice(array('choices' => array('' => '', 'active' => 'active', 'inactive' => 'inactive'))),
      'featured'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'name'             => new sfValidatorPass(array('required' => false)),
      'name_ar'          => new sfValidatorPass(array('required' => false)),
      'category_icon'    => new sfValidatorPass(array('required' => false)),
      'category_icon_ar' => new sfValidatorPass(array('required' => false)),
      'status'           => new sfValidatorChoice(array('required' => false, 'choices' => array('active' => 'active', 'inactive' => 'inactive'))),
      'featured'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('category_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Category';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'name'             => 'Text',
      'name_ar'          => 'Text',
      'category_icon'    => 'Text',
      'category_icon_ar' => 'Text',
      'status'           => 'Enum',
      'featured'         => 'Boolean',
    );
  }
}
