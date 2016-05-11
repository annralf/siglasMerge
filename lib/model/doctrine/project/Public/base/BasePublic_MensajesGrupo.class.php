<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Public_MensajesGrupo', 'doctrine');

/**
 * BasePublic_MensajesGrupo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $funcionario_id
 * @property string $nombre
 * @property Funcionarios_Funcionario $Funcionarios_Funcionario
 * @property Doctrine_Collection $Public_MensajesParticipantes
 * 
 * @method integer                  getId()                           Returns the current record's "id" value
 * @method integer                  getFuncionarioId()                Returns the current record's "funcionario_id" value
 * @method string                   getNombre()                       Returns the current record's "nombre" value
 * @method Funcionarios_Funcionario getFuncionariosFuncionario()      Returns the current record's "Funcionarios_Funcionario" value
 * @method Doctrine_Collection      getPublicMensajesParticipantes()  Returns the current record's "Public_MensajesParticipantes" collection
 * @method Public_MensajesGrupo     setId()                           Sets the current record's "id" value
 * @method Public_MensajesGrupo     setFuncionarioId()                Sets the current record's "funcionario_id" value
 * @method Public_MensajesGrupo     setNombre()                       Sets the current record's "nombre" value
 * @method Public_MensajesGrupo     setFuncionariosFuncionario()      Sets the current record's "Funcionarios_Funcionario" value
 * @method Public_MensajesGrupo     setPublicMensajesParticipantes()  Sets the current record's "Public_MensajesParticipantes" collection
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePublic_MensajesGrupo extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('public.mensajes_grupo');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'public.mensajes_grupo_id',
             'length' => 4,
             ));
        $this->hasColumn('funcionario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Funcionarios_Funcionario', array(
             'local' => 'funcionario_id',
             'foreign' => 'id'));

        $this->hasMany('Public_MensajesParticipantes', array(
             'local' => 'id',
             'foreign' => 'mensajes_grupo_id'));
    }
}