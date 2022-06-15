<?php

namespace App\Controller\Admin;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Entity\Upload;


 class UploadCrudController extends AbstractCrudController 
 {
      public static function getEntityFqcn() : string 
      {
           return Upload::class ; 
        }
//         public function configureFields (string $pageName):iterable
//          {
//                return [
               
//                     file1fileField::new('Upload')
//                ->setBasePath('files/Upload')
//                ->setUploadDir('public/files/Upload')
//                ->setUploadedFileNamePattern('[randomhash].[extension]')
//                ->setRequired(false),
//                ];
//  }
}