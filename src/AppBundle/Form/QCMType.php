<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class QCMType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class,array(
                'label' => 'Nom du QCM',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('time',NumberType::class,array(
                'label' => 'Temps du QCM en minutes',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('techno',TextType::class,array(
                'label' => 'Nom de la techno',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('reset', ResetType::class, array(
                'label' => 'Effacer',
                'attr' => array(
                    'class' => 'btn btn-warning'
                )
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Nouveau QCM',
                'attr' => array(
                    'class' => 'btn btn-success'
                )
            ));
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\QCM'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_qcm';
    }
}