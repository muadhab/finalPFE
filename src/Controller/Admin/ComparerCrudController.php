<?php

namespace App\Controller\Admin;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Entity\Comparer;


 class ComparerCrudController extends AbstractCrudController 
 {
      public static function getEntityFqcn() : string 
      {
           return Comparer::class ; 
        }
 }