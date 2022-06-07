<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Path;
use src\Controller;
class CompareController extends AbstractController

{
    /**
     * @Route("/compare", name="app_compare")
     */
    public function index(): Response
    {
        // return $this->render('compare/index.html.twig', [
        //     'controller_name' => 'CompareController',
        // ]);

      // Data from file 1
$file_data = array();

// Matches that are in both files
$matches = array();

// id,name,width,depth,height,price
$handle = fopen("../src/Controller/one.csv", "r");
while (list($id, $name, $width, $depth, $height, $price) = fgetcsv($handle, 1000))
{
   $file_data[] = strtolower(preg_replace('/\s/', '', $id));
}
fclose($handle);

// Now check file 2 for matches
$handle = fopen("../src/Controller/two.csv", "r");
// id,name,width,depth,height,price
while (list($id, $name, $width, $depth, $height, $price) = fgetcsv($handle, 1000))
{
   if(in_array(strtolower(preg_replace('/\s/', '', $id)), $file_data))
   {
       $ids[] = strtolower(preg_replace('/\s/', '', $id));
       $prices[] = strtolower(preg_replace('/\s/', '', $price));
   }
}
fclose($handle);


print_r($ids);
print_r($prices);
echo '<br> ************* <br>';


foreach ($prices as $key => $price) {
  $price = $price + 100;
  echo strtoupper($ids[$key]) . ' - ' . $price . '<br>';
}


    }
    
    
}
