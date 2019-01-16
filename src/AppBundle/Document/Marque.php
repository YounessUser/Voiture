<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16/01/2019
 * Time: 16:02
 */

namespace AppBundle\Document;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
/**
 * Class Marque
 * @package AppBundle\Document
 *
 * @MongoDB\Document(repositoryClass="AppBundle\Repository\MarqueRepository")
 */
class Marque
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
     * @var ArrayCollection | Finition[]
     *
     * @MongoDB\ReferenceMany(targetDocument="AppBundle\Document\Finition", mappedBy="marque")
     */
    private $finitions;

    /**
     * @var Modele
     *
     * @MongoDB\ReferenceOne(targetDocument="AppBundle\Document\Modele", inversedBy="marques")
     */
    private $modele;

    /**
     * Marque constructor.
     */
    public function __construct()
    {
        $this->finitions = new ArrayCollection();
    }


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
     * Add finition
     *
     * @param AppBundle\Document\Finition $finition
     */
    public function addFinition(\AppBundle\Document\Finition $finition)
    {
        $this->finitions[] = $finition;
    }

    /**
     * Remove finition
     *
     * @param AppBundle\Document\Finition $finition
     */
    public function removeFinition(\AppBundle\Document\Finition $finition)
    {
        $this->finitions->removeElement($finition);
    }

    /**
     * Get finitions
     *
     * @return \Doctrine\Common\Collections\Collection $finitions
     */
    public function getFinitions()
    {
        return $this->finitions;
    }


}
