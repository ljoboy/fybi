<?php
/**
 * FILE UpdateNoteRequest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 8:21 PM
 */
namespace App\Http\Requests;

use App\Models\Note;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateNoteRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('note_edit');
    }

    public function rules()
    {
        return [
            'project_id' => [
                'required',
                'integer',
            ],
            'note_text'  => [
                'required',
            ],
        ];
    }
}
