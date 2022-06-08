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
 }