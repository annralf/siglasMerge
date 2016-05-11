<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Public_CarreraUniversitaria', 'doctrine');

/**
 * BasePublic_CarreraUniversitaria
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $organismo_educativo_id
 * @property integer $area_conocimiento_id
 * @property string $nombre
 * @property string $status
 * @property integer $id_update
 * @property Organismos_Organismo $Organismos_Organismo
 * 
 * @method integer                     getId()                     Returns the current record's "id" value
 * @method integer                     getOrganismoEducativoId()   Returns the current record's "organismo_educativo_id" value
 * @method integer                     getAreaConocimientoId()     Returns the current record's "area_conocimiento_id" value
 * @method string                      getNombre()                 Returns the current record's "nombre" value
 * @method string                      getStatus()                 Returns the current record's "status" value
 * @method integer                     getIdUpdate()               Returns the current record's "id_update" value
 * @method Organismos_Organismo        getOrganismosOrganismo()    Returns the current record's "Organismos_Organismo" value
 * @method Public_CarreraUniversitaria setId()                     Sets the current record's "id" value
 * @method Public_CarreraUniversitaria setOrganismoEducativoId()   Sets the current record's "organismo_educativo_id" value
 * @method Public_CarreraUniversitaria setAreaConocimientoId()     Sets the current record's "area_conocimiento_id" value
 * @method Public_CarreraUniversitaria setNombre()                 Sets the current record's "nombre" value
 * @method Public_CarreraUniversitaria setStatus()                 Sets the current record's "status" value
 * @method Public_CarreraUniversitaria setIdUpdate()               Sets the current record's "id_update" value
 * @method Public_CarreraUniversitaria setOrganismosOrganismo()    Sets the current record's "Organismos_Organismo" value
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePublic_CarreraUniversitaria extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('public.carrera_universitaria');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'public.carrera_universitaria_id',
             'length' => 4,
             ));
        $this->hasColumn('organismo_educativo_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('area_conocimiento_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Organismos_Organismo', array(
             'local' => 'organismo_educativo_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}