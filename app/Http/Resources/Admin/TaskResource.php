<?php
/**
 * FILE TaskResource.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 8:45 PM
 */
namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
