<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16/01/2019
 * Time: 14:58
 */

namespace AppBundle\Document;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Class Modele
 * @package AppBundle\Document
 *
 * @MongoDB\Document(repositoryClass="AppBundle\Repository\ModeleRepository")
 */
class Modele
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
     * @var ArrayCollection | Marque[]
     *
     * @MongoDB\ReferenceMany(targetDocument="AppBundle\Document\Marque", mappedBy="modele")
     */
    private $marques;

    /**
     * Modele constructor.
     */
    public function __construct()
    {
        $this->marques = new ArrayCollection();
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
     * Add marque
     *
     * @param AppBundle\Document\Marque $marque
     */
    public function addMarque(\AppBundle\Document\Marque $marque)
    {
        $this->marques[] = $marque;
    }

    /**
     * Remove marque
     *
     * @param AppBundle\Document\Marque $marque
     */
    public function removeMarque(\AppBundle\Document\Marque $marque)
    {
        $this->marques->removeElement($marque);
    }

    /**
     * Get marques
     *
     * @return \Doctrine\Common\Collections\Collection $marques
     */
    public function getMarques()
    {
        return $this->marques;
    }
}
