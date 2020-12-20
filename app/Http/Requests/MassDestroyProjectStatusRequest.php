<?php
/**
 * FILE MassDestroyProjectStatusRequest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 6:52 PM
 */
namespace App\Http\Requests;

use App\Models\ProjectStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyProjectStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('project_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:project_statuses,id',
        ];
    }
}
