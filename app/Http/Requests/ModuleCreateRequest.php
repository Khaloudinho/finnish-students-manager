<?php
namespace App\Http\Requests;
use Carbon\Carbon;

class ModuleCreateRequest extends Request
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
        return [
            'name_module' => 'required|min:5|string',
            'credits_module' => 'required|digits:1,2',
            'teacher_responsible' => 'required|exists:teacher,teacher_number',
        ];
    }
}