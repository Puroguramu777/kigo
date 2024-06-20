<?php

namespace App\Form;

use App\Entity\Projet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', null, [
                'label' => 'Titre du projet',
                'attr' => ['class' => 'form-control mb-3'],
            ])
            ->add('description', null, [
                'label' => 'Description du projet',
                'attr' => ['class' => 'form-control mb-3'],
            ])
            ->add('imageFile', FileType::class, [
                'required' => false,
                'label' => 'Image du projet',
                'attr' => ['class' => 'form-control mb-3'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Projet::class,
        ]);
    }
}
