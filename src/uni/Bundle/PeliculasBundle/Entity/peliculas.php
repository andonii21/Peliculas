<?php

namespace uni\Bundle\PeliculasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * peliculas
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class peliculas
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
     * @return peliculas
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
     * @return peliculas
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
     * @return peliculas
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
    * @ORM\OneToMany(targetEntity="comentarios", mappedBy="peliculas", cascade={"remove"})
    */
    protected $comentarioss;
    

    /**
     * Add comentarioss
     *
     * @param \uni\Bundle\PeliculasBundle\Entity\comentarios $comentarioss
     * @return peliculas
     */
    public function addComentarioss(\uni\Bundle\PeliculasBundle\Entity\comentarios $comentarioss)
    {
        $this->comentarioss[] = $comentarioss;

        return $this;
    }

    /**
     * Remove comentarioss
     *
     * @param \uni\Bundle\PeliculasBundle\Entity\comentarios $comentarioss
     */
    public function removeComentarioss(\uni\Bundle\PeliculasBundle\Entity\comentarios $comentarioss)
    {
        $this->comentarioss->removeElement($comentarioss);
    }

    /**
     * Get comentarioss
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComentarioss()
    {
        return $this->comentarioss;
    }
     /**
* @ORM\ManyToOne(targetEntity="categorias", inversedBy="peliculass", cascade={"remove"})
*/
protected $categoriass;

    /**
     * Set categoriass
     *
     * @param \uni\Bundle\PeliculasBundle\Entity\categorias $categoriass
     * @return peliculas
     */
    public function setCategoriass(\uni\Bundle\PeliculasBundle\Entity\categorias $categoriass = null)
    {
        $this->categoriass = $categoriass;

        return $this;
    }

    /**
     * Get categoriass
     *
     * @return \uni\Bundle\PeliculasBundle\Entity\categorias 
     */
    public function getCategoriass()
    {
        return $this->categoriass;
    }
     /**
* @ORM\ManyToOne(targetEntity="noticias", inversedBy="peliculass", cascade={"remove"})
*/
protected $noticiass;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comentarioss = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set noticiass
     *
     * @param \uni\Bundle\PeliculasBundle\Entity\noticias $noticiass
     * @return peliculas
     */
    public function setNoticiass(\uni\Bundle\PeliculasBundle\Entity\noticias $noticiass = null)
    {
        $this->noticiass = $noticiass;

        return $this;
    }

    /**
     * Get noticiass
     *
     * @return \uni\Bundle\PeliculasBundle\Entity\noticias 
     */
    public function getNoticiass()
    {
        return $this->noticiass;
    }
    /**
* @ORM\ManyToOne(targetEntity="comentarios", inversedBy="peliculass", cascade={"remove"})
*/
protected $comentario;

    /**
     * Set comentario
     *
     * @param \uni\Bundle\PeliculasBundle\Entity\comentarios $comentario
     * @return peliculas
     */
    public function setComentario(\uni\Bundle\PeliculasBundle\Entity\comentarios $comentario = null)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return \uni\Bundle\PeliculasBundle\Entity\comentarios 
     */
    public function getComentario()
    {
        return $this->comentario;
    }
}
