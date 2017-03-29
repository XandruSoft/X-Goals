<?php

namespace Xandrusoft\GoalBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class GoalAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('parent')
            ->add('title')
            ->add('description')
            ->add('top')
            ->add('current')
            ->add('date')
            ->add('complete')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('parent')
            ->add('title')
            ->add('description')
            ->add('reference','url')
            ->add('top')
            ->add('current')
            ->add('date')
            ->add('complete')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('parent')
            ->add('title')
            ->add('description')
            ->add('reference')
            ->add('top')
            ->add('current')
            ->add('date', 'sonata_type_datetime_picker', array(
                'dp_side_by_side'       => true,
                'dp_use_current'        => false,
                'dp_use_seconds'        => false,
                'required'              => false,
            ))
            ->add('complete')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('parent')
            ->add('title')
            ->add('description')
            ->add('reference')
            ->add('top')
            ->add('current')
            ->add('date', 'sonata_type_datetime_picker', array(
                'dp_side_by_side'       => true,
                'dp_use_current'        => false,
                'dp_use_seconds'        => false,
                'required'              => false,
            ))
            ->add('complete')
        ;
    }
}
