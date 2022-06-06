<?php

namespace App\Form;

use App\Entity\OracleTester;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OracleTesterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Oraversion')
            ->add('Orahome')
            ->add('Orabase')
            ->add('Orasid')
            ->add('Ora_score')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => OracleTester::class,
        ]);
    }
}
