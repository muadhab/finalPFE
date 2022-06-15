<?php
declare(strict_types=1);
namespace App\Resource;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiPlatform;
use Symfony\Component\HttpFoundation\File\UploadedFile; 
/**
* @ApiResource()
*/
class document 
{
        /**
        * @ApiProperty(identifier=true)
        * 
        */
        public $id;
        /**
        * @ApiProperty() 
        */
        public $title;
        /**
         * @ApiProperty()
        */
        public  $coverImage;
} 