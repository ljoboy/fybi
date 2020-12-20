<?php
/**
 * FILE MassDestroyIncomeSourceRequest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 6:50 PM
 */
namespace App\Http\Requests;

use App\Models\IncomeSource;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyIncomeSourceRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('income_source_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:income_sources,id',
        ];
    }
}
