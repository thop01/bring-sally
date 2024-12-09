<?php

namespace App\Form;

use App\Entity\AllTypes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AllKindType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('stringtest')
            ->add('texttest')
            ->add('booleantest')
            ->add('integertest')
            ->add('floattest')
            ->add('arraytest')
            ->add('jsontest')
            ->add('objecttest')
            ->add('binarytest')
            ->add('blobtest')
            ->add('datetimetest', null, [
                'widget' => 'single_text',
            ])
            ->add('datetimetztest', null, [
                'widget' => 'single_text',
            ])
            ->add('datetest', null, [
                'widget' => 'single_text',
            ])
            ->add('timetest', null, [
                'widget' => 'single_text',
            ])
            ->add('dateintervaltest')
            ->add('decimaltest')
            ->add('guidtest')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AllTypes::class,
        ]);
    }
}
