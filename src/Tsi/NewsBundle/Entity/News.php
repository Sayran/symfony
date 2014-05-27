<?php
/**
 * Created by PhpStorm.
 * User: sayran
 * Date: 5/27/14
 * Time: 6:43 PM
 */
namespace Tsi\NewsBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Table(name="news")
 * @ORM\Entity
 */
class News
    {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
        private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
        private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
        private $author;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
        private $content;

    /**
     * @ORM\Column(type="boolean", name="is_active")
     */
        private $isActive;
    
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
     * Set title
     *
     * @param string $title
     * @return News
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return News
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return News
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return News
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
}
