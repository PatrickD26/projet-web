<?php

namespace App\Form;

use App\Entity\CustomerPart;
use App\Form\CustomerBaseType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class CustomerPartType extends CustomerBaseType
{
  /**
   * @param FormBuilderInterface $builder
   * @param array $options
   */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    parent::buildForm($builder, $options);
    $builder
      ->add('phone', TextType::class, [
        'label' => 'Téléphone fixe',
        'required' => false
      ])
      ->add('mobilePhone', TextType::class, [
        'label' => 'Téléphone mobile',
        'required' => false
      ]);
  }

  public function configureOptions(optionResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => CustomerPart::class,
    ));
  }
}
