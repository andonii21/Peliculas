<?php

namespace uni\Bundle\PeliculasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * comentarios
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class comentarios
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
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100)
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
     * Set nombre
     *
     * @param string $nombre
     * @return comentarios
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return comentarios
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
     * @return comentarios
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
* @ORM\ManyToOne(targetEntity="peliculas", inversedBy="comentarioss", cascade={"remove"})
* @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
*/
protected $peliculas;


    /**
     * Set peliculas
     *
     * @param \uni\Bundle\PeliculasBundle\Entity\peliculas $peliculas
     * @return comentarios
     */
    public function setPeliculas(\uni\Bundle\PeliculasBundle\Entity\peliculas $peliculas = null)
    {
        $this->peliculas = $peliculas;

        return $this;
    }

    /**
     * Get peliculas
     *
     * @return \uni\Bundle\PeliculasBundle\Entity\peliculas 
     */
    public function getPeliculas()
    {
        return $this->peliculas;
    }
    /**
    * @ORM\OneToMany(targetEntity="peliculas", mappedBy="comentario", cascade={"remove"})
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
     * @return comentarios
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
    public function __toString() {
    return $this->nombre;}
}
