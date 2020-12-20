<?php
/**
 * FILE UpdateExpenseCategoryRequest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 7:31 PM
 */
namespace App\Http\Requests;

use App\Models\ExpenseCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateExpenseCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('expense_category_edit');
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
