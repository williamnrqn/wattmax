<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type;


final class MarqueAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form): void
    {
        $directory = '../assets/img/marque';
        $images = [];
    
        if (is_dir($directory)) {
            $files = scandir($directory);
    
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..') {
                    $images += [str_replace('_', ' ', str_split($file, strlen($file) - 4)[0]) => 'img/marque/' . $file];
                }
            }
        } else {
            $images = [getcwd() => 'No images found in this directory'];
        }
        $form
            ->add('name')
            ->add('name_image', Type\ChoiceType::class, [
                'choices' => $images
            ])
            ->add('lien')
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
            ->add('name')
        ;
    }

    protected function configureShowFields(ShowMapper $show): void
    {
        $show
            ->add('name')
            ->add('name_image')
            ->add('lien')
        ;
    }
}
