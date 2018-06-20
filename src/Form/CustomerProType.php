<?php

namespace App\Form;

use App\Entity\CustomerPro;
use App\Form\CustomerBaseType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class CustomerProType extends CustomerBaseType
{
  /**
   * @param FormBuilderInterface $builder
   * @param array $options
   */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    parent::buildForm($builder, $options);
    $builder
      ->add('societyName', TextType::class, [
        'label' => 'Nom de la société',
        'required' => true
      ])
      ->add('position', TextType::class, [
        'label' => 'Poste occupé',
        'required' => true
      ])
      ->add('companyPhone', TextType::class, [
        'label' => 'Téléphone société',
        'required' => true
      ])
      ->add('directLine', TextType::class, [
        'label' => 'Téléphone direct',
        'required' => true
      ]);
  }

  public function configureOptions(optionResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => CustomerPro::class,
    ));
  }
}
