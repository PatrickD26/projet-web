<?php

namespace App\Form;

use App\Entity\CustomerBase;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


abstract class CustomerBaseType extends AbstractTyppe
{
  /**
   * @param FormBuilderInterface $builder
   * @param array $options
   */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('civility', ChoiceType::class, [
        'label' => 'Civilité',
        'required' => true,
        'choices' => [ 'Madame', 'Monsieur' ],
        'expanded' => true,
        'multiple' => false
      ])
      ->add('lastName', TextType::class, [
        'label' => 'Nom',
        'required' => true
      ])
      ->add('firstName', TextType::class, [
        'label' => 'Prénom',
        'required' => true
      ])
      ->add('address1', TextType::class, [
        'label' => 'Adresse 1',
        'required' => true
      ])
      ->add('address2', TextType::class, [
        'label' => 'Adresse 2',
        'required' => false
      ])
      ->add('email', EmailType::class, [
        'label' => 'email',
        'required' => true
      ])
      ->add('save', SubmitType::class);
  }

  public function configureOptions(optionResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => CustomerBase::class,
    ));
  }
}
