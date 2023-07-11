<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DomainRequest extends FormRequest
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
            'domain'    => "bail|required|min:3|max:255|unique:domains,domain,". $this->segment(2),
            'tenant_id' => 'bail|required|integer|exists:tenants,id',
        ];

    }

    public function attributes()
    {
        return [
            'domain'    => 'domínio',
            'tenant_id' => 'escritório',
        ];
    }

    public function messages()
    {
        return [
            '*.required'       => 'O campo :attribute é obrigatório',
            '*.min'            => 'Insira no mínimo :min caracteres',
            '*.max'            => 'Insira :max caracteres no máximo',
            '*.integer'        => 'O :attribute é um campo inteiro',
            'domain.unique'    => 'O :attribute já existe',
            'tenant_id.exists' => 'O :attribute não existe',
        ];
    }

}
