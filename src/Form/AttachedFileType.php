<?php

namespace App\Form;

use App\Entity\AttachedFile;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AttachedFileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('oraversion')
            ->add('orahome')
            ->add('orabase')
            ->add('orasid')
            ->add('ora_score')
            ->add('departement')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AttachedFile::class,
        ]);
    }
}
