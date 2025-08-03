<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'category_id' => 'required|integer|exists:category,id',
            'title' => 'required|string|min:3',
            'content' => 'required|string|min:5|max:225',
            'slug' => 'required|string|unique:posts,slug,' . $this->post->id,
            'category' => [
                'id' => $this->category->id,
                'name' => $this->category->name,
            ],

        ];
    }
}
