<?php

class IndexController extends Zend_Controller_Action
{
    public function init()
    {
        $registry = Zend_Registry::getInstance();
        $this->_em = $registry->entitymanager;
    }
 
    public function indexAction()
    {
    }

    public function insertAction()
    {
        $this->render('index');

        $projectEntity = new Default_Model_Project;
        $projectEntity->setName('Zaphod Beeblebrox');
        $this->_em->persist($projectEntity);
        $this->_em->flush();
    }

    public function singleAction()
    {
        $this->render('index');

        $q = $this->_em->createQuery('select p from Default_Model_Project p where p.name = ?1');
        $q->setParameter( 1, 'Mercafutbol' );
        $projectEntity = $q->getSingleResult();

        var_dump( $projectEntity );
    }

    public function updateAction()
    {
        $this->render('index');

        $q = $this->_em->createQuery('select p from Default_Model_Project p where p.name = ?1');
        $q->setParameter( 1, 'Mercafutbol updated' );
        $projectEntity = $q->getSingleResult();
//        $projectEntity->setName('Mercafutbol');
//        $this->_em->persist($projectEntity);
//        $this->_em->flush();

        var_dump( $projectEntity );
    }
}

