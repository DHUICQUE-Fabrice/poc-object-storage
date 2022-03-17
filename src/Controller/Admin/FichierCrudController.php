<?php

namespace App\Controller\Admin;

use App\Entity\Fichier;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FichierCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Fichier::class;
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
