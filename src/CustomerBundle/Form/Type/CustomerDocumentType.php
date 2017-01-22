<?php

namespace CustomerBundle\Form\Type;

use CustomerBundle\Entity\Customer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use CustomerBundle\Entity\Document;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerDocumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nationality', ChoiceType::class, array(
                    'choices'  => Customer::getNationalityList(),
                )
            )
            ->add('vatnumber')
            ->add('firstname')
            ->add('lastname')
            ->add('fatherName')
            ->add('motherName')
            ->add('birthPlace')
            ->add('birthday')
            ->add('gender', ChoiceType::class, array(
                    'choices' => Customer::getGenderList()
                )
            )
            ->add('document', DocumentType::class)
            ->add('save', SubmitType::class, array('label' => 'Save Post'));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Customer::class,
        ));
    }
}