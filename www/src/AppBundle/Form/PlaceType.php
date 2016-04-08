<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlaceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('place', EntityType::class, [
                'class' => 'AppBundle:Place',
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-control input-lg select2'
                ],
                'expanded' => false,
                'multiple' => true,
                'label' => false
            ])
        ;
    }

}
