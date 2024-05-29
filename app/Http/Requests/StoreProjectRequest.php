<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|unique:projects,title',//il titolo deve essere l'unico della tabella 'projects' e la colonna 'title'
            'type_id' => 'nullable|exists:types,id',
            'cover_image' => 'nullable|image|max:500',
            'description' => 'nullable',
            'tools' => 'nullable',
            'project_url'=> 'nullable',
            'source_code_url'=> 'nullable',
        ];
    }
}
