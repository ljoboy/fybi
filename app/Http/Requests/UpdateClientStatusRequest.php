<?php
/**
 * FILE UpdateClientStatusRequest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 7:30 PM
 */
namespace App\Http\Requests;

use App\Models\ClientStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateClientStatusRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('client_status_edit');
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
