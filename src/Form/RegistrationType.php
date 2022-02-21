<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use function Sodium\add;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('cin')
            ->add('username')
            ->add('prenom')
            ->add(
                'genre',
                ChoiceType::class,
                [
                    'choices' => [
                        'Homme' => 'Homme',
                        'Femme' => 'Femme',
                    ],
                    'expanded' => true
                ]
            )

            ->add('date_naissance',DateType::class,[
                'widget' => 'single_text',



                // prevents rendering it as type="date", to avoid HTML5 date pickers
                'html5' => true ,
                'required' => true,
                'empty_data' => '01/01/1800',

                // adds a class that can be selected in JavaScript
            ])

            ->add('email')
            ->add('password', PasswordType::class)
            ->add('confirm_password', PasswordType::class)

            ->add('adresse')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
