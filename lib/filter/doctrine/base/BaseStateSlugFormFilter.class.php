<?php

/**
 * StateSlug filter form base class.
 *
 * @package    realstate
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseStateSlugFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'state_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('State'), 'add_empty' => true)),
      'slug'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'main'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'disabled' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'state_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('State'), 'column' => 'id')),
      'slug'     => new sfValidatorPass(array('required' => false)),
      'main'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'disabled' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('state_slug_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'StateSlug';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'state_id' => 'ForeignKey',
      'slug'     => 'Text',
      'main'     => 'Boolean',
      'disabled' => 'Boolean',
    );
  }
}
