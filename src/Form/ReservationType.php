<?php

namespace App\Form;

use App\Entity\Reservation;

use App\Entity\Terrain;
use Captcha\Bundle\CaptchaBundle\Form\Type\CaptchaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
//use Symfony\Component\Form\Extension\Core\Type\EntityType;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idterrain',EntityType::class,[
                'class' => Terrain::class,
                'choice_label' => 'chef',
            ])
            //           ->add('cin',TextType::class)
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
            ->add('captchaCode', CaptchaType::class, array(
                'captchaConfig' => 'ExampleCaptchaReservation'
            ))
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
