<?php

namespace App\Form;

use App\Entity\Abonnement;
use App\Entity\Cours;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AbonnementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type')
            ->add(
                'type',
                ChoiceType::class,
                [
                    'choices' => [
                        '1 Mois' => '1 Mois',
                        '3 Mois' => '3 Mois',
                        '6 Mois' => '6 Mois',
                        '12 Mois' => '12 Mois',

                    ],

                ]
            )
            ->add('number')
            ->add('mail')
            ->add('Date_inscri')
            ->add('Cours',EntityType::class,[
                'class'=>Cours::class,
                'choice_label'=>'Type_cours',
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Abonnement::class,
        ]);
    }
}
