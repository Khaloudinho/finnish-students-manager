<?php
namespace App\Http\Requests;
use Carbon\Carbon;

class StudentCreateRequest extends Request
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
            'firstname_student' => 'required|min:2',
            'lastname_student' => 'required|min:2',
            'dateofbirth_student' => 'required|date|before:yesterday',
            'gender_student' => 'required'
        ];
    }
}