<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            -> add('username')
            -> add('password', RepeatedType::class, array(
              'type' => PasswordType::class,
              'invalid_message' => 'Le mot de pass ne correspond pas',
              'first_options' => array('label' => 'Mot de passe'),
              'second_options' => array('label' => 'Confimer le mot de passe')
            ))
            -> add('lastname')
            -> add('firstname')
            -> add('email')
            -> add('birthday', BirthdayType::class)
            -> add('sexe', ChoiceType::class, array(
              'choices' => array(
                'Homme' => 'm',
                'Femme' => 'f'
              ),
            ))
            -> add('city')
            -> add('adress')
            -> add('zipCode')
            -> add('tel')
            -> add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
