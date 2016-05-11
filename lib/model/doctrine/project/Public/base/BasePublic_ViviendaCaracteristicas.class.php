<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Public_ViviendaCaracteristicas', 'doctrine');

/**
 * BasePublic_ViviendaCaracteristicas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property integer $padre_id
 * @property integer $puntos
 * @property string $status
 * @property integer $id_update
 * 
 * @method integer                        getId()        Returns the current record's "id" value
 * @method string                         getNombre()    Returns the current record's "nombre" value
 * @method integer                        getPadreId()   Returns the current record's "padre_id" value
 * @method integer                        getPuntos()    Returns the current record's "puntos" value
 * @method string                         getStatus()    Returns the current record's "status" value
 * @method integer                        getIdUpdate()  Returns the current record's "id_update" value
 * @method Public_ViviendaCaracteristicas setId()        Sets the current record's "id" value
 * @method Public_ViviendaCaracteristicas setNombre()    Sets the current record's "nombre" value
 * @method Public_ViviendaCaracteristicas setPadreId()   Sets the current record's "padre_id" value
 * @method Public_ViviendaCaracteristicas setPuntos()    Sets the current record's "puntos" value
 * @method Public_ViviendaCaracteristicas setStatus()    Sets the current record's "status" value
 * @method Public_ViviendaCaracteristicas setIdUpdate()  Sets the current record's "id_update" value
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePublic_ViviendaCaracteristicas extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('public.vivienda_caracteristicas');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'public.vivienda_caracteristicas_id',
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
        $this->hasColumn('padre_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('puntos', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
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
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}