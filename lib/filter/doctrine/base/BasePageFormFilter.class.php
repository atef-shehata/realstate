<?php

/**
 * Page filter form base class.
 *
 * @package    realstate
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePageFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'body'        => new sfWidgetFormFilterInput(),
      'menu_item'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'num_of_hits' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'title'       => new sfValidatorPass(array('required' => false)),
      'body'        => new sfValidatorPass(array('required' => false)),
      'menu_item'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'num_of_hits' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('page_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Page';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'title'       => 'Text',
      'body'        => 'Text',
      'menu_item'   => 'Boolean',
      'num_of_hits' => 'Number',
    );
  }
}
