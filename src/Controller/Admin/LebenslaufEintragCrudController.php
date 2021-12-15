<?php

namespace App\Controller\Admin;

use App\Entity\LebenslaufEintrag;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class LebenslaufEintragCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LebenslaufEintrag::class;
    }

    public function createEntity(string $entityFqcn)
    {
        $entity = new LebenslaufEintrag();
        $entity->setPraktika(false);
    }

    public function configureFields(string $pageName): iterable
    {
        yield DateField::new('fromDate');
        yield DateField::new('toDate');
        yield TextField::new('title');
        yield TextareaField::new('text');
        yield TextField::new('position');
        yield UrlField::new('link', 'Link');
        yield BooleanField::new('praktika')->hideOnForm();
    }
}
