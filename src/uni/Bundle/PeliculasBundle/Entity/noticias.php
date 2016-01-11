<?php

namespace uni\Bundle\PeliculasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * noticias
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class noticias
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
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255)
     */
    private $foto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;


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
     * @return noticias
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return noticias
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
     * Set foto
     *
     * @param string $foto
     * @return noticias
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return noticias
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
* @ORM\ManyToOne(targetEntity="categorias", inversedBy="noticiass", cascade={"remove"})
* @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
*/
protected $categoria;

    /**
     * Set categoria
     *
     * @param \uni\Bundle\PeliculasBundle\Entity\categorias $categoria
     * @return noticias
     */
    public function setCategoria(\uni\Bundle\PeliculasBundle\Entity\categorias $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \uni\Bundle\PeliculasBundle\Entity\categorias 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function __toString() {
    return $this->titulo;}
    /**
    * @ORM\OneToMany(targetEntity="peliculas", mappedBy="noticiass", cascade={"remove"})
    */
    protected $peliculass;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->peliculass = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add peliculass
     *
     * @param \uni\Bundle\PeliculasBundle\Entity\peliculas $peliculass
     * @return noticias
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
