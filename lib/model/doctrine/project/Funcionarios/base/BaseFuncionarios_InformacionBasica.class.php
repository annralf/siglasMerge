<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Funcionarios_InformacionBasica', 'doctrine');

/**
 * BaseFuncionarios_InformacionBasica
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $funcionario_id
 * @property date $f_nacimiento
 * @property string $estado_nacimiento_id
 * @property string $sexo
 * @property string $edo_civil
 * @property string $licencia_conducir_uno_grado
 * @property string $licencia_conducir_dos_grado
 * @property timestamp $f_validado
 * @property integer $id_validado
 * @property string $status
 * @property integer $id_update
 * @property string $ip_update
 * @property string $proteccion
 * @property Funcionarios_Funcionario $Funcionarios_Funcionario
 * 
 * @method integer                        getId()                          Returns the current record's "id" value
 * @method integer                        getFuncionarioId()               Returns the current record's "funcionario_id" value
 * @method date                           getFNacimiento()                 Returns the current record's "f_nacimiento" value
 * @method string                         getEstadoNacimientoId()          Returns the current record's "estado_nacimiento_id" value
 * @method string                         getSexo()                        Returns the current record's "sexo" value
 * @method string                         getEdoCivil()                    Returns the current record's "edo_civil" value
 * @method string                         getLicenciaConducirUnoGrado()    Returns the current record's "licencia_conducir_uno_grado" value
 * @method string                         getLicenciaConducirDosGrado()    Returns the current record's "licencia_conducir_dos_grado" value
 * @method timestamp                      getFValidado()                   Returns the current record's "f_validado" value
 * @method integer                        getIdValidado()                  Returns the current record's "id_validado" value
 * @method string                         getStatus()                      Returns the current record's "status" value
 * @method integer                        getIdUpdate()                    Returns the current record's "id_update" value
 * @method string                         getIpUpdate()                    Returns the current record's "ip_update" value
 * @method string                         getProteccion()                  Returns the current record's "proteccion" value
 * @method Funcionarios_Funcionario       getFuncionariosFuncionario()     Returns the current record's "Funcionarios_Funcionario" value
 * @method Funcionarios_InformacionBasica setId()                          Sets the current record's "id" value
 * @method Funcionarios_InformacionBasica setFuncionarioId()               Sets the current record's "funcionario_id" value
 * @method Funcionarios_InformacionBasica setFNacimiento()                 Sets the current record's "f_nacimiento" value
 * @method Funcionarios_InformacionBasica setEstadoNacimientoId()          Sets the current record's "estado_nacimiento_id" value
 * @method Funcionarios_InformacionBasica setSexo()                        Sets the current record's "sexo" value
 * @method Funcionarios_InformacionBasica setEdoCivil()                    Sets the current record's "edo_civil" value
 * @method Funcionarios_InformacionBasica setLicenciaConducirUnoGrado()    Sets the current record's "licencia_conducir_uno_grado" value
 * @method Funcionarios_InformacionBasica setLicenciaConducirDosGrado()    Sets the current record's "licencia_conducir_dos_grado" value
 * @method Funcionarios_InformacionBasica setFValidado()                   Sets the current record's "f_validado" value
 * @method Funcionarios_InformacionBasica setIdValidado()                  Sets the current record's "id_validado" value
 * @method Funcionarios_InformacionBasica setStatus()                      Sets the current record's "status" value
 * @method Funcionarios_InformacionBasica setIdUpdate()                    Sets the current record's "id_update" value
 * @method Funcionarios_InformacionBasica setIpUpdate()                    Sets the current record's "ip_update" value
 * @method Funcionarios_InformacionBasica setProteccion()                  Sets the current record's "proteccion" value
 * @method Funcionarios_InformacionBasica setFuncionariosFuncionario()     Sets the current record's "Funcionarios_Funcionario" value
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFuncionarios_InformacionBasica extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('funcionarios.informacion_basica');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'funcionarios.informacion_basica_id',
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
        $this->hasColumn('f_nacimiento', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('estado_nacimiento_id', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 2,
             ));
        $this->hasColumn('sexo', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('edo_civil', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('licencia_conducir_uno_grado', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 3,
             ));
        $this->hasColumn('licencia_conducir_dos_grado', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 3,
             ));
        $this->hasColumn('f_validado', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('id_validado', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
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
        $this->hasColumn('ip_update', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 40,
             ));
        $this->hasColumn('proteccion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Funcionarios_Funcionario', array(
             'local' => 'funcionario_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}