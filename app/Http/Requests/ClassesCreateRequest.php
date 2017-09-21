<?php
namespace App\Http\Requests;
use Carbon\Carbon;

class ClassesCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $hour_format = '/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/';

        return [
            'name_class' => 'required|min:6',
            'room_class' => 'required|min:3|max:6',
            'id_module' => 'required|exists:study_module,id_module',
            'start_at' => ['required', 'before:end_at', 'regex:'.$hour_format],
            'end_at' => ['required', 'after:start_at', 'regex:'.$hour_format],
        ];
    }
}