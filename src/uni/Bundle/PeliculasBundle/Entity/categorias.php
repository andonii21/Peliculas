<?php

namespace uni\Bundle\PeliculasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * categorias
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class categorias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=50)
     */
    private $titulo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;


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
     * Set titulo
     *
     * @param string $titulo
     * @return categorias
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return categorias
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return categorias
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
         /**
* @ORM\OneToMany(targetEntity="noticias", mappedBy="categoria", cascade={"remove"})
*/
    protected $noticiass;
    
    public function __construct() {
    $this->noticiass = new ArrayCollection();}

    /**
     * Add noticiass
     *
     * @param \uni\Bundle\PeliculasBundle\Entity\noticias $noticiass
     * @return categorias
     */
    public function addNoticiass(\uni\Bundle\PeliculasBundle\Entity\noticias $noticiass)
    {
        $this->noticiass[] = $noticiass;

        return $this;
    }

    /**
     * Remove noticiass
     *
     * @param \uni\Bundle\PeliculasBundle\Entity\noticias $noticiass
     */
    public function removeNoticiass(\uni\Bundle\PeliculasBundle\Entity\noticias $noticiass)
    {
        $this->noticiass->removeElement($noticiass);
    }

    /**
     * Get noticiass
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNoticiass()
    {
        return $this->noticiass;
    }
    public function __toString() {
    return $this->titulo;}
       
 /**
    * @ORM\OneToMany(targetEntity="peliculas", mappedBy="categoriass", cascade={"remove"})
    */
    protected $peliculass;

    /**
     * Add peliculass
     *
     * @param \uni\Bundle\PeliculasBundle\Entity\peliculas $peliculass
     * @return categorias
     */
    public function addPeliculass(\uni\Bundle\PeliculasBundle\Entity\peliculas $peliculass)
    {
        $this->peliculass[] = $peliculass;

        return $this;
    }

    /**
     * Remove peliculass
     *
     * @param \uni\Bundle\PeliculasBundle\Entity\peliculas $peliculass
     */
    public function removePeliculass(\uni\Bundle\PeliculasBundle\Entity\peliculas $peliculass)
    {
        $this->peliculass->removeElement($peliculass);
    }

    /**
     * Get peliculass
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPeliculass()
    {
        return $this->peliculass;
    }
}
