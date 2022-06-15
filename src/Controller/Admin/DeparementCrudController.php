<?php

namespace App\Controller\Admin;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Entity\Deparement;


 class DeparementCrudController extends AbstractCrudController 
 {
      public static function getEntityFqcn() : string 
      {
           return Deparement::class ; 
        }
 }