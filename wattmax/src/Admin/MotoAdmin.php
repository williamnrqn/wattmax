<?php

namespace App\Admin;

use Doctrine\DBAL\Types\ArrayType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\Form\Type\BooleanType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type;

final class MotoAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form): void
    {
        $form
            ->tab('Information')
                ->with('Information', ['class' => 'col-md-9'])
                ->add('name')
                ->add('isshow', BooleanType::class, [
                    'required' => true,
                    'label' => 'Afficher ?',
                ])
                ->end()
                // part marque and it's possible to add a new marque from here
                ->with('Marque', ['class' => 'col-md-3'])
                    ->add('marque', ModelType::class, [
                        'class' => 'App\Entity\Marque',
                        'property' => 'name',
                        'btn_add' => 'Ajouter',
                    ])
                ->end()

        ;
    }

    protected function configureListFields(ListMapper $list): void
    {
        $list
            ->addIdentifier('name')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $filter): void
    {
        $filter
        ;
    }

    protected function configureShowFields(ShowMapper $show): void
    {
        $show
            ->add('name')
            ->add('Permit')
            ->add('Autonomie')
            ->add('Puissance')
            ->add('Vitesse')
            ->add('Equivalent')
            ->add('Batterieamovible')
            ->add('color')
            ->add('Prixdebase')
            ->add('Bonuseco')
            ->add('Prix')
            ->add('Photo')
            ->add('lien', Type\UrlType::class)
            ->add('isshow', BooleanType::class)
        ;
    }
}