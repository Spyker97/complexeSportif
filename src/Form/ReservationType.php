<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id_terrain',TextType::class)
            ->add('cin',TextType::class)
//            ->add('discipline',TextType::class)
            ->add(
                'discipline',
                ChoiceType::class,
                [
                    'choices' => [
                        'football' => 'football',
                        'tennis' => 'tennis',
                        'hande' => 'hande',
                        'basket' => 'basket',
                    ],
                    'expanded' => true
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }

    public function find($id)
    {
    }


}
