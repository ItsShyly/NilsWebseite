<?php

namespace App\Controller\Admin;

use App\Entity\LebenslaufEintrag;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class LebenslaufEintragCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LebenslaufEintrag::class;
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        $fields[] = UrlField::new('link', 'Link');
        return $fields;
    }
}
