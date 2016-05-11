<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Archivo_Compartir', 'doctrine');

/**
 * BaseArchivo_Compartir
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $unidad_id
 * @property string $parametros
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property integer $id_update
 * @property Organigrama_Unidad $Organigrama_Unidad
 * @property Doctrine_Collection $Archivo_CompartirFuncionario
 * 
 * @method integer             getId()                           Returns the current record's "id" value
 * @method integer             getUnidadId()                     Returns the current record's "unidad_id" value
 * @method string              getParametros()                   Returns the current record's "parametros" value
 * @method timestamp           getCreatedAt()                    Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()                    Returns the current record's "updated_at" value
 * @method integer             getIdUpdate()                     Returns the current record's "id_update" value
 * @method Organigrama_Unidad  getOrganigramaUnidad()            Returns the current record's "Organigrama_Unidad" value
 * @method Doctrine_Collection getArchivoCompartirFuncionario()  Returns the current record's "Archivo_CompartirFuncionario" collection
 * @method Archivo_Compartir   setId()                           Sets the current record's "id" value
 * @method Archivo_Compartir   setUnidadId()                     Sets the current record's "unidad_id" value
 * @method Archivo_Compartir   setParametros()                   Sets the current record's "parametros" value
 * @method Archivo_Compartir   setCreatedAt()                    Sets the current record's "created_at" value
 * @method Archivo_Compartir   setUpdatedAt()                    Sets the current record's "updated_at" value
 * @method Archivo_Compartir   setIdUpdate()                     Sets the current record's "id_update" value
 * @method Archivo_Compartir   setOrganigramaUnidad()            Sets the current record's "Organigrama_Unidad" value
 * @method Archivo_Compartir   setArchivoCompartirFuncionario()  Sets the current record's "Archivo_CompartirFuncionario" collection
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseArchivo_Compartir extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('archivo.compartir');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'archivo.compartir_id',
             'length' => 4,
             ));
        $this->hasColumn('unidad_id', 'integer', 4, array(
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
             'notnull' => false,
             'primary' => false,
             'length' => '',
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Organigrama_Unidad', array(
             'local' => 'unidad_id',
             'foreign' => 'id'));

        $this->hasMany('Archivo_CompartirFuncionario', array(
             'local' => 'id',
             'foreign' => 'compartir_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}