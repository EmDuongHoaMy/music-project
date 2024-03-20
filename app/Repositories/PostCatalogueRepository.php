<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Repositories\Interfaces\PostCatalogueRepositoryInterface;
//use Your Model

/**
 * Class PostCatalogueRepository.
 */
class PostCatalogueRepository implements PostCatalogueRepositoryInterface
{
   public function output(){
    echo 123;die;
   }
}
