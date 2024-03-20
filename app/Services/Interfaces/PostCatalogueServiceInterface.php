<?php

namespace App\Services\Interfaces;

use Illuminate\Http\Request;

/**
 * Interface PostCatalogueServiceInterface
 * @package App\Services\Interfaces
 */
interface PostCatalogueServiceInterface
{
    public function patinate(Request $request);
    public function validate(Request $request);
    public function create(Request $request);
    public function update(int $id,Request $request);
    public function destroy(int $id);
}
