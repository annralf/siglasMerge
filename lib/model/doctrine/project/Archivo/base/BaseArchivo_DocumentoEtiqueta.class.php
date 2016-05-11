<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Archivo_DocumentoEtiqueta', 'doctrine');

/**
 * BaseArchivo_DocumentoEtiqueta
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $documento_id
 * @property integer $etiqueta_id
 * @property string $valor
 * @property integer $id_update
 * @property Archivo_Documento $Archivo_Documento
 * @property Archivo_Etiqueta $Archivo_Etiqueta
 * 
 * @method integer                   getId()                Returns the current record's "id" value
 * @method integer                   getDocumentoId()       Returns the current record's "documento_id" value
 * @method integer                   getEtiquetaId()        Returns the current record's "etiqueta_id" value
 * @method string                    getValor()             Returns the current record's "valor" value
 * @method integer                   getIdUpdate()          Returns the current record's "id_update" value
 * @method Archivo_Documento         getArchivoDocumento()  Returns the current record's "Archivo_Documento" value
 * @method Archivo_Etiqueta          getArchivoEtiqueta()   Returns the current record's "Archivo_Etiqueta" value
 * @method Archivo_DocumentoEtiqueta setId()                Sets the current record's "id" value
 * @method Archivo_DocumentoEtiqueta setDocumentoId()       Sets the current record's "documento_id" value
 * @method Archivo_DocumentoEtiqueta setEtiquetaId()        Sets the current record's "etiqueta_id" value
 * @method Archivo_DocumentoEtiqueta setValor()             Sets the current record's "valor" value
 * @method Archivo_DocumentoEtiqueta setIdUpdate()          Sets the current record's "id_update" value
 * @method Archivo_DocumentoEtiqueta setArchivoDocumento()  Sets the current record's "Archivo_Documento" value
 * @method Archivo_DocumentoEtiqueta setArchivoEtiqueta()   Sets the current record's "Archivo_Etiqueta" value
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseArchivo_DocumentoEtiqueta extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('archivo.documento_etiqueta');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'archivo.documento_etiqueta_id',
             'length' => 4,
             ));
        $this->hasColumn('documento_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('etiqueta_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('valor', 'string', 255, array(
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Archivo_Documento', array(
             'local' => 'documento_id',
             'foreign' => 'id'));

        $this->hasOne('Archivo_Etiqueta', array(
             'local' => 'etiqueta_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}