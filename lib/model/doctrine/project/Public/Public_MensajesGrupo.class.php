<?php

/**
 * Public_MensajesGrupo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    siglas-(institucion)
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Public_MensajesGrupo extends BasePublic_MensajesGrupo
{
    public function save(Doctrine_Connection $conn = null)
    {
        $this->setFuncionarioId(sfContext::getInstance()->getUser()->getAttribute('funcionario_id'));

        return parent::save($conn);
    }
}
