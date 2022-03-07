<?php

namespace App\Form;

use App\Entity\Cours;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Date')
            ->add('Nom_coach')
            ->add('Num_salle')
            ->add('Type_cours')
            ->add(
                'Type_cours',
                ChoiceType::class,
                [
                    'choices' => [
                        'Rpm' => 'Rpm',
                        'yoga' => 'yoga',
                        'Boxing' => 'Boxing',
                        'CrossFit' => 'CrossFit',

                    ],
                    'expanded' => true
                ]
            )
            ->add('heure')


            ->add('image', FileType::class, [
                'label' => 'Veuillez Telecharger votre image' ,
                'mapped' => false,

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
        ]);
    }
}
