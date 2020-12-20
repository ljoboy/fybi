<?php
/**
 * FILE UpdateAssetRequest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 7:28 PM
 */
namespace App\Http\Requests;

use App\Models\Asset;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAssetRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('asset_edit');
    }

    public function rules()
    {
        return [
            'category_id'   => [
                'required',
                'integer',
            ],
            'serial_number' => [
                'string',
                'nullable',
            ],
            'name'          => [
                'string',
                'required',
            ],
            'status_id'     => [
                'required',
                'integer',
            ],
            'location_id'   => [
                'required',
                'integer',
            ],
        ];
    }
}