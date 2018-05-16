<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;

class GenusFormType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('name')
      ->add('speciesCount')
      ->add('funFact');
  }

  public function configureOptions(OptionsResolver $resolver)
  {

  }

}
