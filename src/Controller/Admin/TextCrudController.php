<?php

namespace App\Controller\Admin;

use App\Entity\Text;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TextCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Text::class;
    }
    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
