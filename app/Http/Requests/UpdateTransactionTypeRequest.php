<?php
/**
 * FILE UpdateTransactionTypeRequest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 8:25 PM
 */
namespace App\Http\Requests;

use App\Models\TransactionType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTransactionTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('transaction_type_edit');
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
