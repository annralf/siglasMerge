<?php

/**
 * Correspondencia_Correspondencia
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    sigla-(institution)
 * @subpackage model
 * @author     Livio López. liviolopez@gmail.com. (058)426-511.42.50. Venezuela-Caracas
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Correspondencia_Correspondencia extends BaseCorrespondencia_Correspondencia
{
    public function save(Doctrine_Connection $conn = null)
    {
        sfContext::getInstance()->getUser()->setAttribute('xxx', 'asd');
                
        if($this->isNew()) {
              if(!$this->getEmisorUnidadId())
                    $this->setEmisorUnidadId(sfContext::getInstance()->getUser()->getAttribute('funcionario_unidad_id'));


              if(!$this->getStatus()) $this->setStatus('C');
              
              if(sfContext::getInstance()->getUser()->getAttribute('nueva_recepcion')=='S')
              {
                   $this->setStatus('E');  
                   $this->setEmisorUnidadId(null);
              }
        }
        
        if(sfContext::getInstance()->getUser()->getAttribute('correspondencia_padre_id')) {
            $padre = Doctrine::getTable('Correspondencia_Correspondencia')->find(sfContext::getInstance()->getUser()->getAttribute('correspondencia_padre_id'));

            $this->setPadreId($padre->getId());
            $this->setGrupoCorrespondencia($padre->getGrupoCorrespondencia()); // sobreescribe el padre_id
        }

        return parent::save($conn);
    }
    
    public function postSave($event)
    {
        if (sfContext::getInstance()->getUser()->getAttribute('nueva_recepcion') == 'S')
        {
            $cacheDriver = $this->getTable()->getAttribute(Doctrine_Core::ATTR_RESULT_CACHE);
            $cacheDriver->delete('correspondencia_enviada_list_receptor_'.$this->getId());
        }
    }
}
