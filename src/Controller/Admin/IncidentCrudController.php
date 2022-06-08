<?php

namespace App\Controller\Admin;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Entity\Incident;


 class IncidentCrudController extends AbstractCrudController 
 {
      public static function getEntityFqcn() : string 
      {
           return Incident::class ; 
        }
 }