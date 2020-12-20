<?php
/**
 * FILE AssetResource.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 8:36 PM
 */
namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class AssetResource extends JsonResource
{
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
