<?php
/**
 * FILE MassDestroyClientStatusRequest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 6:42 PM
 */
namespace App\Http\Requests;

use App\Models\ClientStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyClientStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('client_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:client_statuses,id',
        ];
    }
}
