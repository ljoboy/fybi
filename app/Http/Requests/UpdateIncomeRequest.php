<?php
/**
 * FILE UpdateIncomeRequest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 8:20 PM
 */
namespace App\Http\Requests;

use App\Models\Income;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateIncomeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('income_edit');
    }

    public function rules()
    {
        return [
            'entry_date'  => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'amount'      => [
                'required',
            ],
            'description' => [
                'string',
                'nullable',
            ],
        ];
    }
}
