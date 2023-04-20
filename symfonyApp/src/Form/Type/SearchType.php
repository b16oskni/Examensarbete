<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use App\Entity\Game;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options): void {

        $builder
            ->setMethod('GET')
            ->setAction('/search')
            ->add('name', TextType::class)
            ->add('team', RadioType::class)
            ->add('player', RadioType::class)
            ->add('search', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void {
        $resolver->setDefaults([
            'require_team' => false,
            'require_player' => false,
        ]);
    }
}

?>