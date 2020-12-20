<?php
/**
 * FILE MassDestroyAssetsHistoryRequest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 6:34 PM
 */
namespace App\Http\Requests;

use App\Models\AssetsHistory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAssetsHistoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('assets_history_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:assets_histories,id',
        ];
    }
}
