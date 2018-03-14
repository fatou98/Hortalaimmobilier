<?php

namespace HTL\ImmobilierBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ClientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numpiece')
            ->add('nomComplet')
            ->add('tel')
            ->add('adresse')
            ->add('email')
            ->add('password')
            ->add('save',SubmitType::class,array('label' => 'enregistrer'));

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HTL\ImmobilierBundle\Entity\Client'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'htl_immobilierbundle_client';
    }


}
