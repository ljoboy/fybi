<?php
/**
 * FILE UpdateIncomeCategoryRequest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 7:32 PM
 */
namespace App\Http\Requests;

use App\Models\IncomeCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateIncomeCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('income_category_edit');
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
