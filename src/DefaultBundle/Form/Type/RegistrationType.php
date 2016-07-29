<?php

namespace DefaultBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class RegistrationType
 */
class RegistrationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
                'label' => 'form.name',
                'translation_domain' => 'registration',
            ))
            ->add('mail', 'email', array(
                'label' => 'form.mail',
                'translation_domain' => 'registration',
            ))
            ->add('save', 'submit', array(
                'label' => 'form.send',
                'translation_domain' => 'registration',
            ));
    }

    public function getName()
    {
        return 'registration';
    }
}
