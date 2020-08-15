<?php

namespace App\Controller\Admin;

use App\Entity\Accueil;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class AccueilCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Accueil::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Titre'),
            ImageField::new('ImageFile')
                ->setFormType(VichImageType::class)
                ->setLabel('image'),
        ];
    }

}
