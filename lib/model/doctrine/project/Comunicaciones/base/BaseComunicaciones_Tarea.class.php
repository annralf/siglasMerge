<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Comunicaciones_Tarea', 'doctrine');

/**
 * BaseComunicaciones_Tarea
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $funcionario_id
 * @property string $descripcion
 * @property date $f_tentativa_inicial
 * @property date $f_tentativa_final
 * @property integer $prioridad
 * @property string $parametros
 * @property string $status
 * @property integer $id_update
 * @property string $ip_update
 * @property Funcionarios_Funcionario $Funcionarios_Funcionario
 * @property Doctrine_Collection $Comunicaciones_FuncionarioTarea
 * 
 * @method integer                  getId()                              Returns the current record's "id" value
 * @method integer                  getFuncionarioId()                   Returns the current record's "funcionario_id" value
 * @method string                   getDescripcion()                     Returns the current record's "descripcion" value
 * @method date                     getFTentativaInicial()               Returns the current record's "f_tentativa_inicial" value
 * @method date                     getFTentativaFinal()                 Returns the current record's "f_tentativa_final" value
 * @method integer                  getPrioridad()                       Returns the current record's "prioridad" value
 * @method string                   getParametros()                      Returns the current record's "parametros" value
 * @method string                   getStatus()                          Returns the current record's "status" value
 * @method integer                  getIdUpdate()                        Returns the current record's "id_update" value
 * @method string                   getIpUpdate()                        Returns the current record's "ip_update" value
 * @method Funcionarios_Funcionario getFuncionariosFuncionario()         Returns the current record's "Funcionarios_Funcionario" value
 * @method Doctrine_Collection      getComunicacionesFuncionarioTarea()  Returns the current record's "Comunicaciones_FuncionarioTarea" collection
 * @method Comunicaciones_Tarea     setId()                              Sets the current record's "id" value
 * @method Comunicaciones_Tarea     setFuncionarioId()                   Sets the current record's "funcionario_id" value
 * @method Comunicaciones_Tarea     setDescripcion()                     Sets the current record's "descripcion" value
 * @method Comunicaciones_Tarea     setFTentativaInicial()               Sets the current record's "f_tentativa_inicial" value
 * @method Comunicaciones_Tarea     setFTentativaFinal()                 Sets the current record's "f_tentativa_final" value
 * @method Comunicaciones_Tarea     setPrioridad()                       Sets the current record's "prioridad" value
 * @method Comunicaciones_Tarea     setParametros()                      Sets the current record's "parametros" value
 * @method Comunicaciones_Tarea     setStatus()                          Sets the current record's "status" value
 * @method Comunicaciones_Tarea     setIdUpdate()                        Sets the current record's "id_update" value
 * @method Comunicaciones_Tarea     setIpUpdate()                        Sets the current record's "ip_update" value
 * @method Comunicaciones_Tarea     setFuncionariosFuncionario()         Sets the current record's "Funcionarios_Funcionario" value
 * @method Comunicaciones_Tarea     setComunicacionesFuncionarioTarea()  Sets the current record's "Comunicaciones_FuncionarioTarea" collection
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseComunicaciones_Tarea extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('comunicaciones.tarea');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'comunicaciones.tarea_id',
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
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('f_tentativa_inicial', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('f_tentativa_final', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('prioridad', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('parametros', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('status', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('id_update', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('ip_update', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 30,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Funcionarios_Funcionario', array(
             'local' => 'funcionario_id',
             'foreign' => 'id'));

        $this->hasMany('Comunicaciones_FuncionarioTarea', array(
             'local' => 'id',
             'foreign' => 'tarea_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}