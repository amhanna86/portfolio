<?php

namespace SiteStyleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * SocialMedia
 * @ORM\Table(name="socialmedia")
 * @ORM\Entity(repositoryClass="SiteStyleBundle\Repository\SocialMediaRepository")
 * 
 */
class SocialMedia {

	/**
	 * @var int
	 * 
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var text
	 * 
	 * @ORM\Column(name="name", type="text")
	 */
	private $name;

	/**
	 * @var text
	 * 
	 * @ORM\Column(name="href", type="text")
	 */
	private $href;


	/**
	 * @var text
	 * 
	 * @ORM\Column(name="iconclass", type="text")
	 */
	private $iconclass;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return SocialMedia
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set href
     *
     * @param string $href
     *
     * @return SocialMedia
     */
    public function setHref($href)
    {
        $this->href = $href;

        return $this;
    }

    /**
     * Get href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Set iconclass
     *
     * @param string $iconclass
     *
     * @return SocialMedia
     */
    public function setIconclass($iconclass)
    {
        $this->iconclass = $iconclass;

        return $this;
    }

    /**
     * Get iconclass
     *
     * @return string
     */
    public function getIconclass()
    {
        return $this->iconclass;
    }
}
