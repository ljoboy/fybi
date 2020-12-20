<?php
/**
 * FILE StoreAssetStatusRequest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 7:06 PM
 */
namespace App\Http\Requests;

use App\Models\AssetStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAssetStatusRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('asset_status_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
        ];
    }
}
