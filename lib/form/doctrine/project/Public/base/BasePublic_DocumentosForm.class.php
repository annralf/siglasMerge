<?php

/**
 * Public_Documentos form base class.
 *
 * @method Public_Documentos getObject() Returns the current form's model object
 *
 * @package    siglas
 * @subpackage form
 * @author     Livio Lopez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePublic_DocumentosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'codigo'            => new sfWidgetFormInputText(),
      'contenido'         => new sfWidgetFormTextarea(),
      'documento_tipo_id' => new sfWidgetFormInputText(),
      'id_update'         => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'codigo'            => new sfValidatorString(array('max_length' => 100)),
      'contenido'         => new sfValidatorString(),
      'documento_tipo_id' => new sfValidatorInteger(array('required' => false)),
      'id_update'         => new sfValidatorInteger(),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('public_documentos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Public_Documentos';
  }

}
