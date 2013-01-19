<?php

/**
 * sfGuardUserProfile filter form base class.
 *
 * @package    realstate
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasesfGuardUserProfileFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sf_guard_user_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'first_name'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'last_name'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'username'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email_verified'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'mobile'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mobile_verified'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'address'             => new sfWidgetFormFilterInput(),
      'birth_date'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'gender'              => new sfWidgetFormChoice(array('choices' => array('' => '', 'male' => 'male', 'female' => 'female'))),
      'total_points'        => new sfWidgetFormFilterInput(),
      'referral_code'       => new sfWidgetFormFilterInput(),
      'checkins'            => new sfWidgetFormFilterInput(),
      'interests'           => new sfWidgetFormFilterInput(),
      'last_login'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'last_ip'             => new sfWidgetFormFilterInput(),
      'profile_picture'     => new sfWidgetFormFilterInput(),
      'percentage_complete' => new sfWidgetFormFilterInput(),
      'fb_id'               => new sfWidgetFormFilterInput(),
      'fb_name'             => new sfWidgetFormFilterInput(),
      'fb_serialize'        => new sfWidgetFormFilterInput(),
      'twitter_id'          => new sfWidgetFormFilterInput(),
      'twitter_name'        => new sfWidgetFormFilterInput(),
      'social_accounts'     => new sfWidgetFormFilterInput(),
      'source'              => new sfWidgetFormFilterInput(),
      'uses_mobile'         => new sfWidgetFormFilterInput(),
      'newsletter'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'user_settings'       => new sfWidgetFormFilterInput(),
      'district_id'         => new sfWidgetFormFilterInput(),
      'city_id'             => new sfWidgetFormFilterInput(),
      'country_id'          => new sfWidgetFormFilterInput(),
      'refered_by'          => new sfWidgetFormFilterInput(),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'sf_guard_user_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'first_name'          => new sfValidatorPass(array('required' => false)),
      'last_name'           => new sfValidatorPass(array('required' => false)),
      'username'            => new sfValidatorPass(array('required' => false)),
      'email_verified'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'mobile'              => new sfValidatorPass(array('required' => false)),
      'mobile_verified'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'address'             => new sfValidatorPass(array('required' => false)),
      'birth_date'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'gender'              => new sfValidatorChoice(array('required' => false, 'choices' => array('male' => 'male', 'female' => 'female'))),
      'total_points'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'referral_code'       => new sfValidatorPass(array('required' => false)),
      'checkins'            => new sfValidatorPass(array('required' => false)),
      'interests'           => new sfValidatorPass(array('required' => false)),
      'last_login'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'last_ip'             => new sfValidatorPass(array('required' => false)),
      'profile_picture'     => new sfValidatorPass(array('required' => false)),
      'percentage_complete' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fb_id'               => new sfValidatorPass(array('required' => false)),
      'fb_name'             => new sfValidatorPass(array('required' => false)),
      'fb_serialize'        => new sfValidatorPass(array('required' => false)),
      'twitter_id'          => new sfValidatorPass(array('required' => false)),
      'twitter_name'        => new sfValidatorPass(array('required' => false)),
      'social_accounts'     => new sfValidatorPass(array('required' => false)),
      'source'              => new sfValidatorPass(array('required' => false)),
      'uses_mobile'         => new sfValidatorPass(array('required' => false)),
      'newsletter'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'user_settings'       => new sfValidatorPass(array('required' => false)),
      'district_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'city_id'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'country_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'refered_by'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_profile_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUserProfile';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'sf_guard_user_id'    => 'ForeignKey',
      'first_name'          => 'Text',
      'last_name'           => 'Text',
      'username'            => 'Text',
      'email_verified'      => 'Boolean',
      'mobile'              => 'Text',
      'mobile_verified'     => 'Boolean',
      'address'             => 'Text',
      'birth_date'          => 'Date',
      'gender'              => 'Enum',
      'total_points'        => 'Number',
      'referral_code'       => 'Text',
      'checkins'            => 'Text',
      'interests'           => 'Text',
      'last_login'          => 'Date',
      'last_ip'             => 'Text',
      'profile_picture'     => 'Text',
      'percentage_complete' => 'Number',
      'fb_id'               => 'Text',
      'fb_name'             => 'Text',
      'fb_serialize'        => 'Text',
      'twitter_id'          => 'Text',
      'twitter_name'        => 'Text',
      'social_accounts'     => 'Text',
      'source'              => 'Text',
      'uses_mobile'         => 'Text',
      'newsletter'          => 'Boolean',
      'user_settings'       => 'Text',
      'district_id'         => 'Number',
      'city_id'             => 'Number',
      'country_id'          => 'Number',
      'refered_by'          => 'Number',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
