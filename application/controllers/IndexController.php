<?php

class IndexController extends Zend_Controller_Action
{
//    public function init()
//    {
//        /* Initialize action controller here */
//    }
//
//    public function indexAction()
//    {
//        // action body
//    }

    public function init()
    {
        $registry = Zend_Registry::getInstance();
        $this->_em = $registry->entitymanager;
    }
 
    public function indexAction()
    {
        $projectEntity = new Default_Model_Project;
        $projectEntity->setName('Zaphod Beeblebrox');
        $this->_em->persist($projectEntity);
        $this->_em->flush();
    }


}

