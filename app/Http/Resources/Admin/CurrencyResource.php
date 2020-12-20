<?php
/**
 * FILE CurrencyResource.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 8:40 PM
 */
namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class CurrencyResource extends JsonResource
{
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
