<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlaceType extends AbstractType
{
    protected $place;
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->place = $options['place'];
        if ($this->place) {

            $builder
                ->add('place', EntityType::class, [
                    'class' => 'AppBundle:Place',
                    'data' => $this->place,
                    'choice_label' => 'name',
                    'attr' => [
                        'class' => 'form-control input-lg'
                    ],
                    'expanded' => false,
                    'multiple' => false,
                    'label' => false
                ])
            ;

        } else {
            $builder
                ->add('place', EntityType::class, [
                    'class' => 'AppBundle:Place',
                    'choice_label' => 'name',
                    'attr' => [
                        'class' => 'form-control input-lg'
                    ],
                    'expanded' => false,
                    'multiple' => false,
                    'label' => false
                ])
            ;
        }
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'place' => null,
        ));
    }

}
