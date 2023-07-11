<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLocatarioRequest extends FormRequest
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
            'name'        => "bail|required|unique:tenants,name," . $this->segment(2) . ",id|min:3|max:128",
            'description' => 'bail|min:3|max:255',
            'status'      => 'bail|integer',
            'domain'      => 'bail|required|unique:domains,domain,' . $this->segment(2) . ',tenant_id|min:3|max:128',
        ];

    }

    public function attributes()
    {
        return [
            'name'        => 'nome do escritório',
            'description' => 'descrição',
            'status'      => 'status do escritório',
            'domain'      => 'domínio',
        ];
    }

    public function messages()
    {
        return [
            'name.required'   => 'O :attribute é obrigatório',
            'domain.required' => 'O :attribute é obrigatório',
            'name.unique'     => 'O :attribute já existe',
            '*.min'           => 'Insira no mínimo :min caracteres',
            '*.max'           => 'Insira :max caracteres no máximo',
            'status.integer'  => 'Insira um valor inteiro',
            'domain.unique'   => 'O :attribute já existe',
        ];
    }

}
