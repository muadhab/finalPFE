<?php

namespace App\Controller\Admin;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Entity\User;


 class UserCrudController extends AbstractCrudController 
 {
      public static function getEntityFqcn() : string 
      {
           return User::class ; 
        }
 }