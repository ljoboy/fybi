<?php
/**
 * FILE StoreRoleRequest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 7:22 PM
 */
namespace App\Http\Requests;

use App\Models\Role;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreRoleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('role_create');
    }

    public function rules()
    {
        return [
            'title'         => [
                'string',
                'required',
            ],
            'permissions.*' => [
                'integer',
            ],
            'permissions'   => [
                'required',
                'array',
            ],
        ];
    }
}
