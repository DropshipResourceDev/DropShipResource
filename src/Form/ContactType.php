<?php

namespace App\Form;


use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label'=>'Nom'
            ])
            ->add('mail', EmailType::class, [
                'label'=>'Mail',
                'required'=>false
            ])
            ->add('phone', TextType::class, [
                'label'=>'Téléphone'
            ])
            ->add('subject', TextType::class, [
                'label'=>'Sujet',
                'required'=>false
            ])
            ->add('message', TextareaType::class, [
                'label'=>'Précisez votre demande',
                'required'=>false
            ])
            ->add('envoyer', SubmitType::class, [
                'label'=>'Envoyer'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
