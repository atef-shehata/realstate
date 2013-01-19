<?php

/**
 * sfGuardUserProfile form base class.
 *
 * @method sfGuardUserProfile getObject() Returns the current form's model object
 *
 * @package    realstate
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfGuardUserProfileForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'sf_guard_user_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'first_name'          => new sfWidgetFormInputText(),
      'last_name'           => new sfWidgetFormInputText(),
      'username'            => new sfWidgetFormInputText(),
      'email_verified'      => new sfWidgetFormInputCheckbox(),
      'mobile'              => new sfWidgetFormInputText(),
      'mobile_verified'     => new sfWidgetFormInputCheckbox(),
      'address'             => new sfWidgetFormInputText(),
      'birth_date'          => new sfWidgetFormDate(),
      'gender'              => new sfWidgetFormChoice(array('choices' => array('male' => 'male', 'female' => 'female'))),
      'total_points'        => new sfWidgetFormInputText(),
      'referral_code'       => new sfWidgetFormInputText(),
      'checkins'            => new sfWidgetFormInputText(),
      'interests'           => new sfWidgetFormInputText(),
      'last_login'          => new sfWidgetFormDateTime(),
      'last_ip'             => new sfWidgetFormInputText(),
      'profile_picture'     => new sfWidgetFormInputText(),
      'percentage_complete' => new sfWidgetFormInputText(),
      'fb_id'               => new sfWidgetFormInputText(),
      'fb_name'             => new sfWidgetFormInputText(),
      'fb_serialize'        => new sfWidgetFormInputText(),
      'twitter_id'          => new sfWidgetFormInputText(),
      'twitter_name'        => new sfWidgetFormInputText(),
      'social_accounts'     => new sfWidgetFormInputText(),
      'source'              => new sfWidgetFormInputText(),
      'uses_mobile'         => new sfWidgetFormInputText(),
      'newsletter'          => new sfWidgetFormInputCheckbox(),
      'user_settings'       => new sfWidgetFormInputText(),
      'district_id'         => new sfWidgetFormInputText(),
      'city_id'             => new sfWidgetFormInputText(),
      'country_id'          => new sfWidgetFormInputText(),
      'refered_by'          => new sfWidgetFormInputText(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'sf_guard_user_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'first_name'          => new sfValidatorString(array('max_length' => 255)),
      'last_name'           => new sfValidatorString(array('max_length' => 255)),
      'username'            => new sfValidatorString(array('max_length' => 255)),
      'email_verified'      => new sfValidatorBoolean(array('required' => false)),
      'mobile'              => new sfValidatorString(array('max_length' => 45)),
      'mobile_verified'     => new sfValidatorBoolean(array('required' => false)),
      'address'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'birth_date'          => new sfValidatorDate(array('required' => false)),
      'gender'              => new sfValidatorChoice(array('choices' => array(0 => 'male', 1 => 'female'), 'required' => false)),
      'total_points'        => new sfValidatorInteger(array('required' => false)),
      'referral_code'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'checkins'            => new sfValidatorPass(array('required' => false)),
      'interests'           => new sfValidatorPass(array('required' => false)),
      'last_login'          => new sfValidatorDateTime(array('required' => false)),
      'last_ip'             => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'profile_picture'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'percentage_complete' => new sfValidatorInteger(array('required' => false)),
      'fb_id'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fb_name'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fb_serialize'        => new sfValidatorPass(array('required' => false)),
      'twitter_id'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'twitter_name'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'social_accounts'     => new sfValidatorPass(array('required' => false)),
      'source'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'uses_mobile'         => new sfValidatorPass(array('required' => false)),
      'newsletter'          => new sfValidatorBoolean(array('required' => false)),
      'user_settings'       => new sfValidatorPass(array('required' => false)),
      'district_id'         => new sfValidatorInteger(array('required' => false)),
      'city_id'             => new sfValidatorInteger(array('required' => false)),
      'country_id'          => new sfValidatorInteger(array('required' => false)),
      'refered_by'          => new sfValidatorInteger(array('required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_profile[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUserProfile';
  }

}
