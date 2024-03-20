<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Repositories\Interfaces\ProvinceRepositoryInterface;
use App\Models\Province;

/**
 * Class ProvinceRepository.
 */
class ProvinceRepository implements ProvinceRepositoryInterface
{
    public function getAll(){
        return Province::all();
    }
}
