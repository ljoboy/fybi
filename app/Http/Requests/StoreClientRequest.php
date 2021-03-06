<?php
/**
 * FILE StoreClientRequest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 7:07 PM
 */
namespace App\Http\Requests;

use App\Models\Client;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreClientRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('client_create');
    }

    public function rules()
    {
        return [
            'first_name' => [
                'string',
                'required',
            ],
            'last_name'  => [
                'string',
                'nullable',
            ],
            'company'    => [
                'string',
                'nullable',
            ],
            'phone'      => [
                'string',
                'nullable',
            ],
            'website'    => [
                'string',
                'nullable',
            ],
            'skype'      => [
                'string',
                'nullable',
            ],
            'country'    => [
                'string',
                'nullable',
            ],
        ];
    }
}
