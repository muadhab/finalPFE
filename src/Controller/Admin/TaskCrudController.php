<?php

namespace App\Controller\Admin;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Entity\Task;


 class TaskCrudController extends AbstractCrudController 
 {
      public static function getEntityFqcn() : string 
      {
           return Task::class ; 
        }
 }