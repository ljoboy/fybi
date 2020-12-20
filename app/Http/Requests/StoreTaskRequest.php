<?php
/**
 * FILE StoreTaskRequest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 7:23 PM
 */
namespace App\Http\Requests;

use App\Models\Task;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTaskRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('task_create');
    }

    public function rules()
    {
        return [
            'name'      => [
                'string',
                'required',
            ],
            'status_id' => [
                'required',
                'integer',
            ],
            'tags.*'    => [
                'integer',
            ],
            'tags'      => [
                'array',
            ],
            'due_date'  => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
