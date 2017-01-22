<?php
/**
 * Created by PhpStorm.
 * User: mkrc
 * Date: 22/01/2017
 * Time: 16:41
 */

namespace CustomerBundle\Form\Type;

use CustomerBundle\Entity\Customer;
use CustomerBundle\Entity\Document;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DocumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('docType', EntityType::class, array(
                'class' => 'CustomerBundle:DocumentType',
                'expanded' => false,
                'multiple' => false,
            ))
            ->add('docDate')
            ->add('docNumber')
            ->add('docPlace');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Document::class,
        ));
    }
}