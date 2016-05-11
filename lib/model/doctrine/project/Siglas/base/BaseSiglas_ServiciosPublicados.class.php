<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Siglas_ServiciosPublicados', 'doctrine');

/**
 * BaseSiglas_ServiciosPublicados
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $funcion
 * @property string $descripcion
 * @property string $tipo
 * @property string $crontab
 * @property string $recursos
 * @property string $url
 * @property string $parametros_entrada
 * @property string $parametros_salida
 * @property string $puerta
 * @property string $so
 * @property string $agente
 * @property string $pc
 * @property string $status
 * @property integer $id_create
 * @property integer $id_update
 * @property string $ip_create
 * @property string $ip_update
 * @property Doctrine_Collection $Siglas_ServiciosPublicadosConfianza
 * 
 * @method integer                    getId()                                  Returns the current record's "id" value
 * @method string                     getFuncion()                             Returns the current record's "funcion" value
 * @method string                     getDescripcion()                         Returns the current record's "descripcion" value
 * @method string                     getTipo()                                Returns the current record's "tipo" value
 * @method string                     getCrontab()                             Returns the current record's "crontab" value
 * @method string                     getRecursos()                            Returns the current record's "recursos" value
 * @method string                     getUrl()                                 Returns the current record's "url" value
 * @method string                     getParametrosEntrada()                   Returns the current record's "parametros_entrada" value
 * @method string                     getParametrosSalida()                    Returns the current record's "parametros_salida" value
 * @method string                     getPuerta()                              Returns the current record's "puerta" value
 * @method string                     getSo()                                  Returns the current record's "so" value
 * @method string                     getAgente()                              Returns the current record's "agente" value
 * @method string                     getPc()                                  Returns the current record's "pc" value
 * @method string                     getStatus()                              Returns the current record's "status" value
 * @method integer                    getIdCreate()                            Returns the current record's "id_create" value
 * @method integer                    getIdUpdate()                            Returns the current record's "id_update" value
 * @method string                     getIpCreate()                            Returns the current record's "ip_create" value
 * @method string                     getIpUpdate()                            Returns the current record's "ip_update" value
 * @method Doctrine_Collection        getSiglasServiciosPublicadosConfianza()  Returns the current record's "Siglas_ServiciosPublicadosConfianza" collection
 * @method Siglas_ServiciosPublicados setId()                                  Sets the current record's "id" value
 * @method Siglas_ServiciosPublicados setFuncion()                             Sets the current record's "funcion" value
 * @method Siglas_ServiciosPublicados setDescripcion()                         Sets the current record's "descripcion" value
 * @method Siglas_ServiciosPublicados setTipo()                                Sets the current record's "tipo" value
 * @method Siglas_ServiciosPublicados setCrontab()                             Sets the current record's "crontab" value
 * @method Siglas_ServiciosPublicados setRecursos()                            Sets the current record's "recursos" value
 * @method Siglas_ServiciosPublicados setUrl()                                 Sets the current record's "url" value
 * @method Siglas_ServiciosPublicados setParametrosEntrada()                   Sets the current record's "parametros_entrada" value
 * @method Siglas_ServiciosPublicados setParametrosSalida()                    Sets the current record's "parametros_salida" value
 * @method Siglas_ServiciosPublicados setPuerta()                              Sets the current record's "puerta" value
 * @method Siglas_ServiciosPublicados setSo()                                  Sets the current record's "so" value
 * @method Siglas_ServiciosPublicados setAgente()                              Sets the current record's "agente" value
 * @method Siglas_ServiciosPublicados setPc()                                  Sets the current record's "pc" value
 * @method Siglas_ServiciosPublicados setStatus()                              Sets the current record's "status" value
 * @method Siglas_ServiciosPublicados setIdCreate()                            Sets the current record's "id_create" value
 * @method Siglas_ServiciosPublicados setIdUpdate()                            Sets the current record's "id_update" value
 * @method Siglas_ServiciosPublicados setIpCreate()                            Sets the current record's "ip_create" value
 * @method Siglas_ServiciosPublicados setIpUpdate()                            Sets the current record's "ip_update" value
 * @method Siglas_ServiciosPublicados setSiglasServiciosPublicadosConfianza()  Sets the current record's "Siglas_ServiciosPublicadosConfianza" collection
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSiglas_ServiciosPublicados extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('siglas.servicios_publicados');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'siglas.servicios_publicados_id',
             'length' => 4,
             ));
        $this->hasColumn('funcion', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('tipo', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('crontab', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('recursos', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('url', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('parametros_entrada', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('parametros_salida', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('puerta', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('so', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('agente', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('pc', 'string', null, array(
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
        $this->hasColumn('id_create', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('id_update', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('ip_create', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 30,
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
        $this->hasMany('Siglas_ServiciosPublicadosConfianza', array(
             'local' => 'id',
             'foreign' => 'servicios_publicados_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}