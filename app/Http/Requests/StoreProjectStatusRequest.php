<?php
/**
 * FILE StoreProjectStatusRequest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 7:22 PM
 */
namespace App\Http\Requests;

use App\Models\ProjectStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProjectStatusRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('project_status_create');
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
