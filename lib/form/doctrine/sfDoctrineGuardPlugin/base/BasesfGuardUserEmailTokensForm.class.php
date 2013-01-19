<?php

/**
 * sfGuardUserEmailTokens form base class.
 *
 * @method sfGuardUserEmailTokens getObject() Returns the current form's model object
 *
 * @package    realstate
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfGuardUserEmailTokensForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'sf_guard_user_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'email_address'     => new sfWidgetFormInputText(),
      'email_token'       => new sfWidgetFormInputText(),
      'token_expire_date' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'sf_guard_user_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'email_address'     => new sfValidatorString(array('max_length' => 100)),
      'email_token'       => new sfValidatorString(array('max_length' => 255)),
      'token_expire_date' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_email_tokens[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUserEmailTokens';
  }

}
