<?php

namespace DocBundle\Form;

use DocBundle\Repository\AuthorRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    /**
     * {@inheritdoc}
     * @TODO retour de liste d'entitées auteur, à lire avec attention
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')->add('genre')->add('format')->add('nbPage', NumberType::class)
            ->add('author', EntityType::class,[
                'class' => 'DocBundle\Entity\Author',
                'query_builder' => function(AuthorRepository $er) {
                return $er->createQueryBuilder('a')->orderBy('a.nom', 'ASC');
                },
                'choice_label' => function($x){
                    return strtoupper($x->getNom()).",".$x->getPrenom();
                },
                'placeholder' => "Auteur du livre:"
            ])
            ->add('Sauvegarder  ', SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DocBundle\Entity\Book'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'docbundle_book';
    }


}
