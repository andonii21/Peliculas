<?php

namespace uni\Bundle\PeliculasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class peliculasType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('descripcion')
            ->add('foto')
            ->add('categoriass')
            ->add('noticiass')
            ->add('comentario')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uni\Bundle\PeliculasBundle\Entity\peliculas'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_bundle_peliculasbundle_peliculas';
    }
}
