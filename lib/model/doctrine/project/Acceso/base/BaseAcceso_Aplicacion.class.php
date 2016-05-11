<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Acceso_Aplicacion', 'doctrine');

/**
 * BaseAcceso_Aplicacion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $status
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property integer $id_update
 * @property string $ip_update
 * @property Doctrine_Collection $Comunicaciones_Notificacion
 * @property Doctrine_Collection $Comunicaciones_NotificacionHistorico
 * 
 * @method integer             getId()                                   Returns the current record's "id" value
 * @method string              getNombre()                               Returns the current record's "nombre" value
 * @method string              getDescripcion()                          Returns the current record's "descripcion" value
 * @method string              getStatus()                               Returns the current record's "status" value
 * @method timestamp           getCreatedAt()                            Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()                            Returns the current record's "updated_at" value
 * @method integer             getIdUpdate()                             Returns the current record's "id_update" value
 * @method string              getIpUpdate()                             Returns the current record's "ip_update" value
 * @method Doctrine_Collection getComunicacionesNotificacion()           Returns the current record's "Comunicaciones_Notificacion" collection
 * @method Doctrine_Collection getComunicacionesNotificacionHistorico()  Returns the current record's "Comunicaciones_NotificacionHistorico" collection
 * @method Acceso_Aplicacion   setId()                                   Sets the current record's "id" value
 * @method Acceso_Aplicacion   setNombre()                               Sets the current record's "nombre" value
 * @method Acceso_Aplicacion   setDescripcion()                          Sets the current record's "descripcion" value
 * @method Acceso_Aplicacion   setStatus()                               Sets the current record's "status" value
 * @method Acceso_Aplicacion   setCreatedAt()                            Sets the current record's "created_at" value
 * @method Acceso_Aplicacion   setUpdatedAt()                            Sets the current record's "updated_at" value
 * @method Acceso_Aplicacion   setIdUpdate()                             Sets the current record's "id_update" value
 * @method Acceso_Aplicacion   setIpUpdate()                             Sets the current record's "ip_update" value
 * @method Acceso_Aplicacion   setComunicacionesNotificacion()           Sets the current record's "Comunicaciones_Notificacion" collection
 * @method Acceso_Aplicacion   setComunicacionesNotificacionHistorico()  Sets the current record's "Comunicaciones_NotificacionHistorico" collection
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAcceso_Aplicacion extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('acceso.aplicacion');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'acceso.aplicacion_id',
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 150,
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
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
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 25,
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
        $this->hasMany('Comunicaciones_Notificacion', array(
             'local' => 'id',
             'foreign' => 'aplicacion_id'));

        $this->hasMany('Comunicaciones_NotificacionHistorico', array(
             'local' => 'id',
             'foreign' => 'aplicacion_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}