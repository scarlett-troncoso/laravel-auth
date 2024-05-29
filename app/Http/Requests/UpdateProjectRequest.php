<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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

            'title' => ['required', Rule::unique('projects')->ignore($this->project?->id)], //il titolo deve essere l'unico della tabella 'projects';  il campo da validare nell update con 'unique' ci dara un errore perche controllerá anche se stesso cioé il suo 'title', per quello inseriamo lo "ignore" e l'id del project, per dirli che deve controllare che sia l'unico ma con ecezione di lui stesso. questo si puó fare anche in questo altro modo sotto: ↓↓↓
            //'title' => 'required|unique:projects,title,except,' . $this->project->id, //il titolo deve essere l'unico della tabella 'projects' e la colonna 'title'; inseriamo lo "except" e l'id del project, per dirli che deve controllare che sia l'unico ma con ecezione di lui stesso
            
            
            'cover_image' => 'nullable|image|max:500',
            'description' => 'nullable',
            'tools' => 'nullable',
            'project_url'=> 'nullable',
            'source_code_url'=> 'nullable',
        ];
    }
}
