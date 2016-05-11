<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Public_NivelAcademico', 'doctrine');

/**
 * BasePublic_NivelAcademico
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property integer $id_update
 * @property string $ip_update
 * @property Doctrine_Collection $Funcionarios_EducacionMedia
 * @property Doctrine_Collection $Funcionarios_EducacionUniversitaria
 * @property Doctrine_Collection $Funcionarios_Familiar
 * 
 * @method integer               getId()                                  Returns the current record's "id" value
 * @method string                getNombre()                              Returns the current record's "nombre" value
 * @method integer               getIdUpdate()                            Returns the current record's "id_update" value
 * @method string                getIpUpdate()                            Returns the current record's "ip_update" value
 * @method Doctrine_Collection   getFuncionariosEducacionMedia()          Returns the current record's "Funcionarios_EducacionMedia" collection
 * @method Doctrine_Collection   getFuncionariosEducacionUniversitaria()  Returns the current record's "Funcionarios_EducacionUniversitaria" collection
 * @method Doctrine_Collection   getFuncionariosFamiliar()                Returns the current record's "Funcionarios_Familiar" collection
 * @method Public_NivelAcademico setId()                                  Sets the current record's "id" value
 * @method Public_NivelAcademico setNombre()                              Sets the current record's "nombre" value
 * @method Public_NivelAcademico setIdUpdate()                            Sets the current record's "id_update" value
 * @method Public_NivelAcademico setIpUpdate()                            Sets the current record's "ip_update" value
 * @method Public_NivelAcademico setFuncionariosEducacionMedia()          Sets the current record's "Funcionarios_EducacionMedia" collection
 * @method Public_NivelAcademico setFuncionariosEducacionUniversitaria()  Sets the current record's "Funcionarios_EducacionUniversitaria" collection
 * @method Public_NivelAcademico setFuncionariosFamiliar()                Sets the current record's "Funcionarios_Familiar" collection
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePublic_NivelAcademico extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('public.nivel_academico');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'public."nivel_academico_id_seq"',
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 255,
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Funcionarios_EducacionMedia', array(
             'local' => 'id',
             'foreign' => 'nivel_academico_id'));

        $this->hasMany('Funcionarios_EducacionUniversitaria', array(
             'local' => 'id',
             'foreign' => 'nivel_academico_id'));

        $this->hasMany('Funcionarios_Familiar', array(
             'local' => 'id',
             'foreign' => 'nivel_academico_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}