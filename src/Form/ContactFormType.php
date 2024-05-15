<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Validator\Constraints as Assert;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fullName', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlenght' => '1',
                    'maxlenght' => '255',
                    'placeholder' => 'Last Name / First Name',
                ],
                'label' => 'fullName',
                'label_attr' => [
                    'class' => 'form-label  mt-4'
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                ]
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlenght' => '2',
                    'maxlenght' => '255',
                    'placeholder' => 'Email',
                ],
                'label' => 'email',
                'label_attr' => [
                    'class' => 'form-label  mt-4'
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Email(),
                    new Assert\Length(['min' => 2, 'max' => 255])
                ]
            ])
            ->add('genre', ChoiceType::class, [
                'choices' => [
                    'Homme' => 'homme',
                    'Femme' => 'femme',
                    'Autre' => 'Autre',
                ],
                'placeholder' => 'Genre',
                'expanded' => true,
            ])
            ->add('job', ChoiceType::class, [
                'choices' => [
                    'Ingénieur' => 'ingenieur',
                    'Cadre supérieur' => 'cadre superieur',
                    'Autre' => 'Autre',
                ],
                'placeholder' => 'Profession',
            ])
            ->add('BirthDate', DateType::class, [ /** si erreur mettre DateTimeType */
                'widget' => 'single_text', // Affiche le champ sous forme de texte simple
                'label' => 'BirthDate',
                'html5' => false, // Désactive le rendu HTML5 pour la compatibilité avec les navigateurs plus anciens
                'format' => 'dd-MM-yyyy', /** si erreur mettre dd-MM-yyyy HH:mm:ss */
                'required' => true,
                'placeholder' => 'Birth Date (dd-mm-yyyy)',
            ])
            ->add('subject', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlenght' => '2',
                    'maxlenght' => '100',
                    'placeholder' => 'Subject',
                ],
                'label' => 'subject',
                'label_attr' => [
                    'class' => 'form-label  mt-4'
                ],
                'constraints' => [
                    new Assert\Length(['min' => 2, 'max' => 100])
                ]
            ])

            ->add('message', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Message',
                ],
                'label' => 'message',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ],
                'constraints' => [
                    new Assert\NotBlank()
                ]
            ])

            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary mt-4'
                ],
                'label' => 'Soumettre ma demande',
            ])


            //->add('relation_user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
