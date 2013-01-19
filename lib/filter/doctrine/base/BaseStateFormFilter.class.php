<?php

/**
 * State filter form base class.
 *
 * @package    realstate
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseStateFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'title_ar'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'summary'         => new sfWidgetFormFilterInput(),
      'price'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'currency_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Currency'), 'add_empty' => true)),
      'start_time'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'end_time'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'published'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'keywords'        => new sfWidgetFormFilterInput(),
      'video'           => new sfWidgetFormFilterInput(),
      'images'          => new sfWidgetFormFilterInput(),
      'user_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'category_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'payment_options' => new sfWidgetFormChoice(array('choices' => array('' => '', 1 => '1', 2 => '2'))),
      'area'            => new sfWidgetFormFilterInput(),
      'website'         => new sfWidgetFormFilterInput(),
      'sale_type'       => new sfWidgetFormChoice(array('choices' => array('' => '', 1 => '1', 2 => '2'))),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'title'           => new sfValidatorPass(array('required' => false)),
      'title_ar'        => new sfValidatorPass(array('required' => false)),
      'summary'         => new sfValidatorPass(array('required' => false)),
      'price'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'currency_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Currency'), 'column' => 'id')),
      'start_time'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'end_time'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'published'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'keywords'        => new sfValidatorPass(array('required' => false)),
      'video'           => new sfValidatorPass(array('required' => false)),
      'images'          => new sfValidatorPass(array('required' => false)),
      'user_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'category_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Category'), 'column' => 'id')),
      'payment_options' => new sfValidatorChoice(array('required' => false, 'choices' => array(1 => '1', 2 => '2'))),
      'area'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'website'         => new sfValidatorPass(array('required' => false)),
      'sale_type'       => new sfValidatorChoice(array('required' => false, 'choices' => array(1 => '1', 2 => '2'))),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('state_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'State';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'title'           => 'Text',
      'title_ar'        => 'Text',
      'summary'         => 'Text',
      'price'           => 'Number',
      'currency_id'     => 'ForeignKey',
      'start_time'      => 'Date',
      'end_time'        => 'Date',
      'published'       => 'Boolean',
      'keywords'        => 'Text',
      'video'           => 'Text',
      'images'          => 'Text',
      'user_id'         => 'ForeignKey',
      'category_id'     => 'ForeignKey',
      'payment_options' => 'Enum',
      'area'            => 'Number',
      'website'         => 'Text',
      'sale_type'       => 'Enum',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
