<?php

namespace App\Controller\Admin;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Entity\OracleTester;



 class OracleTesterCrudController extends AbstractCrudController 
 {
      public static function getEntityFqcn() : string 
      {
           return OracleTester::class ; 
        }
      
 }
 
     // public function index(): Response
     //      {
     //           return $this->render('home/index.html.twig', [
     //           'controller_name' => 'HomeController',
     //           ]);
     //      }
 
 