<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16/01/2019
 * Time: 16:14
 */

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
 * Class Finition
 * @package AppBundle\Document
 *
 * @MongoDB\Document(repositoryClass="AppBundle\Repository\FinitionRepository")
 */
class Finition
{
    /**
     * @MongoDB\Id(strategy="auto")
     *
     */
    private $id;

    /**
     * @MongoDB\Field(type="string")
     */
    private $name;

    /**
     * @var Marque
     *
     * @MongoDB\ReferenceOne(targetDocument="AppBundle\Document\Marque", inversedBy="finitions")
     */
    private $marque;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set marque
     *
     * @param AppBundle\Document\Marque $marque
     * @return $this
     */
    public function setMarque(\AppBundle\Document\Marque $marque)
    {
        $this->marque = $marque;
        return $this;
    }

    /**
     * Get marque
     *
     * @return AppBundle\Document\Marque $marque
     */
    public function getMarque()
    {
        return $this->marque;
    }
}
