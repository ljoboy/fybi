<?php
/**
 * FILE MassDestroyTransactionTypeRequest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 6:55 PM
 */
namespace App\Http\Requests;

use App\Models\TransactionType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyTransactionTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('transaction_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:transaction_types,id',
        ];
    }
}
