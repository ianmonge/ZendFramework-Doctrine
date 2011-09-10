<?php
 
/**
 * @Entity
 * @Table(name="project")
 */
class Default_Model_Project
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
 
    /**
     * @Column(type="string")
     */
    private $name;
 
    public function setName($string) {
        $this->name = $string;
        return true;
    }
}